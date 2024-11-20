<?php

namespace App\Views\Client\Layouts;

use App\Helpers\AuthHelper;
use App\Views\BaseView;

class Header extends BaseView
{
    public static function render($data = null)
    {
        unset($_SESSION['user']);
        $is_login = AuthHelper::checkLogin();
?>


        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
                integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
            <link rel="stylesheet" href="<?= APP_URL ?>/public/assets/client/css/style.css">

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
                integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

            <link rel="canonical" href="http:/preview.keenthemes.comindex.html" />
            <link rel="shortcut icon" href="/public/assets/media/logos/favicon.ico" />
            <!--begin::Fonts(mandatory for all pages)-->
            <link rel="stylesheet" href="https:/fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
            <!--end::Fonts-->
            <!--begin::Vendor Stylesheets(used for this page only)-->
            <link href="/public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
            <link href="/public/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
            <!--end::Vendor Stylesheets-->
            <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
            <link href="/public/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
            <link href="/public/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="public/assets/css/style.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


        </head>
        <style>
            body {
                background-color: black;
            }
        </style>

        <body>


            <body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true"
                data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-toolbar="true"
                data-kt-app-sidebar-push-footer="true" class="app-default">
                <!--begin::Theme mode setup on page load-->
                <script>
                    var defaultThemeMode = "light";
                    var themeMode;
                    if (document.documentElement) {
                        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
                        } else {
                            if (localStorage.getItem("data-bs-theme") !== null) {
                                themeMode = localStorage.getItem("data-bs-theme");
                            } else {
                                themeMode = defaultThemeMode;
                            }
                        }
                        if (themeMode === "system") {
                            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                        }
                        document.documentElement.setAttribute("data-bs-theme", themeMode);
                    }
                </script>
                <!--end::Theme mode setup on page load-->
                <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
                    <!--begin::Page-->
                    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
                        <!--begin::Header-->
                        <div id="kt_app_header" class="app-header d-flex">
                            <!--begin::Header container-->
                            <div class="app-container container-fluid d-flex align-items-center justify-content-between"
                                id="kt_app_header_container">
                                <!--begin::Logo-->
                                <div class="app-header-logo d-flex flex-center">
                                    <!--begin::Logo image-->
                                    <a href="/">
                                        <img alt="Logo" src="/public/uploads/image/3-removebg-preview.png" width="100%"
                                            height="135px" />
                                    </a>
                                    <!--end::Logo image-->
                                    <!--begin::Sidebar toggle-->
                                    <button class="btn btn-icon btn-sm btn-active-color-primary d-flex d-lg-none"
                                        id="kt_app_sidebar_mobile_toggle">
                                        <i class="ki-outline ki-abstract-14 fs-1"></i>
                                    </button>
                                    <!--end::Sidebar toggle-->
                                </div>
                                <!--end::Logo-->
                                <div class="item-nav d-flex flex-lg-grow-1 flex-stack" id="kt_app_header_wrapper">                                 
                                            
                                            <div class="container my-4">
                                                <div class="d-flex gap-3 flex-wrap justify-content-center align-items-center">
                                                    <div class="search-bar position-relative">
                                                        <i class="bi bi-search search-icon"></i>
                                                        <input type="text" 
                                                            class="search-input" 
                                                            placeholder="Tìm kiếm khóa học, bài viết, video, ..." 
                                                            >
                                                    </div>
                                                </div>
                                            </div>
                                           
                                                                      
                                    <div class="app-navbar flex-shrink-0 gap-2 gap-lg-4">

                                        <!--end::Notifications-->
                                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                            <!--begin::User menu-->
                                            <?php if ($is_login): ?>
                                                <li class="nav-item">
                                                    <div class="dropdown show">
                                                        <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Tài khoản
                                                        </a>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="/users/<?= $_SESSION['user']['id'] ?>"><?= $_SESSION['user']['username'] ?></a>
                                                            <a class="dropdown-item" href="/change-password">Đổi mật khẩu</a>
                                                            <!-- <a class="nav-link" href="/logout">Đăng xuất</a>     -->
                                                            <a class="dropdown-item" href="/logout">Đăng xuất</a>
                                                        </div>
                                                    </div>
                                                </li>



                                            <?php else: ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="/login">Đăng nhập</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="/register">Đăng ký</a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                        <!--end::User menu-->
                                    </div>
                                    <!--end::Navbar-->
                                </div>
                            </div>
                            <!--end::Header container-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Wrapper-->
                        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                            <!--begin::Sidebar-->
                            <div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
                                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                data-kt-drawer-width="auto" data-kt-drawer-direction="start"
                                data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                                <!--begin::Primary menu-->
                                <div id="kt_aside_menu_wrapper"
                                    class="app-sidebar-menu flex-grow-1 hover-scroll-y scroll-lg-ps my-5 pt-8" data-kt-scroll="true"
                                    data-kt-scroll-height="auto"
                                    data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                                    data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
                                    <!--begin::Menu-->
                                    <div class="sidebar1">
                                        <a href="/" class="menu-item active">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                                                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                                            </svg>
                                            Trang chủ
                                        </a>
                                        <a href="/study" class="menu-item">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="road" class="svg-inline--fa fa-road " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor" d="M256 32H181.2c-27.1 0-51.3 17.1-60.3 42.6L3.1 407.2C1.1 413 0 419.2 0 425.4C0 455.5 24.5 480 54.6 480H256V416c0-17.7 14.3-32 32-32s32 14.3 32 32v64H521.4c30.2 0 54.6-24.5 54.6-54.6c0-6.2-1.1-12.4-3.1-18.2L455.1 74.6C446 49.1 421.9 32 394.8 32H320V96c0 17.7-14.3 32-32 32s-32-14.3-32-32V32zm64 192v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V224c0-17.7 14.3-32 32-32s32 14.3 32 32z"></path>
                                            </svg>
                                            Lộ trình
                                        </a>
                                        <a href="/Post" class="menu-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                                <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z" />
                                                <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z" />
                                            </svg>
                                            Bài viết
                                        </a>
                                    </div>
                                </div>
                                <!--end::Primary menu-->
                                <!--begin::Footer-->
                                <div class="d-flex flex-column flex-center pb-4 pb-lg-8" id="kt_app_sidebar_footer">
                                    <!--begin::Menu toggle-->
                                    <a href="#" class="btn btn-icon btn-active-color-primary"
                                        data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                        data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-night-day theme-light-show fs-2x"></i>
                                        <i class="ki-outline ki-moon theme-dark-show fs-2x"></i>
                                    </a>

                                    <!--begin::Menu toggle-->
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                        data-kt-menu="true" data-kt-element="theme-mode-menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-outline ki-night-day fs-2"></i>
                                                </span>
                                                <span class="menu-title">Light</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-outline ki-moon fs-2"></i>
                                                </span>
                                                <span class="menu-title">Dark</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-outline ki-screen fs-2"></i>
                                                </span>
                                                <span class="menu-title">System</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Footer-->
                            </div>
                            <!--end::Sidebar-->
                            <!--begin::Main-->
                            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                                <!--begin::Content wrapper-->
                                <div class="d-flex flex-column flex-column-fluid">
                                    <!--begin::Content-->
                                    <div id="kt_app_content" class="app-content flex-column-fluid">
                                        <!--begin::Content container-->
                                        <div id="kt_app_content_container" class="app-container container-fluid">
                                            <!--begin::Row-->
                                            <div class="row g-5 g-xl-10">





                                        <?php
                                    }
                                }

                                        ?>