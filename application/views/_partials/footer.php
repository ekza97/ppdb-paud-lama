<!-- jQuery -->
<script src="<?=base_url('assets/');?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/');?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?=base_url('assets/');?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets/');?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url('assets/');?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url('assets/');?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=base_url('assets/');?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url('assets/');?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url('assets/');?>plugins/jszip/jszip.min.js"></script>
<script src="<?=base_url('assets/');?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=base_url('assets/');?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=base_url('assets/');?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=base_url('assets/');?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=base_url('assets/');?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?=base_url('assets/');?>plugins/jquery-mask/jquery-mask.min.js"></script>
<script src="<?=base_url('assets/');?>plugins/sweet-alert/sweetalert2.all.min.js"></script>
<script src="<?=base_url('assets/');?>plugins/sweet-alert.js"></script>
<!-- Select2 -->
<script src="<?=base_url('assets/');?>plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/');?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('assets/');?>dist/js/demo.js"></script>
</body>
<script type="text/javascript">
const sekarang = new Date();
const tgl = sekarang.getDate();
var namahari = ("Minggu Senin Selasa Rabu Kamis Jum'at Sabtu");
var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
namahari = namahari.split(" ");
namabulan = namabulan.split(" ");
const hari = sekarang.getDay();
const bln = sekarang.getMonth();
const thn = sekarang.getFullYear();
document.getElementById("tanggal").innerHTML = namahari[hari] + ", " + tgl + " " + namabulan[bln] + " " + thn;

// 1 detik = 1000
window.setTimeout("waktu()", 1000);

function waktu() {
    var tanggal = new Date();
    setTimeout("waktu()", 1000);
    document.getElementById("jam").innerHTML = tanggal.getHours() + ":" + tanggal.getMinutes() + ":" + tanggal
        .getSeconds();
}
</script>

<script>
$(document).ready(function() {

    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        buttons: [
            'copy',
            'csv',
            {
                extend: 'excel',
                // title: 'Data Orang Tua',
                // messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
            },
            {
                extend: 'pdf',
                // title: 'Data Orang Tua',
                messageBottom: null
            },
            {
                extend: 'print',
                // title: document.getElementByClass("title-datatable").html(),
                // title: 'Data Orang Tua',
                // messageTop: function() {
                //     return 'This is the first time you have printed this document.';
                // },
                messageBottom: null
            }
        ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $("#example2").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
    });

    $('.uang').mask('000.000.000.000.000', {
        reverse: true
    });
    $('.angka').mask('000000000000000', {
        reverse: true
    });
    $('.nik').mask('0000000000000000', {
        reverse: true
    });
    // $('.select2').select2({
    //     theme: "classic",
    // });
    $('.select2').select2({
        theme: 'bootstrap4',
    });
    // $('[data-toggle="tooltip"]').tooltip();
    $('#check_all').on('click', function() {
        if (this.checked) {
            $('.check').each(function() {
                this.checked = true;
            });
        } else {
            $('.check').each(function() {
                this.checked = false;
            });
        }
    });

    $('.check').on('click', function() {
        if ($('.check:checked').length == $('.check').length) {
            $('#check_all').prop('checked', true);
        } else {
            $('#check_all').prop('checked', false);
        }
    });
    $('#terima_all').click(function() {
        var terima_check = $('.check:checked');
        if (terima_check.length > 0) {
            var terima_value = [];
            $(terima_check).each(function() {
                terima_value.push($(this).val());
            });

            $.ajax({
                url: "<?= base_url(); ?>biodata/terima",
                method: "POST",
                data: {
                    id: terima_value
                },
                success: function() {
                    Swal.fire({
                        title: 'Berhasil',
                        text: 'Calon Siswa telah berhasil di Terima',
                        icon: 'success',
                        allowOutsideClick: false,
                        timer: 1500
                    });
                    setTimeout(() => {
                        document.location.href =
                            "<?=base_url('menu/seleksi');?>";
                    }, 1500);
                }
            })
        } else {
            Swal.fire({
                title: 'Gagal',
                text: 'Calon Siswa gagal berhasil di Terima',
                icon: 'error',
                allowOutsideClick: false
            });
        }
    })
    $('#tolak_all').click(function() {
        var tolak_check = $('.check:checked');
        if (tolak_check.length > 0) {
            var tolak_value = [];
            $(tolak_check).each(function() {
                tolak_value.push($(this).val());
            });
            $.ajax({
                url: "<?= base_url(); ?>biodata/tolak",
                method: "POST",
                data: {
                    id: tolak_value
                },
                success: function() {
                    Swal.fire({
                        title: 'Berhasil',
                        text: 'Calon Siswa telah berhasil di Tolak',
                        icon: 'success',
                        allowOutsideClick: false,
                        timer: 1500
                    });
                    setTimeout(() => {
                        document.location.href =
                            "<?=base_url('menu/seleksi');?>";
                    }, 1500);
                }
            })
        } else {
            Swal.fire({
                title: 'Gagal',
                text: 'Calon Siswa gagal berhasil di Tolak',
                icon: 'error',
                allowOutsideClick: false
            });
        }
    })
})

function exit() {
    Swal.fire({
        title: 'Konfirmasi Keluar',
        text: "Anda yakin ingin keluar dari aplikasi ?",
        icon: 'warning',
        allowOutsideClick: false,
        showCancelButton: true,
        cancelButtonColor: '#3085d6',
        confirmButtonColor: '#d33',
        cancelButtonText: 'Tidak',
        confirmButtonText: 'Iya, Keluar',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = "<?=base_url('menu/logout');?>";
        }
    })
}
</script>


</html>
