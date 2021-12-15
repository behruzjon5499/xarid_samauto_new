<?php

use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $content string */
?>

    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="/admin/img/profile_small.jpg" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Toxirov Bekhruz</strong>
                             </span> <span class="text-muted text-xs block">Programmer <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/profile.html">Profile</a></li>
                                <li><a href="contacts.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="<?=\yii\helpers\Url::to(['auth/logout'])?>" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li class="active">
                        <a href="index.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="index.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/index.html">Dashboard v.1</a></li>
                            <li><a href="dashboard_2.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html">Dashboard v.2</a></li>
                            <li><a href="dashboard_3.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/dashboard_3.html">Dashboard v.3</a></li>
                            <li><a href="dashboard_4_1.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/dashboard_4_1.html">Dashboard v.4</a></li>
                            <li><a href="dashboard_5.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/dashboard_5.html">Dashboard v.5 </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/users" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">Users</span></a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="form_basic.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/form_basic.html">Basic form</a></li>
                            <li><a href="form_advanced.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/form_advanced.html">Advanced Plugins</a></li>
                            <li><a href="form_wizard.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/form_wizard.html">Wizard</a></li>
                            <li><a href="form_file_upload.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/form_file_upload.html">File Upload</a></li>
                            <li><a href="form_editors.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/form_editors.html">Text Editor</a></li>
                            <li><a href="form_autocomplete.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/form_autocomplete.html">Autocomplete</a></li>
                            <li><a href="form_markdown.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/form_markdown.html">Markdown</a></li>
                        </ul>
                    </li>

                    </li>

                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Welcome to My Admin Theme.</span>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="/admin/img/a7.jpg" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/img/a7.jpg">
                                        </a>
                                        <div class="media-body">
                                            <small class="pull-right">46h ago</small>
                                            <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="/admin/img/a4.jpg" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/img/a4.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy">5h ago</small>
                                            <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="/admin/img/profile.jpg" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/img/profile.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">23h ago</small>
                                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="mailbox.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/mailbox.html">
                                            <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="mailbox.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/mailbox.html">
                                        <div>
                                            <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="profile.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/profile.html">
                                        <div>
                                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                            <span class="pull-right text-muted small">12 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="grid_options.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/grid_options.html">
                                        <div>
                                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="notifications.html" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/notifications.html">
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="<?=\yii\helpers\Url::to(['auth/logout'])?>" tppabs="http://webapplayers.com/inspinia_admin-v2.7.1/login.html">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                        <li>
                            <a class="right-sidebar-toggle">
                                <i class="fa fa-tasks"></i>
                            </a>
                        </li>
                    </ul>

                </nav>

