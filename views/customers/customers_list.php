<?php
// *************************************************************************
// *                                                                       *
// * DEPRIXA PRO -  Integrated Web Shipping System                         *
// * Copyright (c) JAOMWEB. All Rights Reserved                            *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * Email: support@jaom.info                                              *
// * Website: http://www.jaom.info                                         *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * This software is furnished under a license and may be used and copied *
// * only  in  accordance  with  the  terms  of such  license and with the *
// * inclusion of the above copyright notice.                              *
// * If you Purchased from Codecanyon, Please read the full License from   *
// * here- http://codecanyon.net/licenses/standard                         *
// *                                                                       *
// *************************************************************************


if (!$user->cdp_is_Admin())
    cdp_redirect_to("login.php");

$db = new Conexion;

$userData = $user->cdp_getUserData();

?>
<!DOCTYPE html>
<html dir="<?php echo $direction_layout; ?>" lang="en"> 

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/<?php echo $core->favicon ?>">
    <title><?php echo $lang['filter6'] ?> | <?php echo $core->site_name ?></title>
    <?php include 'views/inc/head_scripts.php'; ?>

    

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->


    <?php include 'views/inc/preloader.php'; ?>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->

        <?php include 'views/inc/topbar.php'; ?>

        <!-- End Topbar header -->


        <!-- Left Sidebar - style you can find in sidebar.scss  -->

        <?php include 'views/inc/left_sidebar.php'; ?>


        <!-- End Left Sidebar - style you can find in sidebar.scss  -->

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            <div class="container-fluid">

            <!-- -------------------------------------------------------------- -->
              <!-- Start Page Content -->
              <!-- -------------------------------------------------------------- -->
              <div class="widget-content searchable-container list">
                <!-- ---------------------
                            start Contact
                        ---------------- -->
                    <div class="card card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h3 class="card-title"><span><?php echo $lang['filter6']; ?></span></h3>
                            </div>
                        </div>
                        <div><hr><br></div>

                      <div class="row">
                            <div class="col-md-8 col-xl-4">
                                <div class="col-sm-12 col-md-6 pull-right m-b-1">
                                    <div class="input-group input-group">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
                                        </div>
                                        <input type="text" name="search" id="search" class="form-control input-sm float-right" placeholder="<?php echo $lang['filter82']; ?>" onkeyup="cdp_load(1);">
                                    </div>
                                </div><!-- /.col -->

                                <div class="col-sm-12 col-md-6 pull-right m-b-1 mb-2"> <!-- Agregado mb-2 para el espacio -->
                                    <div class="input-group">
                                        <select onchange="cdp_load(1);" class="form-control custom-select" id="filterby" name="filterby">
                                            <option value="0"><?php echo $lang['filter83']; ?></option>
                                            <option value="1"><?php echo $lang['filter84']; ?></option>
                                            <option value="2"><?php echo $lang['filter85']; ?></option>
                                        </select>
                                    </div>
                                </div>   
                            </div>
                        <div
                          class="
                            col-md-4 col-xl-4
                            text-end
                            d-flex
                            justify-content-md-end justify-content-center
                            mt-3 mt-md-0
                          "
                        >
                          <a href="customers_add.php" id="btn-add-contact" class="btn btn-info">
                            <i data-feather="users" class="feather-sm fill-white me-1"> </i>
                            Add Contact</a
                          >
                        </div>
                      </div>
                    </div>
                    <!-- ---------------------
                                end Contact
                        ---------------- -->

                    <div class="row">
                        <!-- Column -->

                        <div class="col-lg-12 col-xl-12 col-md-12">

                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">

                                        <div class="outer_div"></div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                </div>
                <?php include 'views/inc/footer.php'; ?>

            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->

    <?php include('helpers/languages/translate_to_js.php'); ?>

    <script src="dataJs/customers.js"></script>


</body>

</html>