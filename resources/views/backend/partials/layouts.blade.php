<!DOCTYPE html>
<!--
Template Name: Icewall - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="dark">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Dashboard - Icewall - Tailwind HTML Admin Template</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{asset('backend/dist/css/app.css')}}"/>
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="main">
<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Icewall Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2"
                                                            class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-white/[0.08] py-5 hidden">
        <li>
            <a href="javascript:;.html" class="menu menu--active">
                <div class="menu__icon"><i data-feather="home"></i></div>
                <div class="menu__title"> Dashboard <i data-feather="chevron-down"
                                                       class="menu__sub-icon transform rotate-180"></i></div>
            </a>
            <ul class="menu__sub-open">
                <li>
                    <a href="side-menu-dark-dashboard-overview-1.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Overview 1</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-dashboard-overview-2.html" class="menu menu--active">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Overview 2</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-dashboard-overview-3.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Overview 3</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"><i data-feather="box"></i></div>
                <div class="menu__title"> Menu Layout <i data-feather="chevron-down" class="menu__sub-icon "></i></div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-dark-dashboard-overview-1.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Side Menu</div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-dark-dashboard-overview-1.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Simple Menu</div>
                    </a>
                </li>
                <li>
                    <a href="top-menu-dark-dashboard-overview-1.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Top Menu</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="side-menu-dark-inbox.html" class="menu">
                <div class="menu__icon"><i data-feather="inbox"></i></div>
                <div class="menu__title"> Inbox</div>
            </a>
        </li>
        <li>
            <a href="side-menu-dark-file-manager.html" class="menu">
                <div class="menu__icon"><i data-feather="hard-drive"></i></div>
                <div class="menu__title"> File Manager</div>
            </a>
        </li>
        <li>
            <a href="side-menu-dark-point-of-sale.html" class="menu">
                <div class="menu__icon"><i data-feather="credit-card"></i></div>
                <div class="menu__title"> Point of Sale</div>
            </a>
        </li>
        <li>
            <a href="side-menu-dark-chat.html" class="menu">
                <div class="menu__icon"><i data-feather="message-square"></i></div>
                <div class="menu__title"> Chat</div>
            </a>
        </li>
        <li>
            <a href="side-menu-dark-post.html" class="menu">
                <div class="menu__icon"><i data-feather="file-text"></i></div>
                <div class="menu__title"> Post</div>
            </a>
        </li>
        <li>
            <a href="side-menu-dark-calendar.html" class="menu">
                <div class="menu__icon"><i data-feather="calendar"></i></div>
                <div class="menu__title"> Calendar</div>
            </a>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"><i data-feather="edit"></i></div>
                <div class="menu__title"> Crud <i data-feather="chevron-down" class="menu__sub-icon "></i></div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-dark-crud-data-list.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Data List</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-crud-form.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Form</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"><i data-feather="users"></i></div>
                <div class="menu__title"> Users <i data-feather="chevron-down" class="menu__sub-icon "></i></div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-dark-users-layout-1.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Layout 1</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-users-layout-2.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Layout 2</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-users-layout-3.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Layout 3</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"><i data-feather="trello"></i></div>
                <div class="menu__title"> Profile <i data-feather="chevron-down" class="menu__sub-icon "></i></div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-dark-profile-overview-1.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Overview 1</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-profile-overview-2.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Overview 2</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-profile-overview-3.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Overview 3</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"><i data-feather="layout"></i></div>
                <div class="menu__title"> Pages <i data-feather="chevron-down" class="menu__sub-icon "></i></div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Wizards <i data-feather="chevron-down" class="menu__sub-icon "></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-dark-wizard-layout-1.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-wizard-layout-2.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-wizard-layout-3.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Blog <i data-feather="chevron-down" class="menu__sub-icon "></i></div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-dark-blog-layout-1.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-blog-layout-2.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-blog-layout-3.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Pricing <i data-feather="chevron-down" class="menu__sub-icon "></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-dark-pricing-layout-1.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-pricing-layout-2.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Invoice <i data-feather="chevron-down" class="menu__sub-icon "></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-dark-invoice-layout-1.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-invoice-layout-2.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> FAQ <i data-feather="chevron-down" class="menu__sub-icon "></i></div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-dark-faq-layout-1.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-faq-layout-2.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-faq-layout-3.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="login-dark-login.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Login</div>
                    </a>
                </li>
                <li>
                    <a href="login-dark-register.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Register</div>
                    </a>
                </li>
                <li>
                    <a href="main-dark-error-page.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Error Page</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-update-profile.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Update profile</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-change-password.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Change Password</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"><i data-feather="inbox"></i></div>
                <div class="menu__title"> Components <i data-feather="chevron-down" class="menu__sub-icon "></i></div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Table <i data-feather="chevron-down" class="menu__sub-icon "></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-dark-regular-table.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Regular Table</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-tabulator.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Tabulator</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Overlay <i data-feather="chevron-down" class="menu__sub-icon "></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-dark-modal.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Modal</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-slide-over.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Slide Over</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-notification.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Notification</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-dark-accordion.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Accordion</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-button.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Button</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-alert.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Alert</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-progress-bar.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Progress Bar</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-tooltip.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Tooltip</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-dropdown.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Dropdown</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-typography.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Typography</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-icon.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Icon</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-loading-icon.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Loading Icon</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"><i data-feather="sidebar"></i></div>
                <div class="menu__title"> Forms <i data-feather="chevron-down" class="menu__sub-icon "></i></div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-dark-regular-form.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Regular Form</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-datepicker.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Datepicker</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-tom-select.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Tom Select</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-file-upload.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> File Upload</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Wysiwyg Editor <i data-feather="chevron-down"
                                                                    class="menu__sub-icon "></i></div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-dark-wysiwyg-editor-classic.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Classic</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-wysiwyg-editor-inline.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Inline</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-wysiwyg-editor-balloon.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Balloon</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-wysiwyg-editor-balloon-block.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Balloon Block</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-wysiwyg-editor-document.html" class="menu">
                                <div class="menu__icon"><i data-feather="zap"></i></div>
                                <div class="menu__title">Document</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-dark-validation.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Validation</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"><i data-feather="hard-drive"></i></div>
                <div class="menu__title"> Widgets <i data-feather="chevron-down" class="menu__sub-icon "></i></div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-dark-chart.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Chart</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-slider.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Slider</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-dark-image-zoom.html" class="menu">
                        <div class="menu__icon"><i data-feather="activity"></i></div>
                        <div class="menu__title"> Image Zoom</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- END: Mobile Menu -->
<!-- BEGIN: Top Bar -->

<!-- END: Top Bar -->
<div class="wrapper">
    <div class="wrapper-box">
        <!-- BEGIN: Side Menu -->
    @include('backend.partials.menu')
    <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
    @yield('content')
    <!-- END: Content -->
    </div>
</div>
<!-- BEGIN: Dark Mode Switcher-->

<!-- END: Dark Mode Switcher-->

<!-- BEGIN: JS Assets-->
<script
    src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api
"]&libraries=places"></script>
<script src="{{asset('backend/dist/js/app.js')}}"></script>
<!-- END: JS Assets-->
</body>
</html>
