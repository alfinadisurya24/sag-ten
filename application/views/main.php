<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$title?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('vendors/feather/feather.css')?> ">
    <link rel="stylesheet" href="<?= base_url('vendors/mdi/css/materialdesignicons.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('vendors/ti-icons/css/themify-icons.css')?>">
    <link rel="stylesheet" href="<?= base_url('vendors/typicons/typicons.css')?>">
    <link rel="stylesheet" href="<?= base_url('vendors/simple-line-icons/css/simple-line-icons.css')?>">
    <link rel="stylesheet" href="<?= base_url('vendors/css/vendor.bundle.base.css')?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- <link rel="stylesheet" href="<?#= base_url('vendors/datatables.net-bs4/dataTables.bootstrap4.css')?>"> -->
    <link rel="stylesheet" href="<?= base_url('assets/js/select.dataTables.min.css')?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/vertical-layout-light/style.css')?>">
    <!-- endinject -->

    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.24/af-2.3.5/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/cr-1.5.3/date-1.0.2/fc-3.3.2/fh-3.1.8/kt-2.6.1/r-2.2.7/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.2/datatables.min.css"/>
    <!-- <link rel="shortcut icon" href="<?#= base_url('assets/images/favicon.png')?>" /> -->

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- plugins:js -->
    <script src="<?= base_url('vendors/js/vendor.bundle.base.js')?>"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.24/af-2.3.5/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/cr-1.5.3/date-1.0.2/fc-3.3.2/fh-3.1.8/kt-2.6.1/r-2.2.7/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.2/datatables.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url('vendors/chart.js/Chart.min.js')?>"></script>
    <script src="<?= base_url('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')?>"></script>
    <script src="<?= base_url('vendors/progressbar.js/progressbar.min.js')?>"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('assets/js/off-canvas.js')?>"></script>
    <script src="<?= base_url('assets/js/hoverable-collapse.js')?>"></script>
    <script src="<?= base_url('assets/js/template.js')?>"></script>
    <script src="<?= base_url('assets/js/settings.js')?>"></script>
    <script src="<?= base_url('assets/js/todolist.js')?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= base_url('assets/js/dashboard.js')?>"></script>
    <script src="<?= base_url('assets/js/Chart.roundedBarCharts.js')?>"></script>
    <!-- End custom js for this page-->
</head>

<body>
    <div class="container-scroller">

        <!-- header header  -->
        <?php $this->load->view('layout/navbar'); ?>
        <!-- End header header -->

        
        
        <div class="container-fluid page-body-wrapper">

            <!-- Left Sidebar  -->
            <?php $this->load->view('layout/sidebar'); ?>
            <!-- End Left Sidebar  -->
            

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                            <h2><?= $header ?></h2>
                        </div>

                        <!-- Start Page Content -->
                            <?php $this->load->view($section); ?>
                        <!-- End PAge Content -->
                    </div>
                </div>


                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © Sag-ten
                            2021. All
                            rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->


    <script>
        $(document).ready(function () {
            // datatables
            $("#my-tables").DataTable();
        });
    </script>
</body>

</html>