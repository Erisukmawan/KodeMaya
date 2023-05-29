<!DOCTYPE html>
<!-- Template N

ame: DashCode - HTML, React, Vue, Tailwind Admin Dashboard Template Author: Codeshaper Website: https://codeshaper.net Contact: support@codeshaperbd.net Like: https://www.facebook.com/Codeshaperbd Purchase: https://themeforest.net/item/dashcode-admin-dashboard-template/42600453 License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project. -->
<html lang="zxx" dir="ltr" class="light">


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Dashcode - HTML Template</title>
    <link rel="icon" type="image/png" href="assets/images/logo/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="assets/css/rt-plugins.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <!-- End : Theme CSS-->
    <script src="assets/js/settings.js" sync></script>
</head>

<body class=" font-inter" id="body_class">
    <!-- [if IE]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif] -->
    <main class="app-wrapper">
        <!-- BEGIN: Sidebar -->
        <!-- BEGIN: Sidebar -->
        <div class="sidebar-wrapper group md:hidden block">
            <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>
            <div class="logo-segment">
                <a class="flex items-center" href="index.html">
                    <img src="assets/images/logo/favicon.svg" class="black_logo" alt="logo">
                    <img src="assets/images/logo/favicon.svg" class="white_logo" alt="logo">
                    <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">KodeMaya</span>
                </a>
                <!-- Sidebar Type Button -->
                <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
                    <span class="sidebarDotIcon extend-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
                        <div class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150 ring-2 ring-inset ring-offset-4 ring-black-900 dark:ring-slate-400 bg-slate-900 dark:bg-slate-400 dark:ring-offset-slate-700"></div>
                    </span>
                    <span class="sidebarDotIcon collapsed-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
                        <div class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150"></div>
                    </span>
                </div>
                <button class="sidebarCloseIcon text-2xl">
                    <iconify-icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line"></iconify-icon>
                </button>
            </div>
            <div id="nav_shadow" class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
      opacity-0"></div>
            <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] overflow-y-auto z-50" id="sidebar_menus">
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-title">MENU</li>
                    <li class="">
                        <a href="#" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
                                <span>D</span>
                            </span>
                        </a>
                    </li>
                    <!-- Apps Area -->
                    <li class="sidebar-menu-title">APPS</li>
                    <li>
                        <a href="chat.html" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class="nav-icon" icon="heroicons-outline:chat"></iconify-icon>
                                <span>Chat</span>
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="email.html" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="heroicons-outline:mail"></iconify-icon>
                                <span>Email</span>
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="kanban.html" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="heroicons-outline:view-boards"></iconify-icon>
                                <span>Kanban</span>
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="calander.html" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="heroicons-outline:calendar"></iconify-icon>
                                <span>Calander</span>
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="todo.html" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="heroicons-outline:clipboard-check"></iconify-icon>
                                <span>Todo</span>
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="javascript:void(0)" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="heroicons-outline:document"></iconify-icon>
                                <span>Projects</span>
                            </span>
                            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="project.html">Projects</a>
                            </li>
                            <li>
                                <a href="project-details.html">Project Details</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Pages Area -->
                    <li class="sidebar-menu-title">PAGES</li>
                    <!-- Authentication -->
                    <li class="">
                        <a href="javascript:void(0)" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="heroicons-outline:lock-closed"></iconify-icon>
                                <span>Authentication</span>
                            </span>
                            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="signin-one.html">Signin One</a>
                            </li>
                            <li>
                                <a href="signin-two.html">Signin Two</a>
                            </li>
                            <li>
                                <a href="signin-three.html">Signin Three</a>
                            </li>
                            <li>
                                <a href="signup-one.html">Signup One</a>
                            </li>
                            <li>
                                <a href="signup-two.html">Signup Two</a>
                            </li>
                            <li>
                                <a href="signup-three.html">Signup Three</a>
                            </li>
                            <li>
                                <a href="forget-password-one.html">Forget Password One</a>
                            </li>
                            <li>
                                <a href="forget-password-two.html">Forget Password Two</a>
                            </li>
                            <li>
                                <a href="forget-password-three.html">Forget Password Three</a>
                            </li>
                            <li>
                                <a href="lock-screen-one.html">Lock Screen One</a>
                            </li>
                            <li>
                                <a href="lock-screen-two.html">Lock Screen Two</a>
                            </li>
                            <li>
                                <a href="lock-screen-three.html">Lock Screen Three</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Utility -->
                    <li class="">
                        <a href="javascript:void(0)" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="heroicons-outline:view-boards"></iconify-icon>
                                <span>Utility</span>
                            </span>
                            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="blog.html">Blog</a>
                            </li>
                            <li>
                                <a href="blank-page.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="settings.html">Settings</a>
                            </li>
                            <li>
                                <a href="profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="404.html">404 Page</a>
                            </li>
                            <li>
                                <a href="comming-soon.html">Coming Soon</a>
                            </li>
                            <li>
                                <a href="under-maintanance.html">Under Maintanance</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Elements Area -->
                    <li class="sidebar-menu-title">ELEMENTS</li>
                    <!-- Widgets -->
                    <li class="">
                        <a href="javascript:void(0)" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="heroicons-outline:view-grid-add"></iconify-icon>
                                <span>Widgets</span>
                            </span>
                            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="basic-widgets.html">Basic</a>
                            </li>
                            <li>
                                <a href="statistics-widgets.html">Statistic</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Components -->
                    <li>
                        <a href="javascript:void(0)" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="heroicons-outline:collection"></iconify-icon>
                                <span>Components</span>
                            </span>
                            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="colors.html">Colors</a>
                            </li>
                            <li>
                                <a href="alert.html">Alert</a>
                            </li>
                            <li>
                                <a href="buttons.html">Button</a>
                            </li>
                            <li>
                                <a href="card.html">Card</a>
                            </li>
                            <li>
                                <a href="carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="dropdown.html">Dropdown</a>
                            </li>
                            <li>
                                <a href="image.html">Image</a>
                            </li>
                            <li>
                                <a href="modal.html">Modal</a>
                            </li>
                            <li>
                                <a href="progressbar.html">Progress bar</a>
                            </li>
                            <li>
                                <a href="placeholder.html">Placeholder</a>
                            </li>
                            <li>
                                <a href="tab-accordion.html">Tab & Accordion</a>
                            </li>
                            <li>
                                <a href="badges.html">Badges</a>
                            </li>
                            <li>
                                <a href="pagination.html">Pagination</a>
                            </li>
                            <li>
                                <a href="video.html">Video</a>
                            </li>
                            <li>
                                <a href="tooltip-popover.html">Tooltip & Popover</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Forms -->
                    <li class="">
                        <a href="javascript:void(0)" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="heroicons-outline:clipboard-list"></iconify-icon>
                                <span>Forms</span>
                            </span>
                            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="input.html">Input</a>
                            </li>
                            <li>
                                <a href="input-group.html">Input group</a>
                            </li>
                            <li>
                                <a href="input-layout.html">Input layout</a>
                            </li>
                            <li>
                                <a href="form-validation.html">Form validation</a>
                            </li>
                            <li>
                                <a href="wizard.html">Wizard</a>
                            </li>
                            <li>
                                <a href="input-mask.html">Input mask</a>
                            </li>
                            <li>
                                <a href="file-input.html">File input</a>
                            </li>
                            <li>
                                <a href="form-repeater.html">Form repeater</a>
                            </li>
                            <li>
                                <a href="textarea.html">Textarea</a>
                            </li>
                            <li>
                                <a href="checkbox.html">Checkbox</a>
                            </li>
                            <li>
                                <a href="radio.html">Radio button</a>
                            </li>
                            <li>
                                <a href="switch.html">Switch</a>
                            </li>
                            <li>
                                <a href="select.html">Select</a>
                            </li>
                            <li>
                                <a href="date-picker.html">Date time picker</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Tables -->
                    <li class="">
                        <a href="javascript:void(0)" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="heroicons-outline:table"></iconify-icon>
                                <span>Tables</span>
                            </span>
                            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="basic-table.html">Basic table</a>
                            </li>
                            <li>
                                <a href="advance-table.html">Advanced table</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Charts -->
                    <li class="">
                        <a href="javascript:void(0)" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="heroicons-outline:chart-bar"></iconify-icon>
                                <span>Chart</span>
                            </span>
                            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="apex-chart.html">Apex chart</a>
                            </li>
                            <li>
                                <a href="chartjs.html">Chart js</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Map -->
                    <li class="">
                        <a href="map.html" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="heroicons-outline:map"></iconify-icon>
                                <span>Map</span>
                            </span>
                        </a>
                    </li>
                    <!-- Icons -->
                    <li class="">
                        <a href="icons.html" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="heroicons-outline:emoji-happy"></iconify-icon>
                                <span>Icons</span>
                            </span>
                        </a>
                    </li>
                </ul>
                <!-- Upgrade Your Business Plan Card Start -->
                <div class="bg-slate-900 mb-10 mt-24 p-4 relative text-center rounded-2xl text-white" id="sidebar_bottom_wizard">
                    <img src="assets/images/svg/rabit.svg" alt="" class="mx-auto relative -mt-[73px]">
                    <div class="max-w-[160px] mx-auto mt-6">
                        <div class="widget-title font-Inter mb-1">Unlimited Access</div>
                        <div class="text-xs font-light font-Inter">
                            Upgrade your system to business plan
                        </div>
                    </div>
                    <div class="mt-6">
                        <button class="bg-white hover:bg-opacity-80 text-slate-900 text-sm font-Inter rounded-md w-full block py-2 font-medium">
                            Upgrade
                        </button>
                    </div>
                </div>
                <!-- Upgrade Your Business Plan Card Start -->
            </div>
        </div>
        <!-- End: Sidebar -->
        <!-- End: Sidebar -->
        <div class="flex flex-col justify-between min-h-screen">
            <div>
                <!-- BEGIN: Header -->
                <!-- BEGIN: Header -->
                <div class="z-[9]" id="app_header">
                    <div class="app-header z-[999] ltr:ml-[248px] rtl:mr-[248px] bg-white dark:bg-slate-800 shadow-sm dark:shadow-slate-700">
                        <div class="flex justify-between items-center h-full">
                            <div class="flex items-center md:space-x-4 space-x-2 xl:space-x-0 rtl:space-x-reverse vertical-box">
                                <a href="index.html" class="mobile-logo xl:hidden inline-block">
                                    <img src="assets/images/logo/favicon.svg" class="black_logo" alt="logo">
                                    <img src="assets/images/logo/favicon.svg" class="white_logo" alt="logo">
                                </a>
                                <button class="smallDeviceMenuController hidden md:inline-block xl:hidden">
                                    <iconify-icon class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white" icon="heroicons-outline:menu-alt-3"></iconify-icon>
                                </button>

                            </div>
                            <!-- end vertcial -->
                            <div class="items-center space-x-4 rtl:space-x-reverse horizental-box">
                                <a href="index.html">
                                    <span class="xl:inline-block hidden">
                                        <img src="assets/images/logo/logo.svg" class="black_logo " alt="logo">
                                        <img src="assets/images/logo/logo.svg" class="white_logo" alt="logo">
                                    </span>
                                    <span class="xl:hidden inline-block">
                                        <img src="assets/images/logo/favicon.svg" class="black_logo " alt="logo">
                                        <img src="assets/images/logo/favicon.svg" class="white_logo " alt="logo">
                                    </span>
                                </a>
                                <button class="smallDeviceMenuController  open-sdiebar-controller xl:hidden inline-block">
                                    <iconify-icon class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white" icon="heroicons-outline:menu-alt-3"></iconify-icon>
                                </button>

                            </div>
                            <!-- end horizental -->



                            <div class="main-menu">
                                <ul>

                                    <li class="
             menu-item-has-children 
              ">
                                        <!--  Single menu -->

                                        <!-- has dropdown -->



                                        <a href="javascript:void()">
                                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                                <span class="icon-box">
                                                    <iconify-icon icon=heroicons-outline:home> </iconify-icon>
                                                </span>
                                                <div class="text-box">Home</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children ">
                                        <a href="javascript:void()">
                                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                                <span class="icon-box">
                                                    <iconify-icon icon=heroicons-outline:chip> </iconify-icon>
                                                </span>
                                                <div class="text-box">Fitur</div>
                                            </div>
                                            <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                                                <iconify-icon icon="heroicons-outline:chevron-down"> </iconify-icon>
                                            </div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href=chat.html>
                                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:chat class="leading-[1] text-base"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Chat
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>



                                            <li>
                                                <a href=email.html>
                                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:mail class="leading-[1] text-base"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Email
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>



                                            <li>
                                                <a href=calender>
                                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:calendar class="leading-[1] text-base"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Calendar
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>



                                            <li>
                                                <a href=kanban>
                                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:view-boards class="leading-[1] text-base"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Kanban
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>



                                            <li>
                                                <a href=todo>
                                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:clipboard-check class="leading-[1] text-base"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Todo
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>



                                            <li>
                                                <a href=projects>
                                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:document class="leading-[1] text-base"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Projects
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>

                                        <!-- Megamenu -->


                                    </li>
                                    <li class=" menu-item-has-children">
                                        <a href="javascript:void()">
                                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                                <span class="icon-box">
                                                    <iconify-icon icon=heroicons-outline:view-grid-add> </iconify-icon>
                                                </span>
                                                <div class="text-box">Harga</div>
                                            </div>
                                            <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                                                <iconify-icon icon="heroicons-outline:chevron-down"> </iconify-icon>
                                            </div>
                                        </a>

                                        <!-- Dropdown menu -->



                                        <ul class="sub-menu">



                                            <li>
                                                <a href=basic-widgets.html>
                                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:document-text class="leading-[1] text-base"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Basic
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>



                                            <li>
                                                <a href=statistics-widgets.html>
                                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:document-text class="leading-[1] text-base"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Statistic
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>

                                        <!-- Megamenu -->


                                    </li>

                                    <li class="
             menu-item-has-children 
              ">
                                        <!--  Single menu -->

                                        <!-- has dropdown -->



                                        <a href="javascript:void()">
                                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                                <span class="icon-box">
                                                    <iconify-icon icon=heroicons-outline:template> </iconify-icon>
                                                </span>
                                                <div class="text-box">Extra</div>
                                            </div>
                                            <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                                                <iconify-icon icon="heroicons-outline:chevron-down"> </iconify-icon>
                                            </div>
                                        </a>

                                        <!-- Dropdown menu -->



                                        <ul class="sub-menu">



                                            <li>
                                                <a href=basic-table.html>
                                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:table class="leading-[1] text-base"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Basic Table
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>



                                            <li>
                                                <a href=advance-table.html>
                                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:table class="leading-[1] text-base"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Advanced table
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>



                                            <li>
                                                <a href=apex-chart.html>
                                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:chart-bar class="leading-[1] text-base"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Apex chart
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>



                                            <li>
                                                <a href=chartjs.html>
                                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:chart-bar class="leading-[1] text-base"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Chart js
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>



                                            <li>
                                                <a href=map.html>
                                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:map class="leading-[1] text-base"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Map
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>

                                        <!-- Megamenu -->


                                    </li>

                                </ul>
                            </div>
                            <!-- end top menu -->
                            <div class="nav-tools flex items-center lg:space-x-5 space-x-3 rtl:space-x-reverse leading-0">

                                <!-- BEGIN: Toggle Theme -->
                                <div>
                                    <button id="themeMood" class="h-[28px] w-[28px] lg:h-[32px] lg:w-[32px] lg:bg-gray-500 bg-slate-50 dark:bg-slate-900 lg:dark:bg-slate-900 dark:text-white text-slate-100 cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center">
                                    <span class="flex items-center">    
                                        <iconify-icon class="text-slate-800 dark:text-white text-xl dark:block hidden" id="moonIcon" icon="line-md:sunny-outline-to-moon-alt-loop-transition"></iconify-icon>
                                        <iconify-icon class="text-slate-800 dark:text-white text-xl dark:hidden block" id="sunIcon" icon="line-md:moon-filled-to-sunny-filled-loop-transition"></iconify-icon>
                                    </span>
                                    </button>
                                </div>
                                <div>
                                    <button class="btn inline-flex btn-sm justify-center btn-primary ">
                                        <span class="flex items-center">
                                            <iconify-icon class="text-sm dark:text-white ltr:mr-2 rtl:ml-2" icon="mdi:register-outline"></iconify-icon>
                                            <span>Daftar</span>
                                        </span>
                                    </button>
                                    <button class="btn inline-flex btn-sm justify-center btn-outline-primary ">
                                        <span class="flex items-center">
                                            <iconify-icon class="text-sm dark:text-white ltr:mr-2 rtl:ml-2" icon="heroicons-outline:login"></iconify-icon>
                                            <span class="dark:text-white" >Masuk</span>
                                        </span>
                                    </button>
                                </div>
                                <!-- END: TOggle Theme -->
                                <!-- END: Header -->
                                <button class="smallDeviceMenuController md:hidden block leading-0">
                                    <iconify-icon class="cursor-pointer text-slate-900 dark:text-white text-2xl" icon="heroicons-outline:menu-alt-3"></iconify-icon>
                                </button>
                                <!-- end mobile menu -->
                            </div>
                            <!-- end nav tools -->
                        </div>
                    </div>
                </div>
    </div>
    </main>
                <!-- END: Header -->
                <!-- END: Header -->
                @yield('content')
                @include('landingpage.footer')