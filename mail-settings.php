<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> UDON - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="admin dashboard,admin template,admin panel,bootstrap admin dashboard,html template,sales dashboard,dashboard,template dashboard,admin,html and css template,admin dashboard bootstrap,personal dashboard,crypto dashboard,stocks dashboard,admin panel template">
    
    <!-- Favicon -->
    <link rel="icon" href="assets/images/brand-logos/favicon.ico" type="image/x-icon">
    
    <!-- Choices JS -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="assets/js/main.js"></script>
    
    <!-- Bootstrap Css -->
    <link id="style" href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="assets/css/styles.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="assets/css/icons.css" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="assets/libs/node-waves/waves.min.css" rel="stylesheet" > 

    <!-- Simplebar Css -->
    <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet" >
    
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">


</head>

<body>

    <!-- Start Switcher -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-bottom d-block p-0">
        <div class="d-flex align-items-center justify-content-between p-3">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <nav class="border-top border-block-start-dashed">
            <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                    type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                    type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
            </div>
        </nav>
    </div>
    <div class="offcanvas-body">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                tabindex="0">
                <div class="">
                    <p class="switcher-style-head">Theme Color Mode:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-light-theme">
                                    Light
                                </label>
                                <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                    checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-dark-theme">
                                    Dark
                                </label>
                                <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Directions:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-ltr">
                                    LTR
                                </label>
                                <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-rtl">
                                    RTL
                                </label>
                                <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Navigation Styles:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-vertical">
                                    Vertical
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                                    checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-horizontal">
                                    Horizontal
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-style"
                                    id="switcher-horizontal">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navigation-menu-styles">
                    <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                    <div class="row switcher-style gx-0 pb-2 gy-2">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-menu-click">
                                    Menu Click
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                    id="switcher-menu-click">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-menu-hover">
                                    Menu Hover
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                    id="switcher-menu-hover">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-icon-click">
                                    Icon Click
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                    id="switcher-icon-click">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-icon-hover">
                                    Icon Hover
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                    id="switcher-icon-hover">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidemenu-layout-styles">
                    <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                    <div class="row switcher-style gx-0 pb-2 gy-2">
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-default-menu">
                                    Default Menu
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                    id="switcher-default-menu" checked>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-closed-menu">
                                    Closed Menu
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                    id="switcher-closed-menu">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-icontext-menu">
                                    Icon Text
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                    id="switcher-icontext-menu">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-icon-overlay">
                                    Icon Overlay
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                    id="switcher-icon-overlay">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-detached">
                                    Detached
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                    id="switcher-detached">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-double-menu">
                                    Double Menu
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                    id="switcher-double-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Page Styles:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-regular">
                                    Regular
                                </label>
                                <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                    checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-classic">
                                    Classic
                                </label>
                                <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-modern">
                                    Modern
                                </label>
                                <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Layout Width Styles:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-full-width">
                                    Full Width
                                </label>
                                <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                                    checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-boxed">
                                    Boxed
                                </label>
                                <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Menu Positions:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-menu-fixed">
                                    Fixed
                                </label>
                                <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                    checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-menu-scroll">
                                    Scrollable
                                </label>
                                <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Header Positions:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-header-fixed">
                                    Fixed
                                </label>
                                <input class="form-check-input" type="radio" name="header-positions"
                                    id="switcher-header-fixed" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-header-scroll">
                                    Scrollable
                                </label>
                                <input class="form-check-input" type="radio" name="header-positions"
                                    id="switcher-header-scroll">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Loader:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-loader-enable">
                                    Enable
                                </label>
                                <input class="form-check-input" type="radio" name="page-loader"
                                    id="switcher-loader-enable">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-loader-disable">
                                    Disable
                                </label>
                                <input class="form-check-input" type="radio" name="page-loader"
                                    id="switcher-loader-disable" checked>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                <div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Menu Colors:</p>
                        <div class="d-flex switcher-style pb-2">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                    id="switcher-menu-light" checked>
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                    id="switcher-menu-dark">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                    id="switcher-menu-primary">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                    id="switcher-menu-gradient">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-transparent"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                    type="radio" name="menu-colors" id="switcher-menu-transparent">
                            </div>
                        </div>
                        <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                    </div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Header Colors:</p>
                        <div class="d-flex switcher-style pb-2">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                    id="switcher-header-light" checked>
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                    id="switcher-header-dark">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                    id="switcher-header-primary">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                    id="switcher-header-gradient">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                    id="switcher-header-transparent">
                            </div>
                        </div>
                        <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                    </div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Theme Primary:</p>
                        <div class="d-flex flex-wrap align-items-center switcher-style">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-1" type="radio"
                                    name="theme-primary" id="switcher-primary">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-2" type="radio"
                                    name="theme-primary" id="switcher-primary1">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                                    id="switcher-primary2">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                                    id="switcher-primary3">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                                    id="switcher-primary4">
                            </div>
                            <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                <div class="theme-container-primary"></div>
                                <div class="pickr-container-primary"  onchange="updateChartColor(this.value)"></div>
                            </div>
                        </div>
                    </div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Theme Background:</p>
                        <div class="d-flex flex-wrap align-items-center switcher-style">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-1" type="radio"
                                    name="theme-background" id="switcher-background">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-2" type="radio"
                                    name="theme-background" id="switcher-background1">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                    id="switcher-background2">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-4" type="radio"
                                    name="theme-background" id="switcher-background3">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-5" type="radio"
                                    name="theme-background" id="switcher-background4">
                            </div>
                            <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                <div class="theme-container-background"></div>
                                <div class="pickr-container-background"></div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-image mb-3">
                        <p class="switcher-style-head">Menu With Background Image:</p>
                        <div class="d-flex flex-wrap align-items-center switcher-style">
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img1" type="radio"
                                    name="theme-background" id="switcher-bg-img">
                            </div>
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img2" type="radio"
                                    name="theme-background" id="switcher-bg-img1">
                            </div>
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background"
                                    id="switcher-bg-img2">
                            </div>
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img4" type="radio"
                                    name="theme-background" id="switcher-bg-img3">
                            </div>
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img5" type="radio"
                                    name="theme-background" id="switcher-bg-img4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center canvas-footer flex-wrap">
                <a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1 w-100">Reset</a> 
            </div>
        </div>
    </div>
</div>
<!-- End Switcher -->


    <!-- Loader -->
<div id="loader" >
    <img src="assets/images/media/loader.svg" alt="">
