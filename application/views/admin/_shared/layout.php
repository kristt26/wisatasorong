<!DOCTYPE html>
<html ng-app="apps" ng-controller="indexController">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{titleHeader}}</title>
  <link rel="icon" href="<?=base_url('favicon.ico')?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>public/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?=base_url()?>public/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?=base_url()?>public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?=base_url()?>public/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url()?>public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url()?>public/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?=base_url()?>public/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">

  <link rel="stylesheet" href="<?=base_url()?>public/plugins/sweetalert2/sweetalert2.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>public/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
            .containerr {
                display: flex;
                height: 60vh;
                justify-content: center;
                align-items: center;
                direction: row;
            }

            @media screen {
                #print {
                    /* font-family:verdana, arial, sans-serif; */
                }
                .screen{
                    display:none;
                }
            }

            @media print {
                /* #print {font-family:georgia, times, serif;} */
                .screen{
                    display:block;
                }
            }
        </style>
</head>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-footer-fixed layout-navbar-fixed">
  <?php
if (!$this->session->userdata('is_login')) {
    redirect('auth');
}
?>
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('auth/logout')?>">
            LOGOUT
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php
$this->load->view('_shared/sidebar');

?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>{{header}}</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?=base_url('home')?>">Home</a></li>
                <li class="breadcrumb-item active">{{breadcrumb}}</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <section class="content">
        <div class="container-fluid">
          <?=$content?>
        </div>
      </section>
    </div>

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Sistem Informasi pendataan Wajib Pajak</b>
      </div>
      <strong>Copyright &copy; 2020
    </footer>

    <!-- Control Sidebar -->
    <!-- <aside class="control-sidebar control-sidebar-dark">
    </aside> -->
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?=base_url()?>public/plugins/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>public/plugins/angular/angular.min.js"></script>

  <script src="<?=base_url()?>public/js/apps.js"></script>
  <script src="<?=base_url()?>public/js/services/helper.services.js"></script>
  <script src="<?=base_url()?>public/js/services/auth.services.js"></script>
  <!-- <script src="<?=base_url()?>public/js/services/storage.services.js"></script> -->
  <script src="<?=base_url()?>public/js/services/services.js"></script>
  <script src="<?=base_url()?>public/js/controllers/admin.controllers.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?=base_url()?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="<?=base_url()?>public/plugins/select2/js/select2.full.min.js"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="<?=base_url()?>public/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <!-- InputMask -->
  <script src="<?=base_url()?>public/plugins/moment/moment.min.js"></script>
  <script src="<?=base_url()?>public/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
  <!-- date-range-picker -->
  <script src="<?=base_url()?>public/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="<?=base_url()?>public/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?=base_url()?>public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="<?=base_url()?>public/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <script src="<?=base_url()?>public/plugins/sweetalert2/sweetalert2.all.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?=base_url()?>public/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?=base_url()?>public/dist/js/demo.js"></script>
  <script src="<?=base_url();?>public/js/googleMap.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByGhiEjG2rcKsVqYXwJOtUugy0BS55_lo&libraries=geometry,places"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script src="<?=base_url()?>public/plugins/loading/dist/loadingoverlay.min.js"></script>
  <script src="<?=base_url()?>public/lib/angular-locale_id-id.js"></script>
  <script src="<?=base_url()?>public/lib/input-mask/angular-input-masks-standalone.min.js"></script>
  <script src="<?=base_url()?>public/lib/angular-base64-upload.js"></script>
  <script src="http://cdn.sobekrepository.org/includes/gmaps-markerwithlabel/1.9.1/gmaps-markerwithlabel-1.9.1.js" type="text/javascript"></script>
  <script src="<?=base_url()?>public/js/jquery.PrintArea.js"></script>
  <!-- Page script -->
  <script>
    $.LoadingOverlay("show", {
      background : "rgba(0, 0, 0, 0.9)",
			image : "<?php echo base_url('public/img/preloader.gif'); ?>",
			imageAnimation: 'none'
    });
    $(function () {
      function formatState (state) {
        if (!state.id) {
            return state.text;
        }
        var baseUrl = "<?=base_url()?>/public/img/marker/";
        var $state = $(
            '<span><img src="' + baseUrl + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
        );
        return $state;
      };
      //Initialize Select2 Elements
      $('.marker').select2({
        placeholder: '--- Pilih Item ---',
        templateResult: formatState
      });
      $('.select3').select2({
        placeholder: '--- Pilih Item ---'
      });

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date range picker
      $('#reservationdate').datetimepicker({
        format: 'L'
      });
      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function (event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      });

      $("input[data-bootstrap-switch]").each(function () {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });

    })
  </script>
</body>

</html>
