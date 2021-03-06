@extends('layouts.app')
@section('navbar')
    <div id="navbar" class="navbar navbar-default    navbar-collapse       ace-save-state">
        <div class="navbar-container ace-save-state" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>

            <div class="navbar-header pull-left">
                <a href="index.html" class="navbar-brand">
                    <small>
                        <i class="fa fa-leaf"></i>
                        Ace Admin
                    </small>
                </a>

                <button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button"
                        data-toggle="collapse" data-target=".navbar-buttons">
                    <span class="sr-only">Toggle user menu</span>

                    <img src="assets/images/avatars/user.jpg" alt="Jason's Photo"/>
                </button>
            </div>

            <div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
                <ul class="nav ace-nav">
                    <li class="transparent dropdown-modal">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                        </a>

                        <div class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                            <div class="tabbable">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#navbar-tasks">
                                            Tasks
                                            <span class="badge badge-danger">4</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#navbar-messages">
                                            Messages
                                            <span class="badge badge-danger">5</span>
                                        </a>
                                    </li>
                                </ul><!-- .nav-tabs -->

                                <div class="tab-content">
                                    <div id="navbar-tasks" class="tab-pane in active">
                                        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu">
                                            <li class="dropdown-content">
                                                <ul class="dropdown-menu dropdown-navbar">
                                                    <li>
                                                        <a href="#">
                                                            <div class="clearfix">
                                                                <span class="pull-left">Software Update</span>
                                                                <span class="pull-right">65%</span>
                                                            </div>

                                                            <div class="progress progress-mini">
                                                                <div style="width:65%" class="progress-bar"></div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <div class="clearfix">
                                                                <span class="pull-left">Hardware Upgrade</span>
                                                                <span class="pull-right">35%</span>
                                                            </div>

                                                            <div class="progress progress-mini">
                                                                <div style="width:35%"
                                                                     class="progress-bar progress-bar-danger"></div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <div class="clearfix">
                                                                <span class="pull-left">Unit Testing</span>
                                                                <span class="pull-right">15%</span>
                                                            </div>

                                                            <div class="progress progress-mini">
                                                                <div style="width:15%"
                                                                     class="progress-bar progress-bar-warning"></div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <div class="clearfix">
                                                                <span class="pull-left">Bug Fixes</span>
                                                                <span class="pull-right">90%</span>
                                                            </div>

                                                            <div class="progress progress-mini progress-striped active">
                                                                <div style="width:90%"
                                                                     class="progress-bar progress-bar-success"></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown-footer">
                                                <a href="#">
                                                    See tasks with details
                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- /.tab-pane -->

                                    <div id="navbar-messages" class="tab-pane">
                                        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu">
                                            <li class="dropdown-content">
                                                <ul class="dropdown-menu dropdown-navbar">
                                                    <li>
                                                        <a href="#">
                                                            <img src="assets/images/avatars/avatar.png"
                                                                 class="msg-photo" alt="Alex's Avatar"/>
                                                            <span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">Alex:</span>
																		Ciao sociis natoque penatibus et auctor ...
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>a moment ago</span>
																	</span>
																</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <img src="assets/images/avatars/avatar3.png"
                                                                 class="msg-photo" alt="Susan's Avatar"/>
                                                            <span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">Susan:</span>
																		Vestibulum id ligula porta felis euismod ...
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>20 minutes ago</span>
																	</span>
																</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <img src="assets/images/avatars/avatar4.png"
                                                                 class="msg-photo" alt="Bob's Avatar"/>
                                                            <span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">Bob:</span>
																		Nullam quis risus eget urna mollis ornare ...
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>3:15 pm</span>
																	</span>
																</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <img src="assets/images/avatars/avatar2.png"
                                                                 class="msg-photo" alt="Kate's Avatar"/>
                                                            <span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">Kate:</span>
																		Ciao sociis natoque eget urna mollis ornare ...
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>1:33 pm</span>
																	</span>
																</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <img src="assets/images/avatars/avatar5.png"
                                                                 class="msg-photo" alt="Fred's Avatar"/>
                                                            <span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">Fred:</span>
																		Vestibulum id penatibus et auctor  ...
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>10:09 am</span>
																	</span>
																</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown-footer">
                                                <a href="inbox.html">
                                                    See all messages
                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- /.tab-pane -->
                                </div><!-- /.tab-content -->
                            </div><!-- /.tabbable -->
                        </div><!-- /.dropdown-menu -->
                    </li>

                    <li class="light-blue dropdown-modal">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo"/>
                            <span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-cog"></i>
                                    Settings
                                </a>
                            </li>

                            <li>
                                <a href="profile.html">
                                    <i class="ace-icon fa fa-user"></i>
                                    Profile
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.navbar-container -->
    </div>