</div>
<!-- Loader -->

    <div class="page">
         <!-- app-header -->
 <header class="app-header">

    <!-- Start::main-header-container -->
    <div class="main-header-container container-fluid">

        <!-- Start::header-content-left -->
        <div class="header-content-left">

            <!-- Start::header-element -->
            <div class="header-element">
                <div class="horizontal-logo">
                    <a href="index.php" class="header-logo">
                        <img src="assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                        <img src="assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                        <img src="assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                        <img src="assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                    </a>
                </div>
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element mx-lg-0 mx-2">
                <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element header-search d-md-block d-none">
                <!-- Start::header-link -->
                <input type="text" class="header-search-bar form-control border-0 bg-body" placeholder="Search for Results...">
                <a href="javascript:void(0);" class="header-search-icon border-0">
                    <i class="bi bi-search"></i>
                </a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element --> 
            <div class="header-element ms-3 d-lg-block d-none my-auto">
                <!-- Start::dashboards list -->
                <div class="dropdown my-auto">
                    <a href="javascript:void(0);" class="btn bg-body header-dashboards-button text-start d-flex align-items-center justify-content-between" data-bs-toggle="dropdown" aria-expanded="false">
                    </a> 
                    <ul class="dropdown-menu dashboard-dropdown" role="menu">
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index.php">Sales Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-1.php">Analytics Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-2.php">Ecommerce Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-3.php">CRM Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-4.php">HRM Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-5.php">NFT Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-6.php">Crypto Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-7.php">Jobs Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-8.php">Projects Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-9.php">Courses Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-10.php">Stocks Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-11.php">Personal Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-12.php">Customer Dashboard</a></li>
                    </ul>
                </div>
                <!-- End::dashboards list -->
            </div>
            <!-- End::header-element -->

        </div>
        <!-- End::header-content-left -->

        <!-- Start::header-content-right -->
        <ul class="header-content-right">

            <!-- Start::header-element -->
            <li class="header-element d-md-none d-block">
                <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#header-responsive-search">
                    <!-- Start::header-link-icon -->
                    <i class="bi bi-search header-link-icon"></i>
                    <!-- End::header-link-icon -->
                </a>  
            </li>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li class="header-element country-selector">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                    <img src="assets/images/flags/us_flag.jpg" alt="img" class="rounded-circle">
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="assets/images/flags/us_flag.jpg" alt="img">
                            </span>
                            English
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="assets/images/flags/spain_flag.jpg" alt="img" >
                            </span>
                            Spanish
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="assets/images/flags/french_flag.jpg" alt="img" >
                            </span>
                            French
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="assets/images/flags/germany_flag.jpg" alt="img" >
                            </span>
                            German
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="assets/images/flags/italy_flag.jpg" alt="img" >
                            </span>
                            Italian
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="assets/images/flags/russia_flag.jpg" alt="img" >
                            </span>
                            Russian
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li class="header-element header-theme-mode">
                <!-- Start::header-link|layout-setting -->
                <a href="javascript:void(0);" class="header-link layout-setting">
                    <span class="light-layout">
                        <!-- Start::header-link-icon -->
                        <i class="bi bi-moon header-link-icon"></i>
                        <!-- End::header-link-icon -->
                    </span>
                    <span class="dark-layout">
                        <!-- Start::header-link-icon -->
                        <i class="bi bi-brightness-high header-link-icon"></i>
                        <!-- End::header-link-icon -->
                    </span>
                </a>
                <!-- End::header-link|layout-setting -->
            </li>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li class="header-element cart-dropdown">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                    <i class="bi bi-cart2 header-link-icon"></i>
                    <span class="badge bg-primary rounded-pill header-icon-badge" id="cart-icon-badge">5</span>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <!-- Start::main-header-dropdown -->
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-16">Cart Items<span class="badge bg-success-transparent ms-1 fs-12 rounded-circle" id="cart-data">5</span></p>
                            <span><span class="text-muted me-1">Total:</span><span class="text-primary fw-medium">$14,289</span></span>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="assets/images/ecommerce/jpg/9.jpg" alt="img" class="avatar me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark">
                                            <a href="cart.php">Pink High Heel Sandals</a>
                                        </div>
                                        <div>
                                            <span class="fw-medium mb-1">$499.00</span>
                                            <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item d-flex">
                                            <li>Quantity: 01</li>
                                            <li><span class="badge bg-light text-default border">In Stock</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="assets/images/ecommerce/jpg/10.jpg" alt="img" class="avatar me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark">
                                            <a href="cart.php">Blue Denim Jacket</a>
                                        </div>
                                        <div>
                                            <span class="fw-medium mb-1">$129.79</span>
                                            <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item">
                                            <li>Quantity: 02</li>
                                            <li><span class="badge bg-light text-default border">In Stock</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="assets/images/ecommerce/jpg/13.jpg" alt="img" class="avatar me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark">
                                            <a href="cart.php">Yellow Backpack (24L)</a>
                                        </div>
                                        <div>
                                            <span class="fw-medium mb-1">$99.99</span>
                                            <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item d-flex">
                                            <li>Quantity: 01</li>
                                            <li><span class="badge bg-light text-default border">In Stock</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="assets/images/ecommerce/jpg/16.jpg" alt="img" class="avatar me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark">
                                            <a href="cart.php">Multi Color Dress for Girls (3Y - 4Y)</a>
                                        </div>
                                        <div>
                                            <span class="fw-medium mb-1">$1.499.00</span>
                                            <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item d-flex">
                                            <li>Quantity: 02</li>
                                            <li><span class="badge bg-danger-transparent border">Out Of Stock</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="assets/images/ecommerce/jpg/18.jpg" alt="img" class="avatar me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark">
                                            <a href="cart.php">Xavier Smart Watch</a>
                                        </div>
                                        <div>
                                            <span class="fw-medium mb-1">$49.79</span>
                                            <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item d-flex">
                                            <li>Quantity: 03</li>
                                            <li><span class="badge bg-light text-default border">In Stock</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="p-3 empty-header-item border-top">
                        <div class="text-center">
                            <a href="checkout.php" class="link-primary text-decoration-underline">Proceed to checkout</a>
                        </div>
                    </div>
                    <div class="p-5 empty-item d-none">
                        <div class="text-center">
                            <span class="avatar avatar-xl avatar-rounded bg-primary-transparent">
                                <i class="ri-shopping-cart-2-line fs-2"></i>
                            </span>
                            <h6 class="fw-medium mb-1 mt-3">Your Cart is Empty</h6>
                            <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy :)</span>
                            <a href="products.php" class="btn btn-primary btn-wave btn-sm m-1" data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End::main-header-dropdown -->
            </li>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li class="header-element notifications-dropdown d-xl-block d-none">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
                    <i class="bi bi-bell header-link-icon"></i>
                    <span class="header-icon-pulse bg-secondary rounded pulse pulse-secondary"></span>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <!-- Start::main-header-dropdown -->
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-16">Notifications</p>
                            <span class="badge bg-secondary-transparent" id="notifiation-data">5 Unread</span>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled mb-0" id="header-notification-scroll">
                        <li class="dropdown-item">
                            <div class="d-flex align-items-center">
                                 <div class="pe-2 lh-1">
                                     <span class="avatar avatar-rounded">
                                        <img src="assets/images/faces/11.jpg" alt="">
                                     </span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-0 fw-medium"><a href="notifications.php">John Doe</a></p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">Hey there! What's up?</span>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                    </div>
                                 </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-center">
                                 <div class="pe-2 lh-1">
                                     <span class="avatar bg-secondary-transparent avatar-rounded">
                                        <img src="assets/images/faces/21.jpg" alt="">
                                     </span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-0 fw-medium"><a href="notifications.php">Customer Support</a></p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">Great job on resolving the issue! Thank you!</span>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x"></i></a>
                                    </div>
                                 </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-center">
                                 <div class="pe-2 lh-1">
                                     <span class="avatar bg-pink-transparent avatar-rounded">
                                        <img src="assets/images/faces/20.jpg" alt="">
                                     </span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-0 fw-medium"><a href="notifications.php">Digital Marketing Trends</a></p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">Next Thursday at 2:30 PM</span>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x"></i></a>
                                    </div>
                                 </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-center">
                                 <div class="pe-2 lh-1">
                                     <span class="avatar bg-danger-transparent avatar-rounded"><i class="ti ti-circle-check fs-18"></i></span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-0 fw-medium"><a href="notifications.php">Amount: $50.00 paid for the order</a></p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">Transaction ID: 123456789</span>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x"></i></a>
                                    </div>
                                 </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-center">
                                 <div class="pe-2 lh-1">
                                     <span class="avatar bg-success-transparent avatar-rounded">
                                        <img src="assets/images/faces/6.jpg" alt="">
                                     </span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-0 fw-medium"><a href="notifications.php">Samantha</a></p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">Would you like to connect?</span>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x"></i></a>
                                    </div>
                                 </div>
                            </div>
                        </li>
                    </ul>
                    <div class="p-3 empty-header-item1 border-top">
                        <div class="text-center">
                            <a href="notifications.php" class="link-primary text-decoration-underline">View All</a>
                        </div>
                    </div>
                    <div class="p-5 empty-item1 d-none">
                        <div class="text-center">
                            <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                <i class="ri-notification-off-line fs-2"></i>
                            </span>
                            <h6 class="fw-medium mt-3">No New Notifications</h6>
                        </div>
                    </div>
                </div>
                <!-- End::main-header-dropdown -->
            </li>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li class="header-element header-fullscreen">
                <!-- Start::header-link -->
                <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                    <i class="bi bi-fullscreen full-screen-open header-link-icon"></i>
                    <i class="bi bi-fullscreen-exit full-screen-close header-link-icon d-none"></i>
                </a>
                <!-- End::header-link -->
            </li>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li class="header-element">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <div class="me-sm-2 me-0">
                            <img src="assets/images/faces/9.jpg" alt="img" class="avatar avatar-sm avatar-rounded">
                        </div>
                        <div class="d-xl-block d-none lh-1">
                            <span class="fw-medium lh-1">Mr. Stark</span>
                        </div>
                    </div>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
                    <li><a class="dropdown-item d-flex align-items-center" href="profile.php"><i class="bi bi-person fs-18 me-2 op-7"></i>Profile</a></li>
                    <li><a class="dropdown-item d-flex align-items-center" href="mail.php"><i class="bi bi-envelope fs-16 me-2 op-7"></i>Inbox <span class="ms-auto badge bg-light border text-default">19</span></a></li>
                    <li><a class="dropdown-item d-flex align-items-center" href="to-do-list.php"><i class="bi bi-check-square fs-16 me-2 op-7"></i>Task Manager</a></li>
                    <li><a class="dropdown-item d-flex align-items-center" href="mail-settings.php"><i class="bi bi-gear fs-16 me-2 op-7"></i>Settings</a></li>
                    <li><a class="dropdown-item d-flex align-items-center" href="chat.php"><i class="bi bi-headset fs-18 me-2 op-7"></i>Support</a></li>
                    <li><a class="dropdown-item d-flex align-items-center" href="sign-in-cover.php"><i class="bi bi-box-arrow-right fs-18 me-2 op-7"></i>Log Out</a></li>
                </ul>
            </li>  
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li class="header-element">
                <!-- Start::header-link|switcher-icon -->
                <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                    <i class="bi bi-gear header-link-icon border-0"></i>
                </a>
                <!-- End::header-link|switcher-icon -->
            </li>
            <!-- End::header-element -->

        </ul>
        <!-- End::header-content-right -->

    </div>
    <!-- End::main-header-container -->

