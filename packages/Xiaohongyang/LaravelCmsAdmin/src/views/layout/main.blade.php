<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AdminLTE 2 | Starter</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
    <link rel="stylesheet" href="/plugin/AdminLTE-2.4.5/bower_components/bootstrap/dist/css/bootstrap.min.css"/>

    <!-- Select2 -->
    <link rel="stylesheet" href="/plugin/AdminLTE-2.4.5/bower_components/select2/dist/css/select2.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugin/AdminLTE-2.4.5/bower_components/font-awesome/css/font-awesome.min.css"/>
    <!-- Ionicons -->
    <link rel="stylesheet" href="/plugin/AdminLTE-2.4.5/bower_components/Ionicons/css/ionicons.min.css"/>
    <!-- Theme style -->
    <link rel="stylesheet" href="/plugin/AdminLTE-2.4.5/dist/css/AdminLTE.min.css"/>
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="/plugin/AdminLTE-2.4.5/dist/css/skins/skin-blue.min.css"/>


    <link rel="stylesheet" href="/plugin/AdminLTE-2.4.5/dist/css/skins/skin-blue.min.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/plugin/AdminLTE-2.4.5/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="/plugin/AdminLTE-2.4.5/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


    <!-- layout css-->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 3 -->
    <script src="/plugin/AdminLTE-2.4.5/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="/plugin/AdminLTE-2.4.5/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Select2 -->
    <script src="/plugin/AdminLTE-2.4.5/bower_components/select2/dist/js/select2.full.min.js"></script>

    <!-- AdminLTE App -->
    <script src="/plugin/AdminLTE-2.4.5/dist/js/adminlte.min.js"></script>


    <style type="text/css">
        table.datatable{
            width: 100% !important;
        }
    </style>


</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>

        <!-- Header Navbar -->

        @component("cms_admin::layout.nav")
        @endcomponent

    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        @component("cms_admin::layout.side")
        @endcomponent
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->


        <!--------------------------
          | Your Page Content Here |
          -------------------------->

        <div class="content">

            <div class="box ">

                <!-- Content Header (Page header) -->
                <?php if($breadcrumb):?>

                    <?php
                        /**
                         * @var $current \Xiaohongyang\LaravelCmsAdmin\Breadcrumb
                         */
                        $current = end($breadcrumb);
                    ?>
                    <section class="content-header box-header">
                        <h1>
                            <?=$current->text?>
                            <small>Optional description</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                            <li class="active">Here</li>
                        </ol>
                    </section>
                <?php else:?>

                    <section class="content-header box-header">
                        <h1>
                            Page Header
                            <small>Optional description</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                            <li class="active">Here</li>
                        </ol>
                    </section>
                <?php endif;?>


            </div>
            <div class="">


                @yield("content")
            </div>
        </div>

    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!--befor body end-->
@include("cms_admin::layout.modal")
<!--befor body end-->


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->

<script type="text/javascript" src="/js/xhy_fn.js"></script>


<link rel="stylesheet" type="text/css" href="/css/admin.css">
<script type="text/javascript" src="/js/admin_js.js"></script>



<!--modal js begin-->
<script type="text/javascript" src="/js/modal_xhy.js"></script>
<!--modal js end-->

<!-- datatables css and js begin -->
<input type="hidden" class="hidden-btn-trigger-datatable-ajax-reload" onclick="$.fn.fresh_datatables()" />
<input type="hidden" class="hidden-btn-hide-frame-modal" onclick="$.fn.hide_frame()" />
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!-- datatables css and js end -->




@yield("js")
</body>
</html>