@endsection
@section('sidebar')
    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try {
                ace.settings.loadState('sidebar')
            } catch (e) {
            }
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-success">
                    <i class="ace-icon fa fa-signal"></i>
                </button>

                <button class="btn btn-info">
                    <i class="ace-icon fa fa-pencil"></i>
                </button>

                <button class="btn btn-warning">
                    <i class="ace-icon fa fa-users"></i>
                </button>

                <button class="btn btn-danger">
                    <i class="ace-icon fa fa-cogs"></i>
                </button>
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        @include('partial.menus')

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
               data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>

@endsection
@section('page-content')
    <div class="page-header">
        <h1>Two menu </h1>
    </div><!-- /.page-header -->
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="invisible">
                <button data-target="#sidebar2" data-toggle="collapse" type="button"
                        class="pull-left navbar-toggle collapsed">
                    <span class="sr-only">Toggle sidebar</span>

                    <i class="ace-icon fa fa-dashboard white bigger-125"></i>
                </button>

                <div id="sidebar2" class="sidebar h-sidebar navbar-collapse collapse ace-save-state">
                    <ul class="nav nav-list">
                        <li class="hover">
                            <a href="#">
                                <i class="menu-icon fa fa-tachometer"></i>
                                <span class="menu-text"> Dashboard </span>
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="hover">
                            <a href="#">
                                <i class="menu-icon fa fa-list-alt"></i>
                                <span class="menu-text">Widgets</span>
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="hover">
                            <a href="#">
                                <i class="menu-icon fa fa-calendar"></i>

                                <span class="menu-text">
														Calendar
														<span title="" class="badge badge-transparent tooltip-error"
                                                              data-original-title="2 Important Events">
															<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
														</span>
													</span>
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="hover">
                            <a href="#">
                                <i class="menu-icon fa fa-picture-o"></i>
                                <span class="menu-text"> Gallery </span>
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="hover">
                            <a class="dropdown-toggle" href="#">
                                <i class="menu-icon fa fa-tag"></i>
                                <span class="menu-text"> More Pages </span>

                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>

                            <ul class="submenu">
                                <li class="hover">
                                    <a href="#">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        User Profile
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="hover">
                                    <a href="#">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Inbox
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="hover">
                                    <a href="#">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Pricing Tables
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="hover">
                                    <a href="#">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Invoice
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="hover">
                                    <a href="#">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Timeline
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="hover">
                                    <a href="#">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Email Templates
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="hover">
                                    <a href="#">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Login &amp; Register
                                    </a>

                                    <b class="arrow"></b>
                                </li>
                            </ul>
                        </li>

                        <li class="hover">
                            <a class="dropdown-toggle" href="#">
                                <i class="menu-icon fa fa-file-o"></i>

                                <span class="menu-text">
														Other Pages
														<span class="badge badge-primary">5</span>
													</span>

                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>

                            <ul class="submenu">
                                <li class="hover">
                                    <a href="#">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        FAQ
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="hover">
                                    <a href="#">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Error 404
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="hover">
                                    <a href="#">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Error 500
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="hover">
                                    <a href="#">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Grid
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="hover">
                                    <a href="#">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Blank Page
                                    </a>

                                    <b class="arrow"></b>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- /.nav-list -->
                </div><!-- .sidebar -->
            </div>

            <div class="hidden-sm hidden-xs">
                <button type="button" class="sidebar-collapse btn btn-white btn-primary" data-target="#sidebar2">
                    <i id="sidebar2-toggle-icon" class="ace-icon fa fa-angle-double-up ace-save-state"
                       data-icon1="ace-icon fa fa-angle-double-up" data-icon2="ace-icon fa fa-angle-double-down"></i>
                    Collapse/Expand Menu
                </button>
            </div>

            <div class="hidden-md hidden-lg">
                <div class="well well-sm">
                    You can place multiple toggle buttons for multiple menus anywhere inside navbar!
                </div>
            </div><!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@push('scripts')
<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function ($) {
        $('#sidebar2').insertBefore('.page-content');

        $('.navbar-toggle[data-target="#sidebar2"]').insertAfter('#menu-toggler');
        $(document).on('settings.ace.two_menu', function (e, event_name, event_val) {
            if (event_name == 'sidebar_fixed') {
                if ($('#sidebar').hasClass('sidebar-fixed')) {
                    $('#sidebar2').addClass('sidebar-fixed');
                    $('#navbar').addClass('h-navbar');
                }
                else {
                    $('#sidebar2').removeClass('sidebar-fixed')
                    $('#navbar').removeClass('h-navbar');
                }
            }
        }).triggerHandler('settings.ace.two_menu', ['sidebar_fixed', $('#sidebar').hasClass('sidebar-fixed')]);
    })
</script>
@endpush