</header>
<!-- /app-header -->
        <!-- Start::app-sidebar -->
<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="index.php" class="header-logo">
            <img src="assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
            <img src="assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
            <img src="assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
            <img src="assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
            </div>
            <ul class="main-menu">

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-house side-menu__icon"></i>
                        <span class="side-menu__label">Dashboards</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Dashboards</a>
                        </li>
                        <li class="slide">
                            <a href="index.php" class="side-menu__item">Sales</a>
                        </li>
                        <li class="slide">
                            <a href="index-1.php" class="side-menu__item">Analytics</a>
                        </li>
                        <li class="slide">
                            <a href="index-2.php" class="side-menu__item">Ecommerce</a>
                        </li>
                        <li class="slide">
                            <a href="index-3.php" class="side-menu__item">Crm</a>
                        </li>
                        <li class="slide">
                            <a href="index-4.php" class="side-menu__item">HRM</a>
                        </li>
                        <li class="slide">
                            <a href="index-5.php" class="side-menu__item">NFT</a>
                        </li>
                        <li class="slide">
                            <a href="index-6.php" class="side-menu__item">Crypto</a>
                        </li>
                        <li class="slide">
                            <a href="index-7.php" class="side-menu__item">Jobs</a>
                        </li>
                        <li class="slide">
                            <a href="index-8.php" class="side-menu__item">Projects</a>
                        </li>
                        <li class="slide">
                            <a href="index-9.php" class="side-menu__item">Courses</a>
                        </li>
                        <li class="slide">
                            <a href="index-10.php" class="side-menu__item">Stocks</a>
                        </li>
                        <li class="slide">
                            <a href="index-11.php" class="side-menu__item">Personal</a>
                        </li>
                        <li class="slide">
                            <a href="index-12.php" class="side-menu__item">Customer</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-file-earmark side-menu__icon"></i>
                        <span class="side-menu__label">Pages</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 pages-ul">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Pages</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Blog
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="blog.php" class="side-menu__item">Blog</a>
                                </li>
                                <li class="slide">
                                    <a href="blog-details.php" class="side-menu__item">Blog Details</a>
                                </li>
                                <li class="slide">
                                    <a href="blog-create.php" class="side-menu__item">Create Blog</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="chat.php" class="side-menu__item">Chat</a>
                        </li>
                        <li class="slide">
                            <a href="contacts.php" class="side-menu__item">Contacts</a>
                        </li>
                        <li class="slide">
                            <a href="contact-us.php" class="side-menu__item">Contact Us</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Ecommerce
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="add-products.php" class="side-menu__item">Add Products</a>
                                </li>
                                <li class="slide">
                                    <a href="cart.php" class="side-menu__item">Cart</a>
                                </li>
                                <li class="slide">
                                    <a href="checkout.php" class="side-menu__item">Checkout</a>
                                </li>
                                <li class="slide">
                                    <a href="edit-products.php" class="side-menu__item">Edit Products</a>
                                </li>
                                <li class="slide">
                                    <a href="order-details.php" class="side-menu__item">Order Details</a>
                                </li>
                                <li class="slide">
                                    <a href="orders.php" class="side-menu__item">Orders</a>
                                </li>
                                <li class="slide">
                                    <a href="products.php" class="side-menu__item">Products</a>
                                </li>
                                <li class="slide">
                                    <a href="product-details.php" class="side-menu__item">Product Details</a>
                                </li>
                                <li class="slide">
                                    <a href="products-list.php" class="side-menu__item">Products List</a>
                                </li>
                                <li class="slide">
                                    <a href="wishlist.php" class="side-menu__item">Wishlist</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Email
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="mail.php" class="side-menu__item">Mail App</a>
                                </li>
                                <li class="slide">
                                    <a href="mail-settings.php" class="side-menu__item">Mail Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="empty.php" class="side-menu__item">Empty</a>
                        </li>
                        <li class="slide">
                            <a href="faq's.php" class="side-menu__item">FAQ's</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">File Manager
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="file-manager.php" class="side-menu__item">File Manager</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Invoice
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="invoice-create.php" class="side-menu__item">Create Invoice</a>
                                </li>
                                <li class="slide">
                                    <a href="invoice-details.php" class="side-menu__item">Invoice Details</a>
                                </li>
                                <li class="slide">
                                    <a href="invoice-list.php" class="side-menu__item">Invoice List</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="landing.php" class="side-menu__item">Landing</a>
                        </li>
                        <li class="slide">
                            <a href="landing-jobs.php" class="side-menu__item">Jobs Landing</a>
                        </li>
                        <li class="slide">
                            <a href="notifications.php" class="side-menu__item">Notifications</a>
                        </li>
                        <li class="slide">
                            <a href="pricing.php" class="side-menu__item">Pricing</a>
                        </li>
                        <li class="slide">
                            <a href="profile.php" class="side-menu__item">Profile</a>
                        </li>
                        <li class="slide">
                            <a href="reviews.php" class="side-menu__item">Reviews</a>
                        </li>
                        <li class="slide">
                            <a href="team.php" class="side-menu__item">Team</a>
                        </li>
                        <li class="slide">
                            <a href="terms_conditions.php" class="side-menu__item">Terms & Conditions</a>
                        </li>
                        <li class="slide">
                            <a href="timeline.php" class="side-menu__item">Timeline</a>
                        </li>
                        <li class="slide">
                            <a href="to-do-list.php" class="side-menu__item">To Do List</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-key side-menu__icon"></i>
                        <span class="side-menu__label">Authentication</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Authentication</a>
                        </li>
                        <li class="slide">
                            <a href="coming-soon.php" class="side-menu__item">Coming Soon</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Create Password
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="create-password-basic.php" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="create-password-cover.php" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li>      
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Lock Screen
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="lockscreen-basic.php" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="lockscreen-cover.php" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li>     
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Reset Password
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="reset-password-basic.php" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="reset-password-cover.php" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li>     
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Sign Up
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="sign-up-basic.php" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="sign-up-cover.php" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li>  
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Sign In
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="sign-in-basic.php" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="sign-in-cover.php" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li> 
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Two Step Verification
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="two-step-verification-basic.php" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="two-step-verification-cover.php" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li> 
                        <li class="slide">
                            <a href="under-maintenance.php" class="side-menu__item">Under Maintenance</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-exclamation-triangle side-menu__icon"></i>
                        <span class="side-menu__label">Error</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Error</a>
                        </li>
                        <li class="slide">
                            <a href="401-error.php" class="side-menu__item">401 - Error</a>
                        </li>
                        <li class="slide">
                            <a href="404-error.php" class="side-menu__item">404 - Error</a>
                        </li>
                        <li class="slide">
                            <a href="500-error.php" class="side-menu__item">500 - Error</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-grid side-menu__icon"></i>
                        <span class="side-menu__label">Apps</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Apps</a>
                        </li>
                        <li class="slide">
                            <a href="calendar.php" class="side-menu__item">Full Calendar</a>
                        </li>
                        <li class="slide">
                            <a href="gallery.php" class="side-menu__item">Gallery</a>
                        </li>
                        <li class="slide">
                            <a href="sweet_alerts.php" class="side-menu__item">Sweet Alerts</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Projects
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="projects-list.php" class="side-menu__item">Projects List</a>
                                </li>
                                <li class="slide">
                                    <a href="projects-overview.php" class="side-menu__item">Project Overview</a>
                                </li>
                                <li class="slide">
                                    <a href="projects-create.php" class="side-menu__item">Create Project</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Task
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="task-kanban-board.php" class="side-menu__item">Kanban Board</a>
                                </li>
                                <li class="slide">
                                    <a href="task-list-view.php" class="side-menu__item">List View</a>
                                </li>
                                <li class="slide">
                                    <a href="task-details.php" class="side-menu__item">Task Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Jobs
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="job-details.php" class="side-menu__item">Job Details</a>
                                </li>
                                <li class="slide">
                                    <a href="job-company-search.php" class="side-menu__item">Search Company</a>
                                </li>
                                <li class="slide">
                                    <a href="job-search.php" class="side-menu__item">Search Jobs</a>
                                </li>
                                <li class="slide">
                                    <a href="job-post.php" class="side-menu__item">Job Post</a>
                                </li>
                                <li class="slide">
                                    <a href="jobs-list.php" class="side-menu__item">Jobs List</a>
                                </li>
                                <li class="slide">
                                    <a href="job-candidate-search.php" class="side-menu__item">Search Candidate</a>
                                </li>
                                <li class="slide">
                                    <a href="job-candidate-details.php" class="side-menu__item">Candidate Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">NFT
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="nft-marketplace.php" class="side-menu__item">Market Place</a>
                                </li>
                                <li class="slide">
                                    <a href="nft-details.php" class="side-menu__item">NFT Details</a>
                                </li>
                                <li class="slide">
                                    <a href="nft-create.php" class="side-menu__item">Create NFT</a>
                                </li>
                                <li class="slide">
                                    <a href="nft-wallet-integration.php" class="side-menu__item">Wallet Integration</a>
                                </li>
                                <li class="slide">
                                    <a href="nft-live-auction.php" class="side-menu__item">Live Auction</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">CRM
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="crm-contacts.php" class="side-menu__item">Contacts</a>
                                </li>
                                <li class="slide">
                                    <a href="crm-companies.php" class="side-menu__item">Companies</a>
                                </li>
                                <li class="slide">
                                    <a href="crm-deals.php" class="side-menu__item">Deals</a>
                                </li>
                                <li class="slide">
                                    <a href="crm-leads.php" class="side-menu__item">Leads</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Crypto
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="crypto-transactions.php" class="side-menu__item">Transactions</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-currency-exchange.php" class="side-menu__item">Currency Exchange</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-buy_sell.php" class="side-menu__item">Buy & Sell</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-marketcap.php" class="side-menu__item">Marketcap</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-wallet.php" class="side-menu__item">Wallet</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-layers side-menu__icon"></i>
                        <span class="side-menu__label">Nested Menu</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Nested Menu</a>
                        </li>
                        <li class="slide">
                            <a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Nested-2
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2.1</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2.2
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child3">
                                        <li class="slide">
                                            <a href="javascript:void(0);" class="side-menu__item">Nested-2.2.1</a>
                                        </li>
                                        <li class="slide">
                                            <a href="javascript:void(0);" class="side-menu__item">Nested-2.2.2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-archive side-menu__icon"></i>
                        <span class="side-menu__label">Ui Elements</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 mega-menu">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Ui Elements</a>
                        </li>
                        <li class="slide">
                            <a href="alerts.php" class="side-menu__item">Alerts</a>
                        </li>
                        <li class="slide">
                            <a href="badge.php" class="side-menu__item">Badge</a>
                        </li>
                        <li class="slide">
                            <a href="breadcrumb.php" class="side-menu__item">Breadcrumb</a>
                        </li>
                        <li class="slide">
                            <a href="buttons.php" class="side-menu__item">Buttons</a>
                        </li>
                        <li class="slide">
                            <a href="buttongroup.php" class="side-menu__item">Button Group</a>
                        </li>
                        <li class="slide">
                            <a href="cards.php" class="side-menu__item">Cards</a>
                        </li>
                        <li class="slide">
                            <a href="dropdowns.php" class="side-menu__item">Dropdowns</a>
                        </li>
                        <li class="slide">
                            <a href="images_figures.php" class="side-menu__item">Images & Figures</a>
                        </li>
                        <li class="slide">
                            <a href="listgroup.php" class="side-menu__item">List Group</a>
                        </li>
                        <li class="slide">
                            <a href="navs_tabs.php" class="side-menu__item">Navs & Tabs</a>
                        </li>
                        <li class="slide">
                            <a href="object-fit.php" class="side-menu__item">Object Fit</a>
                        </li>
                        <li class="slide">
                            <a href="pagination.php" class="side-menu__item">Pagination</a>
                        </li>
                        <li class="slide">
                            <a href="popovers.php" class="side-menu__item">Popovers</a>
                        </li>
                        <li class="slide">
                            <a href="progress.php" class="side-menu__item">Progress</a>
                        </li>
                        <li class="slide">
                            <a href="spinners.php" class="side-menu__item">Spinners</a>
                        </li>
                        <li class="slide">
                            <a href="toasts.php" class="side-menu__item">Toasts</a>
                        </li>
                        <li class="slide">
                            <a href="tooltips.php" class="side-menu__item">Tooltips</a>
                        </li>
                        <li class="slide">
                            <a href="typography.php" class="side-menu__item">Typography</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-award side-menu__icon"></i>
                        <span class="side-menu__label">Utilities</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Utilities</a>
                        </li>
                        <li class="slide">
                            <a href="avatars.php" class="side-menu__item">Avatars</a>
                        </li>
                        <li class="slide">
                            <a href="borders.php" class="side-menu__item">Borders</a>
                        </li>
                        <li class="slide">
                            <a href="breakpoints.php" class="side-menu__item">Breakpoints</a>
                        </li>
                        <li class="slide">
                            <a href="colors.php" class="side-menu__item">Colors</a>
                        </li>
                        <li class="slide">
                            <a href="columns.php" class="side-menu__item">Columns</a>
                        </li>
                        <li class="slide">
                            <a href="flex.php" class="side-menu__item">Flex</a>
                        </li>
                        <li class="slide">
                            <a href="gutters.php" class="side-menu__item">Gutters</a>
                        </li>
                        <li class="slide">
                            <a href="helpers.php" class="side-menu__item">Helpers</a>
                        </li>
                        <li class="slide">
                            <a href="position.php" class="side-menu__item">Position</a>
                        </li>
                        <li class="slide">
                            <a href="more.php" class="side-menu__item">Additional Content</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-file-earmark-text side-menu__icon"></i>
                        <span class="side-menu__label">Forms</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Forms</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Form Elements
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="form_inputs.php" class="side-menu__item">Inputs</a>
                                </li>
                                <li class="slide">
                                    <a href="form_check_radios.php" class="side-menu__item">Checks & Radios</a>
                                </li>
                                <li class="slide">
                                    <a href="form_input_group.php" class="side-menu__item">Input Group</a>
                                </li>
                                <li class="slide">
                                    <a href="form_select.php" class="side-menu__item">Form Select</a>
                                </li>
                                <li class="slide">
                                    <a href="form_range.php" class="side-menu__item">Range Slider</a>
                                </li>
                                <li class="slide">
                                    <a href="form_input_masks.php" class="side-menu__item">Input Masks</a>
                                </li>
                                <li class="slide">
                                    <a href="form_file_uploads.php" class="side-menu__item">File Uploads</a>
                                </li>
                                <li class="slide">
                                    <a href="form_dateTime_pickers.php" class="side-menu__item">Date,Time Picker</a>
                                </li>
                                <li class="slide">
                                    <a href="form_color_pickers.php" class="side-menu__item">Color Pickers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="floating_labels.php" class="side-menu__item">Floating Labels</a>
                        </li>
                        <li class="slide">
                            <a href="form_layout.php" class="side-menu__item">Form Layouts</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Form Editors
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="quill_editor.php" class="side-menu__item">Quill Editor</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="form_validation.php" class="side-menu__item">Validation</a>
                        </li>
                        <li class="slide">
                            <a href="form_select2.php" class="side-menu__item">Select2</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-snow side-menu__icon"></i>
                        <span class="side-menu__label">Advanced UI</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Advanced Ui</a>
                        </li>
                        <li class="slide">
                            <a href="accordions_collpase.php" class="side-menu__item">Accordions & Collapse</a>
                        </li>
                        <li class="slide">
                            <a href="carousel.php" class="side-menu__item">Carousel</a>
                        </li>
                        <li class="slide">
                            <a href="draggable-cards.php" class="side-menu__item">Draggable Cards</a>
                        </li>
                        <li class="slide">
                            <a href="modals_closes.php" class="side-menu__item">Modals & Closes</a>
                        </li>
                        <li class="slide">
                            <a href="navbar.php" class="side-menu__item">Navbar</a>
                        </li>
                        <li class="slide">
                            <a href="offcanvas.php" class="side-menu__item">Offcanvas</a>
                        </li>
                        <li class="slide">
                            <a href="placeholders.php" class="side-menu__item">Placeholders</a>
                        </li>
                        <li class="slide">
                            <a href="ratings.php" class="side-menu__item">Ratings</a>
                        </li>
                        <li class="slide">
                            <a href="scrollspy.php" class="side-menu__item">Scrollspy</a>
                        </li>
                        <li class="slide">
                            <a href="swiperjs.php" class="side-menu__item">Swiper JS</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="widgets.php" class="side-menu__item">
                        <i class="bi bi-gift side-menu__icon"></i>
                        <span class="side-menu__label">Widgets</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-layout-text-window side-menu__icon"></i>
                        <!-- <i class="bi bi-table"></i> -->
                        <span class="side-menu__label">Tables</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Tables</a>
                        </li>
                        <li class="slide">
                            <a href="tables.php" class="side-menu__item">Tables</a>
                        </li>
                        <li class="slide">
                            <a href="grid-tables.php" class="side-menu__item">Grid JS Tables</a>
                        </li>
                        <li class="slide">
                            <a href="data-tables.php" class="side-menu__item">Data Tables</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-bar-chart side-menu__icon"></i>
                        <span class="side-menu__label">Charts</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Charts</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Apex Charts
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="apex-line-charts.php" class="side-menu__item">Line Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-area-charts.php" class="side-menu__item">Area Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-column-charts.php" class="side-menu__item">Column Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-bar-charts.php" class="side-menu__item">Bar Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-mixed-charts.php" class="side-menu__item">Mixed Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-rangearea-charts.php" class="side-menu__item">Range Area Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-timeline-charts.php" class="side-menu__item">Timeline Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-funnel-charts.php" class="side-menu__item">Funnel Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-candlestick-charts.php" class="side-menu__item">CandleStick
                                        Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-boxplot-charts.php" class="side-menu__item">Boxplot Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-bubble-charts.php" class="side-menu__item">Bubble Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-scatter-charts.php" class="side-menu__item">Scatter Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-heatmap-charts.php" class="side-menu__item">Heatmap Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-treemap-charts.php" class="side-menu__item">Treemap Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-pie-charts.php" class="side-menu__item">Pie Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-radialbar-charts.php" class="side-menu__item">Radialbar Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-radar-charts.php" class="side-menu__item">Radar Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-polararea-charts.php" class="side-menu__item">Polararea Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="chartjs-charts.php" class="side-menu__item">Chartjs Charts</a>
                        </li>
                        <li class="slide">
                            <a href="echarts.php" class="side-menu__item">Echart Charts</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-geo-alt side-menu__icon"></i>
                        <span class="side-menu__label">Maps</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Maps</a>
                        </li>
                        <li class="slide">
                            <a href="google-maps.php" class="side-menu__item">Google Maps</a>
                        </li>
                        <li class="slide">
                            <a href="leaflet-maps.php" class="side-menu__item">Leaflet Maps</a>
                        </li>
                        <li class="slide">
                            <a href="vector-maps.php" class="side-menu__item">Vector Maps</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="icons.php" class="side-menu__item">
                        <i class="bi bi-shop side-menu__icon"></i>
                        <span class="side-menu__label">Icons</span>
                    </a>
                </li>
                <!-- End::slide -->

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
<!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h1 class="page-title fw-medium fs-18 mb-2">Mail Settings</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Email</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mail Settings</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="btn-list">
                        <button class="btn btn-primary-light btn-wave me-2">
                            <i class="bx bx-crown align-middle"></i> Plan Upgrade
                        </button>
                        <button class="btn btn-secondary-light btn-wave me-0">
                            <i class="ri-upload-cloud-line align-middle"></i> Export Report
                        </button>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row mb-5">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header d-sm-flex d-block">
                                <ul class="nav nav-tabs nav-tabs-header mb-0 d-sm-flex d-block" role="tablist">
                                    <li class="nav-item m-1">
                                        <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#personal-info" aria-selected="true">Personal Information</a>
                                    </li>
                                    <li class="nav-item m-1">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#account-settings" aria-selected="true">Account Settings</a>
                                    </li>
                                    <li class="nav-item m-1">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#email-settings" aria-selected="true">Email</a>
                                    </li>
                                    <li class="nav-item m-1">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#labels" aria-selected="true">Labels</a>
                                    </li>
                                    <li class="nav-item m-1">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#notification-settings" aria-selected="true">Notifications</a>
                                    </li>
                                    <li class="nav-item m-1">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#security" aria-selected="true">Security</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="personal-info"
                                        role="tabpanel">
                                        <div class="p-sm-3 p-0">
                                            <h6 class="fw-medium mb-3">
                                                Photo :
                                            </h6>
                                            <div class="mb-4 d-sm-flex align-items-center">
                                                <div class="mb-0 me-5">
                                                    <span class="avatar avatar-xxl avatar-rounded">
                                                        <img src="assets/images/faces/9.jpg" alt="" id="profile-img">
                                                        <a href="javascript:void(0);" class="badge rounded-pill bg-primary avatar-badge">
                                                            <input type="file" name="photo" class="position-absolute w-100 h-100 op-0" id="profile-change">
                                                            <i class="fe fe-camera"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-primary">Change</button>
                                                    <button class="btn btn-light">Remove</button>
                                                </div>
                                            </div>
                                            <h6 class="fw-medium mb-3">
                                                Profile :
                                            </h6>
                                            <div class="row gy-4 mb-4">
                                                <div class="col-xl-6">
                                                    <label for="first-name" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" id="first-name" placeholder="Firt Name">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="last-name" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" id="last-name" placeholder="Last Name">
                                                </div>
                                                <div class="col-xl-12">
                                                    <label class="form-label">User Name</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon3">user2413@gmail.com</span>
                                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                                    </div>
                                                </div>  
                                            </div>
                                            <h6 class="fw-medium mb-3">
                                                Personal information :
                                            </h6>
                                            <div class="row gy-4 mb-4">
                                                <div class="col-xl-6">
                                                    <label for="email-address" class="form-label">Email Address :</label>
                                                    <input type="text" class="form-control" id="email-address" placeholder="xyz@gmail.com">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="Contact-Details" class="form-label">Contact Details :</label>
                                                    <input type="text" class="form-control" id="Contact-Details" placeholder="contact details">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="language" class="form-label">Language :</label>
                                                    <select class="form-control" name="language" id="language" multiple>
                                                    <option value="Choice 1" selected>English</option>
                                                    <option value="Choice 2">French</option>
                                                    <option value="Choice 3">Arabic</option>
                                                    <option value="Choice 4">Hindi</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">Country :</label>
                                                    <select class="form-control" data-trigger name="country-select" id="country-select">
                                                        <option value="Choice 1">Usa</option>
                                                        <option value="Choice 2">Australia</option>
                                                        <option value="Choice 3">Dubai</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-12">
                                                    <label for="bio" class="form-label">Bio :</label>
                                                    <textarea class="form-control" id="bio" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. At sit impedit, officiis non minima saepe voluptates a magnam enim sequi porro veniam ea suscipit dolorum vel mollitia voluptate iste nemo!</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="account-settings"
                                        role="tabpanel">
                                        <div class="row gap-3 justify-content-between">
                                            <div class="col-xl-7">
                                                <div class="card custom-card shadow-none mb-0 border">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-medium">Two Step Verification</p>
                                                                <p class="fs-12 text-muted mb-0">Two step verificatoin is very secured and restricts in happening faulty practices.</p>
                                                            </div>
                                                            <div class="custom-toggle-switch ms-sm-2 ms-0"> 
                                                                <input id="two-step" name="toggleswitchsize" type="checkbox" checked=""> 
                                                                <label for="two-step" class="label-primary mb-1"></label>
                                                            </div>
                                                        </div>
                                                        <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                            <div class="mb-sm-0 mb-2">
                                                                <p class="fs-14 mb-2 fw-medium">Authentication</p>
                                                                <div class="mb-0 authentication-btn-group">
                                                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked="">
                                                                        <label class="btn btn-outline-primary" for="btnradio1"><i class="ri-lock-unlock-line me-1 align-middle d-inline-block"></i>Pin</label>
                                                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                                                        <label class="btn btn-outline-primary" for="btnradio2"><i class="ri-lock-password-line me-1 align-middle d-inline-block"></i>Password</label>
                                                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
                                                                        <label class="btn btn-outline-primary" for="btnradio3"><i class="ri-fingerprint-line me-1 align-middle d-inline-block"></i>Finger Print</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="custom-toggle-switch ms-sm-2 ms-0"> 
                                                                <input id="authentication" name="toggleswitchsize" type="checkbox" checked=""> 
                                                                <label for="authentication" class="label-primary mb-1"></label>
                                                            </div>
                                                        </div>
                                                        <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-medium">Recovery Mail</p>
                                                                <p class="fs-12 text-muted mb-0">Incase of forgetting password mails are sent to  heifo@gmail.com</p>
                                                            </div>
                                                            <div class="custom-toggle-switch ms-sm-2 ms-0"> 
                                                                <input id="recovery-mail" name="toggleswitchsize" type="checkbox" checked=""> 
                                                                <label for="recovery-mail" class="label-primary mb-1"></label>
                                                            </div>
                                                        </div>
                                                        <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-medium">SMS Recovery</p>
                                                                <p class="fs-12 text-muted mb-0">SMS are sent to 9102312xx in case of recovery</p>
                                                            </div>
                                                            <div class="custom-toggle-switch ms-sm-2 ms-0"> 
                                                                <input id="sms-recovery" name="toggleswitchsize" type="checkbox" checked=""> 
                                                                <label for="sms-recovery" class="label-primary mb-1"></label>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-top justify-content-between">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-medium">Reset Password</p>
                                                                <p class="fs-12 text-muted">Password should be min of <b class="text-success">8 digits<sup>*</sup></b>,atleast <b class="text-success">One Capital letter<sup>*</sup></b> and <b class="text-success">One Special Character<sup>*</sup></b> included.</p>
                                                                <div class="mb-2">
                                                                    <label for="current-password" class="form-label">Current Password</label>
                                                                    <input type="text" class="form-control" id="current-password" placeholder="Current Password">
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label for="new-password" class="form-label">New Password</label>
                                                                    <input type="text" class="form-control" id="new-password" placeholder="New Password">
                                                                </div>
                                                                <div class="mb-0">
                                                                    <label for="confirm-password" class="form-label">Confirm Password</label>
                                                                    <input type="text" class="form-control" id="confirm-password" placeholder="Confirm PAssword">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="card custom-card shadow-none mb-0 border">
                                                    <div class="card-header justify-content-between d-sm-flex d-block">
                                                        <div class="card-title">Registered Devices</div>
                                                        <div class="mt-sm-0 mt-2">
                                                            <button class="btn btn-sm btn-primary">Signout from all devices</button>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <ul class="list-group">
                                                            <li class="list-group-item">
                                                                <div class="d-sm-flex d-block align-items-top">
                                                                    <div class="lh-1 mb-sm-0 mb-2"><i class="bi bi-phone me-2 fs-16 align-middle text-muted"></i></div>
                                                                    <div class="lh-1 flex-fill">
                                                                        <p class="mb-1">
                                                                            <span class="fw-medium">Mobile-LG-1023</span>
                                                                        </p>
                                                                        <p class="mb-0">
                                                                            <span class="text-muted fs-11">Manchester, UK-Nov 30, 04:45PM</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="dropdown mt-sm-0 mt-2">
                                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="fe fe-more-vertical"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-sm-flex d-block align-items-top">
                                                                    <div class="lh-1 mb-sm-0 mb-2"><i class="bi bi-laptop me-2 fs-16 align-middle text-muted"></i></div>
                                                                    <div class="lh-1 flex-fill">
                                                                        <p class="mb-1">
                                                                            <span class="fw-medium">Lenovo-1291203</span>
                                                                        </p>
                                                                        <p class="mb-0">
                                                                            <span class="text-muted fs-11">England, UK-Aug 12, 12:25PM</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="dropdown mt-sm-0 mt-2">
                                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="fe fe-more-vertical"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-sm-flex d-block align-items-top">
                                                                    <div class="lh-1 mb-sm-0 mb-2"><i class="bi bi-laptop me-2 fs-16 align-middle text-muted"></i></div>
                                                                    <div class="lh-1 flex-fill">
                                                                        <p class="mb-1">
                                                                            <span class="fw-medium">Macbook-Suzika</span>
                                                                        </p>
                                                                        <p class="mb-0">
                                                                            <span class="text-muted fs-11">Brightoon, UK-Jul 18, 8:34AM</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="dropdown mt-sm-0 mt-2">
                                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="fe fe-more-vertical"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-sm-flex d-block align-items-top">
                                                                    <div class="lh-1 mb-sm-0 mb-2"><i class="bi bi-pc-display-horizontal me-2 fs-16 align-middle text-muted"></i></div>
                                                                    <div class="lh-1 flex-fill">
                                                                        <p class="mb-1">
                                                                            <span class="fw-medium">Apple-Desktop</span>
                                                                        </p>
                                                                        <p class="mb-0">
                                                                            <span class="text-muted fs-11">Darlington, UK-Jan 14, 11:14AM</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="dropdown mt-sm-0 mt-2">
                                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="fe fe-more-vertical"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-0" id="email-settings"
                                        role="tabpanel">
                                        <ul class="list-group list-group-flush rounded">
                                            <li class="list-group-item">
                                                <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                                        <span class="fs-14 fw-medium mb-0">Menu View :</span>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Default View
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked="">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Advanced View
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="custom-toggle-switch float-sm-end"> 
                                                            <input id="menu-view" name="toggleswitchsize" type="checkbox" checked=""> 
                                                            <label for="menu-view" class="label-danger mb-1"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row gy-3 d-sm-flex align-items-center justify-content-between">
                                                    <div class="col-xl-3">
                                                        <span class="fs-14 fw-medium mb-0">Language :</span>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <label for="mail-language" class="form-label">Languages :</label>
                                                        <select class="form-control" name="mail-language" id="mail-language" multiple>
                                                        <option value="Choice 1" selected>English</option>
                                                        <option value="Choice 2" selected>French</option>
                                                        <option value="Choice 3">Arabic</option>
                                                        <option value="Choice 4">Hindi</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="custom-toggle-switch float-sm-end"> 
                                                            <input id="mail-languages" name="toggleswitchsize" type="checkbox"> 
                                                            <label for="mail-languages" class="label-danger mb-1"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                    <div class="col-xl-3">
                                                        <span class="fs-14 fw-medium mb-0">Images :</span>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="images-open" id="images-open1">
                                                            <label class="form-check-label" for="images-open1">
                                                                Always Open Images
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="images-open" id="images-hide2" checked="">
                                                            <label class="form-check-label" for="images-hide2">
                                                                Ask For Permission
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="custom-toggle-switch float-sm-end"> 
                                                            <input id="mails-images" name="toggleswitchsize" type="checkbox"> 
                                                            <label for="mails-images" class="label-danger mb-1"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                    <div class="col-xl-3">
                                                        <span class="fs-14 fw-medium mb-0">Keyboard Shortcuts :</span>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keyboard-enable" id="keyboard-enable1">
                                                            <label class="form-check-label" for="keyboard-enable1">
                                                                Keyboard Shortcuts Enable
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keyboard-enable" id="keyboard-disable2" checked="">
                                                            <label class="form-check-label" for="keyboard-disable2">
                                                                Keyboard Shortcuts Disable
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="custom-toggle-switch float-sm-end"> 
                                                            <input id="keyboard-shortcuts" name="toggleswitchsize" type="checkbox"> 
                                                            <label for="keyboard-shortcuts" class="label-danger mb-1"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                    <div class="col-xl-3">
                                                        <span class="fs-14 fw-medium mb-0">Notifications :</span>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="desktop-notifications" checked="">
                                                            <label class="form-check-label" for="desktop-notifications">
                                                                Desktop Notifications
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="mobile-notifications">
                                                            <label class="form-check-label" for="mobile-notifications">
                                                                Mobile Notifications
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="float-sm-end">
                                                            <a href="javascript:void(0)" class="btn btn-success-ghost btn-sm">Learn-more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row gy-3 d-sm-flex align-items-center justify-content-between">
                                                    <div class="col-xl-3">
                                                        <span class="fs-14 fw-medium mb-0">Maximum Mails Per Page :</span>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <select class="form-control" data-trigger name="mail-per-page" id="mail-per-page">
                                                        <option value="Choice 1" selected>10</option>
                                                        <option value="Choice 2">50</option>
                                                        <option value="Choice 3">100</option>
                                                        <option value="Choice 3">120</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="custom-toggle-switch float-sm-end"> 
                                                            <input id="mails-per-page" name="toggleswitchsize" type="checkbox"> 
                                                            <label for="mails-per-page" class="label-danger mb-1"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                    <div class="col-xl-3">
                                                        <span class="fs-14 fw-medium mb-0">Mail Composer :</span>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="mail-composer" id="mail-composeron1">
                                                            <label class="form-check-label" for="mail-composeron1">
                                                                Mail Composer On
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="mail-composer" id="mail-composeroff2" checked="">
                                                            <label class="form-check-label" for="mail-composeroff2">
                                                                Mail Composer Off
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="custom-toggle-switch float-sm-end"> 
                                                            <input id="mail-composer" name="toggleswitchsize" type="checkbox"> 
                                                            <label for="mail-composer" class="label-danger mb-1"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                    <div class="col-xl-3">
                                                        <span class="fs-14 fw-medium mb-0">Auto Correct :</span>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="auto-correct" id="auto-correcton1">
                                                            <label class="form-check-label" for="auto-correcton1">
                                                                Auto Correct On
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="auto-correct" id="auto-correctoff2" checked="">
                                                            <label class="form-check-label" for="auto-correctoff2">
                                                                Auto Correct Off
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="custom-toggle-switch float-sm-end"> 
                                                            <input id="auto-correct" name="toggleswitchsize" type="checkbox"> 
                                                            <label for="auto-correct" class="label-danger mb-1"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                    <div class="col-xl-3">
                                                        <span class="fs-14 fw-medium mb-0">Mail Send Action :</span>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="on-keyboard" checked="">
                                                            <label class="form-check-label" for="on-keyboard">
                                                                On Keyboard Action
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="on-buttonclick">
                                                            <label class="form-check-label" for="on-buttonclick">
                                                                On Button Click
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="float-sm-end">
                                                            <a href="javascript:void(0)" class="btn btn-success-ghost btn-sm">Learn-more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="labels"
                                        role="tabpanel">
                                        <p class="fs-14 fw-medium mb-3">Mail Labels :</p>
                                        <div class="row gy-2">
                                            <div class="col-xl-3">
                                                <div class="card custom-card shadow-none border">
                                                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="">
                                                            <span class="fw-medium">All Mails</span>
                                                        </div>
                                                        <div>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="label-allmails" id="all-mails-enable" checked="">
                                                                <label class="btn btn-sm btn-outline-primary" for="all-mails-enable">Enable</label>
                                                                <input type="radio" class="btn-check" name="label-allmails" id="all-mails-disable">
                                                                <label class="btn btn-sm btn-outline-primary" for="all-mails-disable">Disable</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card custom-card shadow-none border">
                                                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="">
                                                            <span class="fw-medium">Inbox</span>
                                                        </div>
                                                        <div>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="label-inbox" id="inbox-enable" checked="">
                                                                <label class="btn btn-sm btn-outline-primary" for="inbox-enable">Enable</label>
                                                                <input type="radio" class="btn-check" name="label-inbox" id="inbox-disable">
                                                                <label class="btn btn-sm btn-outline-primary" for="inbox-disable">Disable</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card custom-card shadow-none border">
                                                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="">
                                                            <span class="fw-medium">Sent</span>
                                                        </div>
                                                        <div>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="label-sent" id="sent-enable" checked="">
                                                                <label class="btn btn-sm btn-outline-primary" for="sent-enable">Enable</label>
                                                                <input type="radio" class="btn-check" name="label-sent" id="sent-disable">
                                                                <label class="btn btn-sm btn-outline-primary" for="sent-disable">Disable</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card custom-card shadow-none border">
                                                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="">
                                                            <span class="fw-medium">Drafts</span>
                                                        </div>
                                                        <div>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="label-drafts" id="drafts-enable" checked="">
                                                                <label class="btn btn-sm btn-outline-primary" for="drafts-enable">Enable</label>
                                                                <input type="radio" class="btn-check" name="label-drafts" id="drafts-disable">
                                                                <label class="btn btn-sm btn-outline-primary" for="drafts-disable">Disable</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card custom-card shadow-none border">
                                                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="">
                                                            <span class="fw-medium">Spam</span>
                                                        </div>
                                                        <div>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="label-spam" id="spam-enable" checked="">
                                                                <label class="btn btn-sm btn-outline-primary" for="spam-enable">Enable</label>
                                                                <input type="radio" class="btn-check" name="label-spam" id="spam-disable">
                                                                <label class="btn btn-sm btn-outline-primary" for="spam-disable">Disable</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card custom-card shadow-none border">
                                                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="">
                                                            <span class="fw-medium">Important</span>
                                                        </div>
                                                        <div>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="label-important" id="important-enable" checked="">
                                                                <label class="btn btn-sm btn-outline-primary" for="important-enable">Enable</label>
                                                                <input type="radio" class="btn-check" name="label-important" id="important-disable">
                                                                <label class="btn btn-sm btn-outline-primary" for="important-disable">Disable</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card custom-card shadow-none border">
                                                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="">
                                                            <span class="fw-medium">Trash</span>
                                                        </div>
                                                        <div>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="label-trash" id="trash-enable" checked="">
                                                                <label class="btn btn-sm btn-outline-primary" for="trash-enable">Enable</label>
                                                                <input type="radio" class="btn-check" name="label-trash" id="trash-disable">
                                                                <label class="btn btn-sm btn-outline-primary" for="trash-disable">Disable</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card custom-card shadow-none border">
                                                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="">
                                                            <span class="fw-medium">Archive</span>
                                                        </div>
                                                        <div>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="label-archive" id="archive-enable" checked="">
                                                                <label class="btn btn-sm btn-outline-primary" for="archive-enable">Enable</label>
                                                                <input type="radio" class="btn-check" name="label-archive" id="archive-disable">
                                                                <label class="btn btn-sm btn-outline-primary" for="archive-disable">Disable</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card custom-card shadow-none border">
                                                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="">
                                                            <span class="fw-medium">Starred</span>
                                                        </div>
                                                        <div>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="label-starred" id="starred-enable" checked="">
                                                                <label class="btn btn-sm btn-outline-primary" for="starred-enable">Enable</label>
                                                                <input type="radio" class="btn-check" name="label-starred" id="starred-disable">
                                                                <label class="btn btn-sm btn-outline-primary" for="starred-disable">Disable</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="fs-14 fw-medium mb-3">Settings :</p>
                                        <div class="row gy-2">
                                            <div class="col-xl-3">
                                                <div class="card custom-card shadow-none border">
                                                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="">
                                                            <span class="fw-medium">Settings</span>
                                                        </div>
                                                        <div>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="label-settings" id="settings-enable" checked="">
                                                                <label class="btn btn-sm btn-outline-primary" for="settings-enable">Enable</label>
                                                                <input type="radio" class="btn-check" name="label-settings" id="settings-disable">
                                                                <label class="btn btn-sm btn-outline-primary" for="settings-disable">Disable</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                        <p class="fs-14 fw-medium mb-3">Custom Labels :</p>
                                        <div class="row gy-2">
                                            <div class="col-xl-3">
                                                <div class="card custom-card shadow-none border">
                                                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="">
                                                            <span class="fw-medium">Mail</span>
                                                        </div>
                                                        <div>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="label-custom-mail" id="custom-mail-enable" checked="">
                                                                <label class="btn btn-sm btn-outline-primary" for="custom-mail-enable">Enable</label>
                                                                <input type="radio" class="btn-check" name="label-custom-mail" id="custom-mail-disable">
                                                                <label class="btn btn-sm btn-outline-primary" for="custom-mail-disable">Disable</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card custom-card shadow-none border">
                                                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="">
                                                            <span class="fw-medium">Home</span>
                                                        </div>
                                                        <div>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="label-home" id="home-enable" checked="">
                                                                <label class="btn btn-sm btn-outline-primary" for="home-enable">Enable</label>
                                                                <input type="radio" class="btn-check" name="label-home" id="home-disable">
                                                                <label class="btn btn-sm btn-outline-primary" for="home-disable">Disable</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card custom-card shadow-none border">
                                                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="">
                                                            <span class="fw-medium">Work</span>
                                                        </div>
                                                        <div>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="label-work" id="work-enable" checked="">
                                                                <label class="btn btn-sm btn-outline-primary" for="work-enable">Enable</label>
                                                                <input type="radio" class="btn-check" name="label-work" id="work-disable">
                                                                <label class="btn btn-sm btn-outline-primary" for="work-disable">Disable</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card custom-card shadow-none border">
                                                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="">
                                                            <span class="fw-medium">Friends</span>
                                                        </div>
                                                        <div>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="label-friends" id="friends-enable" checked="">
                                                                <label class="btn btn-sm btn-outline-primary" for="friends-enable">Enable</label>
                                                                <input type="radio" class="btn-check" name="label-friends" id="friends-disable">
                                                                <label class="btn btn-sm btn-outline-primary" for="friends-disable">Disable</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="tab-pane p-0" id="notification-settings"
                                        role="tabpanel">
                                        <ul class="list-group list-group-flush list-unstyled rounded">
                                            <li class="list-group-item">
                                                <div class="row gx-5 gy-3">
                                                    <div class="col-xl-5">
                                                        <p class="fs-16 mb-1 fw-medium">Email Notifications</p>
                                                        <p class="fs-12 mb-0 text-muted">Email notifications are the notifications you will receeive when you are offline, you can customize them by enabling or disabling them.</p>
                                                    </div>
                                                    <div class="col-xl-7">
                                                        <div class="d-flex align-items-top justify-content-between mt-sm-0 mt-3">
                                                            <div class="mail-notification-settings">
                                                                <p class="fs-14 mb-1 fw-medium">Updates & Features</p>
                                                                <p class="fs-12 mb-0 text-muted">Notifications about new updates and their features.</p>
                                                            </div>
                                                            <div>
                                                                <div class="custom-toggle-switch float-sm-end"> 
                                                                    <input id="update-features" name="toggleswitchsize" type="checkbox" checked=""> 
                                                                    <label for="update-features" class="label-success mb-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-top justify-content-between mt-3">
                                                            <div class="mail-notification-settings">
                                                                <p class="fs-14 mb-1 fw-medium">Early Access</p>
                                                                <p class="fs-12 mb-0 text-muted">Users are selected for beta testing of new update,notifications relating or participate in any of paid product promotion.</p>
                                                            </div>
                                                            <div>
                                                                <div class="custom-toggle-switch float-sm-end"> 
                                                                    <input id="early-access" name="toggleswitchsize" type="checkbox"> 
                                                                    <label for="early-access" class="label-success mb-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-top justify-content-between mt-3">
                                                            <div class="mail-notification-settings">
                                                                <p class="fs-14 mb-1 fw-medium">Email Shortcuts</p>
                                                                <p class="fs-12 mb-0 text-muted">Shortcut notifications for email.</p>
                                                            </div>
                                                            <div>
                                                                <div class="custom-toggle-switch float-sm-end"> 
                                                                    <input id="email-shortcut" name="toggleswitchsize" type="checkbox" checked=""> 
                                                                    <label for="email-shortcut" class="label-success mb-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-top justify-content-between mt-3">
                                                            <div class="mail-notification-settings">
                                                                <p class="fs-14 mb-1 fw-medium">New Mails</p>
                                                                <p class="fs-12 mb-0 text-muted">Notifications related to new mails received.</p>
                                                            </div>
                                                            <div>
                                                                <div class="custom-toggle-switch float-sm-end"> 
                                                                    <input id="new-mails" name="toggleswitchsize" type="checkbox" checked=""> 
                                                                    <label for="new-mails" class="label-success mb-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-top justify-content-between mt-3">
                                                            <div class="mail-notification-settings">
                                                                <p class="fs-14 mb-1 fw-medium">Mail Chat Messages</p>
                                                                <p class="fs-12 mb-0 text-muted">Any of new messages are received will be updated through notifications.</p>
                                                            </div>
                                                            <div>
                                                                <div class="custom-toggle-switch float-sm-end"> 
                                                                    <input id="mail-chat-messages" name="toggleswitchsize" type="checkbox" checked=""> 
                                                                    <label for="mail-chat-messages" class="label-success mb-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row gx-5 gy-3">
                                                    <div class="col-xl-5">
                                                        <p class="fs-16 mb-1 fw-medium">Push Notifications</p>
                                                        <p class="fs-12 mb-0 text-muted">Push notifications are recieved when you are online, you can customize them by enabling or disabling them.</p>
                                                    </div>
                                                    <div class="col-xl-7">
                                                        <div class="d-flex align-items-top justify-content-between mt-sm-0 mt-3">
                                                            <div class="mail-notification-settings">
                                                                <p class="fs-14 mb-1 fw-medium">New Mails</p>
                                                                <p class="fs-12 mb-0 text-muted">Notifications related to new mails received.</p>
                                                            </div>
                                                            <div>
                                                                <div class="custom-toggle-switch float-sm-end"> 
                                                                    <input id="push-new-mails" name="toggleswitchsize" type="checkbox" checked=""> 
                                                                    <label for="push-new-mails" class="label-success mb-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-top justify-content-between mt-3">
                                                            <div class="mail-notification-settings">
                                                                <p class="fs-14 mb-1 fw-medium">Mail Chat Messages</p>
                                                                <p class="fs-12 mb-0 text-muted">Any of new messages are received will be updated through notifications.</p>
                                                            </div>
                                                            <div>
                                                                <div class="custom-toggle-switch float-sm-end"> 
                                                                    <input id="push-mail-chat-messages" name="toggleswitchsize" type="checkbox" checked=""> 
                                                                    <label for="push-mail-chat-messages" class="label-success mb-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-top justify-content-between mt-3">
                                                            <div class="mail-notification-settings">
                                                                <p class="fs-14 mb-1 fw-medium">Mail Extensions</p>
                                                                <p class="fs-12 mb-0 text-muted">Notifications related to the extensions received by new emails and thier propertied also been displayed.</p>
                                                            </div>
                                                            <div>
                                                                <div class="custom-toggle-switch float-sm-end"> 
                                                                    <input id="mail-extensions" name="toggleswitchsize" type="checkbox"> 
                                                                    <label for="mail-extensions" class="label-success mb-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane p-0" id="security"
                                        role="tabpanel">
                                        <ul class="list-group list-group-flush list-unstyled rounded">
                                            <li class="list-group-item">
                                                <div class="row gx-5 gy-3">
                                                    <div class="col-xl-4">
                                                        <p class="fs-16 mb-1 fw-medium">Logging In</p>
                                                        <p class="fs-12 mb-0 text-muted">Security settings related to logging into our email account and taking down account if any mischevious action happended.</p>
                                                    </div>
                                                    <div class="col-xl-8">
                                                        <div class="d-sm-flex d-block align-items-top justify-content-between mt-sm-0 mt-3">
                                                            <div class="mail-security-settings">
                                                                <p class="fs-14 mb-1 fw-medium">Max Limit for login attempts</p>
                                                                <p class="fs-12 mb-0 text-muted">Account will freeze for 24hrs while attempt to login with wrong credentials for selected number of times</p>
                                                            </div>
                                                            <div>
                                                                <select class="form-control" data-trigger name="max-login-attempts" id="max-login-attempts">
                                                                <option value="Choice 1" selected>3 Attempts</option>
                                                                <option value="Choice 2">5 Attempts</option>
                                                                <option value="Choice 3">10 Attempts</option>
                                                                <option value="Choice 3">20 Attempts</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-medium">Account Freeze time management</p>
                                                                <p class="fs-12 mb-0 text-muted">You can change the time for the account freeze when attempts for </p>
                                                            </div>
                                                            <div>
                                                                <select class="form-control" data-trigger name="account-freeze-time-format" id="account-freeze-time-format">
                                                                <option value="Choice 1" selected>1 Day</option>
                                                                <option value="Choice 2">1 Hour</option>
                                                                <option value="Choice 3">1 Month</option>
                                                                <option value="Choice 3">1 Year</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row gx-5 gy-3">
                                                    <div class="col-xl-4">
                                                        <p class="fs-16 mb-1 fw-medium">Password Requirements</p>
                                                        <p class="fs-12 mb-0 text-muted">Security settings related to password strength.</p>
                                                    </div>
                                                    <div class="col-xl-8">
                                                        <div class="d-sm-flex d-block align-items-top justify-content-between mt-sm-0 mt-3 gap-3">
                                                            <div class="mail-security-settings">
                                                                <p class="fs-14 mb-1 fw-medium">Minimum number of characters in the password</p>
                                                                <p class="fs-12 mb-0 text-muted">There should be a minimum number of characters for a password to be validated that shouls be set here.</p>
                                                            </div>
                                                            <div>
                                                                <input type="text" class="form-control" value="8">
                                                            </div>
                                                        </div>
                                                        <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-medium">Contain A Number</p>
                                                                <p class="fs-12 mb-0 text-muted">Password should contain a number.</p>
                                                            </div>
                                                            <div>
                                                                <div class="custom-toggle-switch float-sm-end"> 
                                                                    <input id="password-number" name="toggleswitchsize" type="checkbox"> 
                                                                    <label for="password-number" class="label-success mb-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-medium">Contain A Special Character</p>
                                                                <p class="fs-12 mb-0 text-muted">Password should contain a special Character.</p>
                                                            </div>
                                                            <div>
                                                                <div class="custom-toggle-switch float-sm-end"> 
                                                                    <input id="password-special-character" name="toggleswitchsize" type="checkbox" checked=""> 
                                                                    <label for="password-special-character" class="label-success mb-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-medium">Atleast One Capital Letter</p>
                                                                <p class="fs-12 mb-0 text-muted">Password should contain atleast one capital letter.</p>
                                                            </div>
                                                            <div>
                                                                <div class="custom-toggle-switch float-sm-end"> 
                                                                    <input id="password-capital" name="toggleswitchsize" type="checkbox" checked=""> 
                                                                    <label for="password-capital" class="label-success mb-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-medium">Maximum Password Length</p>
                                                                <p class="fs-12 mb-0 text-muted">Maximum password lenth should be selected here.</p>
                                                            </div>
                                                            <div>
                                                                <input type="text" class="form-control" value="16">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row gx-5 gy-3">
                                                    <div class="col-xl-4">
                                                        <p class="fs-16 mb-1 fw-medium">Unknown Chats</p>
                                                        <p class="fs-12 mb-0 text-muted">Security settings related to unknown chats.</p>
                                                    </div>
                                                    <div class="col-xl-8">
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="unknown-messages" id="unknown-messages-show1">
                                                                <label class="form-check-label" for="unknown-messages-show1">
                                                                    Show
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="unknown-messages" id="unknown-messages-hide2" checked="">
                                                                <label class="form-check-label" for="unknown-messages-hide2">
                                                                    Hide
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>    
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="float-end">
                                    <button class="btn btn-light m-1">
                                        Restore Defaults
                                    </button>
                                    <button class="btn btn-primary m-1">
                                        Save Changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

            </div>
        </div>
        <!-- End::app-content -->

        
        <!-- Footer Start -->
