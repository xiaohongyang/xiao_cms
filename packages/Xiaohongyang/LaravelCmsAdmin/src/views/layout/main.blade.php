<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
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
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked/>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->


<script type="text/javascript">

    $(function(){
        $('.select2').select2();


        /**
         * AdminLTE Demo Menu
         * ------------------
         * You should not use this file in production.
         * This file is for demo purposes only.
         */
        $(function () {
            'use strict'

            /**
             * Get access to plugins
             */

            $('[data-toggle="control-sidebar"]').controlSidebar()
            $('[data-toggle="push-menu"]').pushMenu()
            var $pushMenu = $('[data-toggle="push-menu"]').data('lte.pushmenu')
            var $controlSidebar = $('[data-toggle="control-sidebar"]').data('lte.controlsidebar')
            var $layout = $('body').data('lte.layout')
            $(window).on('load', function() {
                // Reinitialize variables on load
                $pushMenu = $('[data-toggle="push-menu"]').data('lte.pushmenu')
                $controlSidebar = $('[data-toggle="control-sidebar"]').data('lte.controlsidebar')
                $layout = $('body').data('lte.layout')
            })

            /**
             * List of all the available skins
             *
             * @type Array
             */
            var mySkins = [
                'skin-blue',
                'skin-black',
                'skin-red',
                'skin-yellow',
                'skin-purple',
                'skin-green',
                'skin-blue-light',
                'skin-black-light',
                'skin-red-light',
                'skin-yellow-light',
                'skin-purple-light',
                'skin-green-light'
            ]

            /**
             * Get a prestored setting
             *
             * @param String name Name of of the setting
             * @returns String The value of the setting | null
             */
            function get(name) {
                if (typeof (Storage) !== 'undefined') {
                    return localStorage.getItem(name)
                } else {
                    window.alert('Please use a modern browser to properly view this template!')
                }
            }

            /**
             * Store a new settings in the browser
             *
             * @param String name Name of the setting
             * @param String val Value of the setting
             * @returns void
             */
            function store(name, val) {
                if (typeof (Storage) !== 'undefined') {
                    localStorage.setItem(name, val)
                } else {
                    window.alert('Please use a modern browser to properly view this template!')
                }
            }

            /**
             * Toggles layout classes
             *
             * @param String cls the layout class to toggle
             * @returns void
             */
            function changeLayout(cls) {
                $('body').toggleClass(cls)
                $layout.fixSidebar()
                if ($('body').hasClass('fixed') && cls == 'fixed') {
                    $pushMenu.expandOnHover()
                    $layout.activate()
                }
                $controlSidebar.fix()
            }

            /**
             * Replaces the old skin with the new skin
             * @param String cls the new skin class
             * @returns Boolean false to prevent link's default action
             */
            function changeSkin(cls) {
                $.each(mySkins, function (i) {
                    $('body').removeClass(mySkins[i])
                })

                $('body').addClass(cls)
                store('skin', cls)
                return false
            }

            /**
             * Retrieve default settings and apply them to the template
             *
             * @returns void
             */
            function setup() {
                var tmp = get('skin')
                if (tmp && $.inArray(tmp, mySkins))
                    changeSkin(tmp)

                // Add the change skin listener
                $('[data-skin]').on('click', function (e) {
                    if ($(this).hasClass('knob'))
                        return
                    e.preventDefault()
                    changeSkin($(this).data('skin'))
                })

                // Add the layout manager
                $('[data-layout]').on('click', function () {
                    changeLayout($(this).data('layout'))
                })

                $('[data-controlsidebar]').on('click', function () {
                    changeLayout($(this).data('controlsidebar'))
                    var slide = !$controlSidebar.options.slide

                    $controlSidebar.options.slide = slide
                    if (!slide)
                        $('.control-sidebar').removeClass('control-sidebar-open')
                })

                $('[data-sidebarskin="toggle"]').on('click', function () {
                    var $sidebar = $('.control-sidebar')
                    if ($sidebar.hasClass('control-sidebar-dark')) {
                        $sidebar.removeClass('control-sidebar-dark')
                        $sidebar.addClass('control-sidebar-light')
                    } else {
                        $sidebar.removeClass('control-sidebar-light')
                        $sidebar.addClass('control-sidebar-dark')
                    }
                })

                $('[data-enable="expandOnHover"]').on('click', function () {
                    $(this).attr('disabled', true)
                    $pushMenu.expandOnHover()
                    if (!$('body').hasClass('sidebar-collapse'))
                        $('[data-layout="sidebar-collapse"]').click()
                })

                //  Reset options
                if ($('body').hasClass('fixed')) {
                    $('[data-layout="fixed"]').attr('checked', 'checked')
                }
                if ($('body').hasClass('layout-boxed')) {
                    $('[data-layout="layout-boxed"]').attr('checked', 'checked')
                }
                if ($('body').hasClass('sidebar-collapse')) {
                    $('[data-layout="sidebar-collapse"]').attr('checked', 'checked')
                }

            }

            // Create the new tab
            var $tabPane = $('<div />', {
                'id': 'control-sidebar-theme-demo-options-tab',
                'class': 'tab-pane active'
            })

            // Create the tab button
            var $tabButton = $('<li />', {'class': 'active'})
                .html('<a href=\'#control-sidebar-theme-demo-options-tab\' data-toggle=\'tab\'>'
                    + '<i class="fa fa-wrench"></i>'
                    + '</a>')

            // Add the tab button to the right sidebar tabs
            $('[href="#control-sidebar-home-tab"]')
                .parent()
                .before($tabButton)

            // Create the menu
            var $demoSettings = $('<div />')

            // Layout options
            $demoSettings.append(
                '<h4 class="control-sidebar-heading">'
                + 'Layout Options'
                + '</h4>'
                // Fixed layout
                + '<div class="form-group">'
                + '<label class="control-sidebar-subheading">'
                + '<input type="checkbox"data-layout="fixed"class="pull-right"/> '
                + 'Fixed layout'
                + '</label>'
                + '<p>Activate the fixed layout. You can\'t use fixed and boxed layouts together</p>'
                + '</div>'
                // Boxed layout
                + '<div class="form-group">'
                + '<label class="control-sidebar-subheading">'
                + '<input type="checkbox"data-layout="layout-boxed" class="pull-right"/> '
                + 'Boxed Layout'
                + '</label>'
                + '<p>Activate the boxed layout</p>'
                + '</div>'
                // Sidebar Toggle
                + '<div class="form-group">'
                + '<label class="control-sidebar-subheading">'
                + '<input type="checkbox"data-layout="sidebar-collapse"class="pull-right"/> '
                + 'Toggle Sidebar'
                + '</label>'
                + '<p>Toggle the left sidebar\'s state (open or collapse)</p>'
                + '</div>'
                // Sidebar mini expand on hover toggle
                + '<div class="form-group">'
                + '<label class="control-sidebar-subheading">'
                + '<input type="checkbox"data-enable="expandOnHover"class="pull-right"/> '
                + 'Sidebar Expand on Hover'
                + '</label>'
                + '<p>Let the sidebar mini expand on hover</p>'
                + '</div>'
                // Control Sidebar Toggle
                + '<div class="form-group">'
                + '<label class="control-sidebar-subheading">'
                + '<input type="checkbox"data-controlsidebar="control-sidebar-open"class="pull-right"/> '
                + 'Toggle Right Sidebar Slide'
                + '</label>'
                + '<p>Toggle between slide over content and push content effects</p>'
                + '</div>'
                // Control Sidebar Skin Toggle
                + '<div class="form-group">'
                + '<label class="control-sidebar-subheading">'
                + '<input type="checkbox"data-sidebarskin="toggle"class="pull-right"/> '
                + 'Toggle Right Sidebar Skin'
                + '</label>'
                + '<p>Toggle between dark and light skins for the right sidebar</p>'
                + '</div>'
            )
            var $skinsList = $('<ul />', {'class': 'list-unstyled clearfix'})

            // Dark sidebar skins
            var $skinBlue =
                $('<li />', {style: 'float:left; width: 33.33333%; padding: 5px;'})
                    .append('<a href="javascript:void(0)" data-skin="skin-blue" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">'
                        + '<div><span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9"></span><span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;"></span></div>'
                        + '<div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>'
                        + '</a>'
                        + '<p class="text-center no-margin">Blue</p>')
            $skinsList.append($skinBlue)
            var $skinBlack =
                $('<li />', {style: 'float:left; width: 33.33333%; padding: 5px;'})
                    .append('<a href="javascript:void(0)" data-skin="skin-black" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">'
                        + '<div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe"></span><span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe"></span></div>'
                        + '<div><span style="display:block; width: 20%; float: left; height: 20px; background: #222"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>'
                        + '</a>'
                        + '<p class="text-center no-margin">Black</p>')
            $skinsList.append($skinBlack)
            var $skinPurple =
                $('<li />', {style: 'float:left; width: 33.33333%; padding: 5px;'})
                    .append('<a href="javascript:void(0)" data-skin="skin-purple" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">'
                        + '<div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active"></span><span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;"></span></div>'
                        + '<div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>'
                        + '</a>'
                        + '<p class="text-center no-margin">Purple</p>')
            $skinsList.append($skinPurple)
            var $skinGreen =
                $('<li />', {style: 'float:left; width: 33.33333%; padding: 5px;'})
                    .append('<a href="javascript:void(0)" data-skin="skin-green" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">'
                        + '<div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-green-active"></span><span class="bg-green" style="display:block; width: 80%; float: left; height: 7px;"></span></div>'
                        + '<div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>'
                        + '</a>'
                        + '<p class="text-center no-margin">Green</p>')
            $skinsList.append($skinGreen)
            var $skinRed =
                $('<li />', {style: 'float:left; width: 33.33333%; padding: 5px;'})
                    .append('<a href="javascript:void(0)" data-skin="skin-red" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">'
                        + '<div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active"></span><span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;"></span></div>'
                        + '<div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>'
                        + '</a>'
                        + '<p class="text-center no-margin">Red</p>')
            $skinsList.append($skinRed)
            var $skinYellow =
                $('<li />', {style: 'float:left; width: 33.33333%; padding: 5px;'})
                    .append('<a href="javascript:void(0)" data-skin="skin-yellow" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">'
                        + '<div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-yellow-active"></span><span class="bg-yellow" style="display:block; width: 80%; float: left; height: 7px;"></span></div>'
                        + '<div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>'
                        + '</a>'
                        + '<p class="text-center no-margin">Yellow</p>')
            $skinsList.append($skinYellow)

            // Light sidebar skins
            var $skinBlueLight =
                $('<li />', {style: 'float:left; width: 33.33333%; padding: 5px;'})
                    .append('<a href="javascript:void(0)" data-skin="skin-blue-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">'
                        + '<div><span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9"></span><span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;"></span></div>'
                        + '<div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>'
                        + '</a>'
                        + '<p class="text-center no-margin" style="font-size: 12px">Blue Light</p>')
            $skinsList.append($skinBlueLight)
            var $skinBlackLight =
                $('<li />', {style: 'float:left; width: 33.33333%; padding: 5px;'})
                    .append('<a href="javascript:void(0)" data-skin="skin-black-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">'
                        + '<div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe"></span><span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe"></span></div>'
                        + '<div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>'
                        + '</a>'
                        + '<p class="text-center no-margin" style="font-size: 12px">Black Light</p>')
            $skinsList.append($skinBlackLight)
            var $skinPurpleLight =
                $('<li />', {style: 'float:left; width: 33.33333%; padding: 5px;'})
                    .append('<a href="javascript:void(0)" data-skin="skin-purple-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">'
                        + '<div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active"></span><span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;"></span></div>'
                        + '<div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>'
                        + '</a>'
                        + '<p class="text-center no-margin" style="font-size: 12px">Purple Light</p>')
            $skinsList.append($skinPurpleLight)
            var $skinGreenLight =
                $('<li />', {style: 'float:left; width: 33.33333%; padding: 5px;'})
                    .append('<a href="javascript:void(0)" data-skin="skin-green-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">'
                        + '<div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-green-active"></span><span class="bg-green" style="display:block; width: 80%; float: left; height: 7px;"></span></div>'
                        + '<div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>'
                        + '</a>'
                        + '<p class="text-center no-margin" style="font-size: 12px">Green Light</p>')
            $skinsList.append($skinGreenLight)
            var $skinRedLight =
                $('<li />', {style: 'float:left; width: 33.33333%; padding: 5px;'})
                    .append('<a href="javascript:void(0)" data-skin="skin-red-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">'
                        + '<div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active"></span><span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;"></span></div>'
                        + '<div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>'
                        + '</a>'
                        + '<p class="text-center no-margin" style="font-size: 12px">Red Light</p>')
            $skinsList.append($skinRedLight)
            var $skinYellowLight =
                $('<li />', {style: 'float:left; width: 33.33333%; padding: 5px;'})
                    .append('<a href="javascript:void(0)" data-skin="skin-yellow-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">'
                        + '<div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-yellow-active"></span><span class="bg-yellow" style="display:block; width: 80%; float: left; height: 7px;"></span></div>'
                        + '<div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>'
                        + '</a>'
                        + '<p class="text-center no-margin" style="font-size: 12px">Yellow Light</p>')
            $skinsList.append($skinYellowLight)

            $demoSettings.append('<h4 class="control-sidebar-heading">Skins</h4>')
            $demoSettings.append($skinsList)

            $tabPane.append($demoSettings)
            $('#control-sidebar-home-tab').after($tabPane)

            setup()

            $('[data-toggle="tooltip"]').tooltip()
        })

    })
</script>
</body>
</html>