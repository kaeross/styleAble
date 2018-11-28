@extends('base')

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <!-- [ chat user list ] start -->
        <div id="sidebar" class="users p-chat-user showChat">
            <div class="had-container">
                <div class="p-fixed users-main">
                    <div class="user-box">
                        <div class="chat-search-box">
                            <a class="back_friendlist">
                                <i class="feather icon-x"></i>
                            </a>
                            <div class="right-icon-control">
                                <div class="input-group input-group-button">
                                    <input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-friend-list">
                            <div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius img-radius" data-cfsrc="{{ url('/') }}images/avatar-3.jpg" alt="Generic placeholder image " style="display:none;visibility:hidden;"><noscript><img class="media-object img-radius img-radius" src="images/avatar-3.jpg" alt="Generic placeholder image "></noscript>
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="chat-header">Josephin Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" data-cfsrc="{{ url('/') }}images/avatar-2.jpg" alt="Generic placeholder image" style="display:none;visibility:hidden;"><noscript><img class="media-object img-radius" src="images/avatar-2.jpg" alt="Generic placeholder image"></noscript>
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Lary Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" data-cfsrc="{{ url('/') }}images/avatar-4.jpg" alt="Generic placeholder image" style="display:none;visibility:hidden;"><noscript><img class="media-object img-radius" src="images/avatar-4.jpg" alt="Generic placeholder image"></noscript>
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alice</div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" data-cfsrc="{{ url('/') }}images/avatar-3.jpg" alt="Generic placeholder image" style="display:none;visibility:hidden;"><noscript><img class="media-object img-radius" src="images/avatar-3.jpg" alt="Generic placeholder image"></noscript>
                                    <div class="live-status bg-default"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" data-cfsrc="{{ url('/') }}images/avatar-2.jpg" alt="Generic placeholder image" style="display:none;visibility:hidden;"><noscript><img class="media-object img-radius" src="images/avatar-2.jpg" alt="Generic placeholder image"></noscript>
                                    <div class="live-status bg-default"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ chat user list ] end -->

        <!-- [ chat message ] start -->
        <div class="showChat_inner">
            <div class="media chat-inner-header">
                <a class="back_chatBox">
                    <i class="feather icon-x"></i> Josephin Doe
                </a>
            </div>
            <div class="main-friend-chat">
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" data-cfsrc="{{ url('/') }}images/avatar-2.jpg" alt="Generic placeholder image" style="display:none;visibility:hidden;"><noscript><img class="media-object img-radius img-radius m-t-5" src="images/avatar-2.jpg" alt="Generic placeholder image"></noscript>
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        </div>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">Ohh! very nice</p>
                        </div>
                        <p class="chat-time">8:22 a.m.</p>
                    </div>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" data-cfsrc="{{ url('/') }}images/avatar-2.jpg" alt="Generic placeholder image" style="display:none;visibility:hidden;"><noscript><img class="media-object img-radius img-radius m-t-5" src="images/avatar-2.jpg" alt="Generic placeholder image"></noscript>
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">can you come with me?</p>
                        </div>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
            <div class="chat-reply-box">
                <div class="right-icon-control">
                    <div class="input-group input-group-button">
                        <input type="text" class="form-control" placeholder="Write hear . . ">
                        <div class="input-group-append">
                            <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ chat message ] end -->


        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <!-- [ navigation menu ] start -->
                <nav class="pcoded-navbar">
                    <div class="nav-list">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="active">
                                            <a href="index.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Default</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="dashboard-crm.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">CRM</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="dashboard-analytics.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Analytics</span>
                                                <span class="pcoded-badge label label-info ">NEW</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="pcoded-mtext">Page layouts</span>
                                        <span class="pcoded-badge label label-warning">NEW</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Vertical</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="menu-static.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Static Layout</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="menu-header-fixed.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Header Fixed</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="menu-compact.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Compact</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="menu-sidebar.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Sidebar Fixed</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Horizontal</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="menu-horizontal-static.html" target="_blank" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Static Layout</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="menu-horizontal-fixed.html" target="_blank" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Fixed layout</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="menu-horizontal-icon.html" target="_blank" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Static With Icon</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="menu-horizontal-icon-fixed.html" target="_blank" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Fixed With Icon</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="menu-bottom.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Bottom Menu</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="navbar-light.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-menu"></i>
        									</span>
                                        <span class="pcoded-mtext">Navigation</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-layers"></i>
        									</span>
                                        <span class="pcoded-mtext">Widget</span>
                                        <span class="pcoded-badge label label-danger">100+</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="widget-statistic.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Statistic</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="widget-data.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Data</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="widget-chart.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Chart Widget</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">UI Element</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-box"></i>
        									</span>
                                        <span class="pcoded-mtext">Basic</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="alert.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Alert</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Breadcrumbs</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="button.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Button</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="box-shadow.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Box-Shadow</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="accordion.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Accordion</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="generic-class.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Generic Class</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tabs.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Tabs</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="color.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Color</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="label-badge.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Label Badge</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="progress-bar.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Progress Bar</span>
                                            </a>
                                        </li>

                                        <li class=" ">
                                            <a href="list.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">List</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tooltip.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Tooltip And Popover</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="typography.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Typography</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="other.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Other</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-gitlab"></i>
        									</span>
                                        <span class="pcoded-mtext">Advance</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="draggable.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Draggable</span>
                                            </a>
                                        </li>


                                    </ul></li>
                                <li class=" ">
                                    <a href="modal.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Modal</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="notification.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Notifications</span>
                                    </a>
                                </li>

                                <li class=" ">
                                    <a href="rating.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Rating</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="range-slider.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Range Slider</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="slider.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Slider</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="syntax-highlighter.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Syntax Highlighter</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="tour.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Tour</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="treeview.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Tree View</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="nestable.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Nestable</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="toolbar.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Toolbar</span>
                                    </a>
                                </li>

                            </ul>

                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-package"></i>
        									</span>
                                    <span class="pcoded-mtext">Extra</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="session-timeout.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Session Timeout</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="session-idle-timeout.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Session Idle Timeout</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="offline.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Offline</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="animation.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-aperture rotate-refresh"></i>
        									</span>
                                    <span class="pcoded-mtext">Animations</span>
                                </a>
                            </li>

                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-command"></i>
        									</span>
                                    <span class="pcoded-mtext">Icons</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="icon-font-awesome.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Font Awesome</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-themify.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Themify</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-simple-line.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Simple Line Icon</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <div class="pcoded-navigation-label">Forms</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-clipboard"></i>
        									</span>
                                        <span class="pcoded-mtext">Form</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="form-elements-component.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Components</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="form-elements-add-on.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Add-On</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="form-elements-advance.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Advance</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="form-validation.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Validation</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="form-picker.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-edit-1"></i>
        									</span>
                                        <span class="pcoded-mtext">Form Picker</span>
                                        <span class="pcoded-badge label label-warning">NEW</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="form-select.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-feather"></i>
        									</span>
                                        <span class="pcoded-mtext">Form Select</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="form-masking.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-shield"></i>
        									</span>
                                        <span class="pcoded-mtext">Form Masking</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="form-wizard.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-tv"></i>
        									</span>
                                        <span class="pcoded-mtext">Form Wizard</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Tables</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-credit-card"></i>
        									</span>
                                        <span class="pcoded-mtext">Bootstrap Table</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="bs-basic-table.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Basic Table</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-table-sizing.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Sizing Table</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-table-border.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Border Table</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-table-styling.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Styling Table</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-inbox"></i>
        									</span>
                                        <span class="pcoded-mtext">Data Table</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="dt-basic.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Basic Initialization</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-advance.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Advance Initialization</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-styling.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Styling</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-api.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">API</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ajax.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Ajax</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-server-side.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Server Side</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-plugin.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Plug-In</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-data-sources.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Data Sources</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-server"></i>
        									</span>
                                        <span class="pcoded-mtext">DT Extensions</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="dt-ext-autofill.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">AutoFill</span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Button</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="dt-ext-basic-buttons.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Basic Button</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="dt-ext-buttons-html-5-data-export.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Data Export</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-col-reorder.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Col Reorder</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-fixed-columns.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Fixed Columns</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-fixed-header.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Fixed Header</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-key-table.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Key Table</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-responsive.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Responsive</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-row-reorder.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Row Reorder</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-scroller.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Scroller</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-select.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Select Table</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="foo-table.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-hash"></i>
        									</span>
                                        <span class="pcoded-mtext">FooTable</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-airplay"></i>
        									</span>
                                        <span class="pcoded-mtext">Handson Table</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="handson-appearance.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Appearance</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-data-operation.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Data Operation</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-rows-cols.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Rows Columns</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-columns-only.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Columns Only</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-cell-features.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Cell Features</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-cell-types.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Cell Types</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-integrations.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Integrations</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-rows-only.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Rows Only</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-utilities.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Utilities</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="editable-table.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-edit"></i>
        									</span>
                                        <span class="pcoded-mtext">Editable Table</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Chart And Maps</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-pie-chart"></i>
        									</span>
                                        <span class="pcoded-mtext">Charts</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="chart-google.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Google Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-chartjs.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">ChartJs</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-list.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">List Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-float.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Float Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-knob.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Knob chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-morris.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Morris Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-nvd3.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Nvd3 Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-peity.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Peity Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-radial.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Radial Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-rickshaw.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Rickshaw Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-sparkline.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Sparkline Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-c3.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">C3 Chart</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-map"></i>
        									</span>
                                        <span class="pcoded-mtext">Maps</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="map-google.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Google Maps</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="map-vector.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Vector Maps</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="map-api.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Google Map Search API</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="location.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Location</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Pages</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-unlock"></i>
        									</span>
                                        <span class="pcoded-mtext">Authentication</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="auth-sign-in-social.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Login</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up-social.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Registration</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-reset-password.html" target="_blank" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Forgot Password</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-lock-screen.html" target="_blank" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Lock Screen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-sliders"></i>
        									</span>
                                        <span class="pcoded-mtext">Maintenance</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="error.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Error</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="comming-soon.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Comming Soon</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="offline-ui.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Offline UI</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-mail"></i>
        									</span>
                                        <span class="pcoded-mtext">Email</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="email-compose.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Compose Email</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="email-inbox.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Inbox</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="email-read.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Read Mail</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">App</div>
                            <ul class="pcoded-item pcoded-left-item">

                                <li class="">
                                    <a href="todo.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-bookmark"></i>
        									</span>
                                        <span class="pcoded-mtext">To-Do</span>
                                    </a>

                                </li>


                            </ul>
                            <div class="pcoded-navigation-label">Extension</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-file-plus"></i>
        									</span>
                                        <span class="pcoded-mtext">Editor</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="ck-editor.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">CK-Editor</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="wysiwyg-editor.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">WYSIWYG Editor</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-calendar"></i>
        									</span>
                                        <span class="pcoded-mtext">Event Calendar</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="event-full-calender.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Full Calendar</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="event-clndr.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">CLNDER</span>
                                                <span class="pcoded-badge label label-info">NEW</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="image-crop.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-scissors"></i>
        										<b>IC</b>
        									</span>
                                        <span class="pcoded-mtext">Image Cropper</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="file-upload.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-upload-cloud"></i>
        									</span>
                                        <span class="pcoded-mtext">File Upload</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="change-loges.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-briefcase"></i>
        									</span>
                                        <span class="pcoded-mtext">Change Loges</span>
                                        <span class="pcoded-badge label label-warning">1.0</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Other</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-list"></i>
        									</span>
                                        <span class="pcoded-mtext">Menu Levels</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Menu Level 2.1</span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu ">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Menu Level 2.2</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Menu Level 3.1</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Menu Level 2.3</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)" class="disabled waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-power"></i>
        										<b>D</b>
        									</span>
                                        <span class="pcoded-mtext">Disabled Menu</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="sample-page.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-watch"></i>
        									</span>
                                        <span class="pcoded-mtext">Sample Page</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
                <!-- [ navigation menu ] end -->
                <div class="pcoded-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header card">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <i class="feather icon-home bg-c-blue"></i>
                                    <div class="d-inline">
                                        <h5>Dashboard</h5>
                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class=" breadcrumb breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index.html"><i class="feather icon-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Dashboard</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <!-- [ page content ] start -->
                                    <div class="row">

                                        <!-- sale revenue card start -->
                                        <div class="col-md-12 col-xl-8">
                                            <div class="card sale-card">
                                                <div class="card-header">
                                                    <h5>Deals Analytics</h5>
                                                </div>
                                                <div class="card-block">
                                                    <div id="sales-analytics" class="chart-shadow" style="height:380px"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-4">
                                            <div class="card comp-card">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <h6 class="m-b-25">Impressions</h6>
                                                            <h3 class="f-w-700 text-c-blue">1,563</h3>
                                                            <p class="m-b-0">May 23 - June 01 (2017)</p>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-eye bg-c-blue"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card comp-card">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <h6 class="m-b-25">Goal</h6>
                                                            <h3 class="f-w-700 text-c-green">30,564</h3>
                                                            <p class="m-b-0">May 23 - June 01 (2017)</p>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-bullseye bg-c-green"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card comp-card">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <h6 class="m-b-25">Impact</h6>
                                                            <h3 class="f-w-700 text-c-yellow">42.6%</h3>
                                                            <p class="m-b-0">May 23 - June 01 (2017)</p>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-hand-paper bg-c-yellow"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- sale revenue card end -->

                                        <!-- Project statustic start -->
                                        <div class="col-xl-12">
                                            <div class="card proj-progress-card">
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-md-6">
                                                            <h6>Published Project</h6>
                                                            <h5 class="m-b-30 f-w-700">532<span class="text-c-green m-l-10">+1.69%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-c-red" style="width:25%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6">
                                                            <h6>Completed Task</h6>
                                                            <h5 class="m-b-30 f-w-700">4,569<span class="text-c-red m-l-10">-0.5%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-c-blue" style="width:65%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6">
                                                            <h6>Successfull Task</h6>
                                                            <h5 class="m-b-30 f-w-700">89%<span class="text-c-green m-l-10">+0.99%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-c-green" style="width:85%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6">
                                                            <h6>Ongoing Project</h6>
                                                            <h5 class="m-b-30 f-w-700">365<span class="text-c-green m-l-10">+0.35%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Project statustic end -->

                                        <!-- sale 2 card start -->
                                        <div class="col-md-12 col-xl-4">
                                            <div class="card card-blue text-white">
                                                <div class="card-block p-b-0">
                                                    <div class="row m-b-50">
                                                        <div class="col">
                                                            <h6 class="m-b-5">Sales In July</h6>
                                                            <h5 class="m-b-0 f-w-700">$2665.00</h5>
                                                        </div>
                                                        <div class="col-auto text-center">
                                                            <p class="m-b-5">Direct Sale</p>
                                                            <h6 class="m-b-0">$1768</h6>
                                                        </div>

                                                        <div class="col-auto text-center">
                                                            <p class="m-b-5">Referal</p>
                                                            <h6 class="m-b-0">$897</h6>
                                                        </div>
                                                    </div>

                                                    <div id="sec-ecommerce-chart-line" class="" style="height:60px"></div>
                                                    <div id="sec-ecommerce-chart-bar" style="height:195px"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-12">
                                            <div class="card latest-update-card">
                                                <div class="card-header">
                                                    <h5>What’s New</h5>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                            <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                            <li><i class="feather icon-maximize full-card"></i></li>
                                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                                            <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                            <li><i class="feather icon-trash close-card"></i></li>
                                                            <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="scroll-widget">
                                                        <div class="latest-update-box">
                                                            <div class="row p-t-20 p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <img data-cfsrc="{{ url('/') }}images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon" style="display:none;visibility:hidden;"><noscript><img src="images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon"></noscript>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>Your Manager Posted.</h6></a>
                                                                    <p class="text-muted m-b-0">Jonny michel</p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>You have 3 pending Task.</h6></a>
                                                                    <p class="text-muted m-b-0">Hemilton</p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>New Order Received.</h6></a>
                                                                    <p class="text-muted m-b-0">Hemilton</p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <img data-cfsrc="{{ url('/') }}images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon" style="display:none;visibility:hidden;"><noscript><img src="images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon"></noscript>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>Your Manager Posted.</h6></a>
                                                                    <p class="text-muted m-b-0">Jonny michel</p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>You have 3 pending Task.</h6></a>
                                                                    <p class="text-muted m-b-0">Hemilton</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>New Order Received.</h6></a>
                                                                    <p class="text-muted m-b-0">Hemilton</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="card latest-update-card">
                                                <div class="card-header">
                                                    <h5>Latest Activity</h5>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                            <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                            <li><i class="feather icon-maximize full-card"></i></li>
                                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                                            <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                            <li><i class="feather icon-trash close-card"></i></li>
                                                            <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="scroll-widget">
                                                        <div class="latest-update-box">
                                                            <div class="row p-t-20 p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="b-primary update-icon ring"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>Devlopment & Update</h6></a>
                                                                    <p class="text-muted m-b-0">Lorem ipsum dolor sit amet, <a href="#!" class="text-c-blue"> More</a></p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="b-primary update-icon ring"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>Showcases</h6></a>
                                                                    <p class="text-muted m-b-0">Lorem dolor sit amet, <a href="#!" class="text-c-blue"> More</a></p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="b-success update-icon ring"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>Miscellaneous</h6></a>
                                                                    <p class="text-muted m-b-0">Lorem ipsum dolor sit ipsum amet, <a href="#!" class="text-c-green"> More</a></p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="b-danger update-icon ring"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>Your Manager Posted.</h6></a>
                                                                    <p class="text-muted m-b-0">Lorem ipsum dolor sit amet, <a href="#!" class="text-c-red"> More</a></p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="b-primary update-icon ring"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>Showcases</h6></a>
                                                                    <p class="text-muted m-b-0">Lorem dolor sit amet, <a href="#!" class="text-c-blue"> More</a></p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="b-success update-icon ring"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>Miscellaneous</h6></a>
                                                                    <p class="text-muted m-b-0">Lorem ipsum dolor sit ipsum amet, <a href="#!" class="text-c-green"> More</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- sale 2 card end -->

                                        <!-- testimonial and top selling start -->
                                        <div class="col-md-12">
                                            <div class="card table-card">
                                                <div class="card-header">
                                                    <h5>New Products</h5>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                            <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                            <li><i class="feather icon-maximize full-card"></i></li>
                                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                                            <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                            <li><i class="feather icon-trash close-card"></i></li>
                                                            <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-block p-b-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover m-b-0">
                                                            <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Product Code</th>
                                                                <th>Customer</th>
                                                                <th>Status</th>
                                                                <th>Rating</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>Sofa</td>
                                                                <td>#PHD001</td>
                                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dbbab9b89bbcb6bab2b7f5b8b4b6">[email&#160;protected]</a></td>
                                                                <td><label class="label label-danger">Out Stock</label></td>
                                                                <td>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Computer</td>
                                                                <td>#PHD002</td>
                                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="87e4e3e4c7e0eae6eeeba9e4e8ea">[email&#160;protected]</a></td>
                                                                <td><label class="label label-success">In Stock</label></td>
                                                                <td>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mobile</td>
                                                                <td>#PHD003</td>
                                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="45353437052228242c296b262a28">[email&#160;protected]</a></td>
                                                                <td><label class="label label-danger">Out Stock</label></td>
                                                                <td>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Coat</td>
                                                                <td>#PHD004</td>
                                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5735342417303a363e3b7934383a">[email&#160;protected]</a></td>
                                                                <td><label class="label label-success">In Stock</label></td>
                                                                <td>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Watch</td>
                                                                <td>#PHD005</td>
                                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5330373013343e323a3f7d303c3e">[email&#160;protected]</a></td>
                                                                <td><label class="label label-success">In Stock</label></td>
                                                                <td>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shoes</td>
                                                                <td>#PHD006</td>
                                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bececfccfed9d3dfd7d290ddd1d3">[email&#160;protected]</a></td>
                                                                <td><label class="label label-danger">Out Stock</label></td>
                                                                <td>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- testimonial and top selling end -->



                                        <!-- lettest acivity and statustic card start -->

                                        <!-- lettest acivity and statustic card end -->

                                    </div>
                                    <!-- [ page content ] end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ style Customizer ] start -->
                <div id="styleSelector">
                </div>
                <!-- [ style Customizer ] end -->
            </div>
        </div>
    </div>
</div>
<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade
        <br/>to any of the following web browsers to access this website.
    </p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="{{ url('/') }}images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="{{ url('/') }}images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="{{ url('/') }}images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="{{ url('/') }}images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="{{ url('/') }}images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->