<footer class="footer mt-auto py-3 bg-white text-center">
    <div class="container">
        <span class="text-muted"> Copyright © <span id="year"></span> <a
                href="javascript:void(0);" class="text-dark fw-medium">Udon</a>.
            Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
                <span class="fw-medium text-primary text-decoration-underline">Spruko</span>
            </a> All
            rights
            reserved
        </span>
    </div>
</footer>
<!-- Footer End -->
        <div class="modal fade" id="header-responsive-search" tabindex="-1" aria-labelledby="header-responsive-search" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="input-group">
                    <input type="text" class="form-control border-end-0" placeholder="Search Anything ..."
                        aria-label="Search Anything ..." aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button"
                        id="button-addon2"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>

    
<!-- Scroll To Top -->
<div class="scrollToTop">
    <span class="arrow"><i class="ti ti-arrow-narrow-up fs-20"></i></span>
</div>
<div id="responsive-overlay"></div>
<!-- Scroll To Top -->

<!-- Popper JS -->
<script src="assets/libs/@popperjs/core/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Defaultmenu JS -->
<script src="assets/js/defaultmenu.min.js"></script>

<!-- Node Waves JS-->
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- Sticky JS -->
<script src="assets/js/sticky.js"></script>

<!-- Simplebar JS -->
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/js/simplebar.js"></script>

<!-- Color Picker JS -->
<script src="assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>


    
<!-- Custom-Switcher JS -->
<script src="assets/js/custom-switcher.min.js"></script>

    <!-- Mail Settings -->
    <script src="assets/js/mail-settings.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>  

</body>

</html>