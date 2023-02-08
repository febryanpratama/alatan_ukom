<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamslms.dreamguystech.com/laravel/public/instructor-dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 16:59:31 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dreams LMS</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('') }}assets/img/favicon.svg">

    <link rel="stylesheet" href="{{ asset('') }}assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/css/feather.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/slick/slick-theme.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/dropzone/dropzone.min.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/aos/aos.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

        <header class="header header-page">
            <div class="header-fixed">
                <nav class="navbar navbar-expand-lg header-nav scroll-sticky">
                    <div class="container">
                        <div class="navbar-header">
                            <a id="mobile_btn" href="javascript:void(0);">
                                <span class="bar-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                            <a href="index.html" class="navbar-brand logo">
                                <img src="{{ asset('') }}assets/img/logo.svg" class="img-fluid" alt="Logo">
                            </a>
                        </div>
                        <div class="main-menu-wrapper">
                            <div class="menu-header">
                                <a href="index.html" class="menu-logo">
                                    <img src="{{ asset('') }}assets/img/logo.svg" class="img-fluid" alt="Logo">
                                </a>
                                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                            <ul class="main-nav">
                                <li class="">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="has-submenu active">
                                    <a href="#">Instructor <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li class="active"><a href="instructor-dashboard.html">Dashboard</a></li>
                                        <li class="has-submenu ">
                                            <a href="instructor-list.html">Instructor</a>
                                            <ul class="submenu">
                                                <li class=""><a href="instructor-list.html">List</a></li>
                                                <li class=""><a href="instructor-grid.html">Grid</a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="instructor-course.html">My Course</a></li>
                                        <li class=""><a href="instructor-reviews.html">Reviews</a></li>
                                        <li class=""><a href="instructor-earnings.html">Earnings</a></li>
                                        <li class=""><a href="instructor-orders.html">Orders</a></li>
                                        <li class=""><a href="instructor-payouts.html">Payouts</a></li>
                                        <li class=""><a href="instructor-tickets.html">Support Ticket</a></li>
                                        <li class=""><a href="instructor-edit-profile.html">Instructor Profile</a></li>
                                        <li class=""><a href="instructor-security.html">Security</a></li>
                                        <li class=""><a href="instructor-social-profiles.html">Social Profiles</a></li>
                                        <li class=""><a href="instructor-notification.html">Notifications</a></li>
                                        <li class=""><a href="instructor-profile-privacy.html">Profile Privacy</a></li>
                                        <li class=""><a href="instructor-delete-profile.html">Delete Profile</a></li>
                                        <li class=""><a href="instructor-linked-account.html">Linked Accounts</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu ">
                                    <a href="#">Student <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu first-submenu">
                                        <li class="has-submenu ">
                                            <a href="students-list.html">Student</a>
                                            <ul class="submenu">
                                                <li class=""><a href="students-list.html">List</a></li>
                                                <li class=""><a href="students-grid.html">Grid</a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="setting-edit-profile.html">Student Profile</a></li>
                                        <li class=""><a href="setting-student-security.html">Security</a></li>
                                        <li class=""><a href="setting-student-social-profile.html">Social profile</a>
                                        </li>
                                        <li class=""><a href="setting-student-notification.html">Notification</a></li>
                                        <li class=""><a href="setting-student-privacy.html">Profile Privacy</a></li>
                                        <li class=""><a href="setting-student-accounts.html">Link Accounts</a></li>
                                        <li class=""><a href="setting-student-referral.html">Referal</a></li>
                                        <li class=""><a href="setting-student-subscription.html">Subscribtion</a></li>
                                        <li class=""><a href="setting-student-billing.html">Billing</a></li>
                                        <li class=""><a href="setting-student-payment.html">Payment</a></li>
                                        <li class=""><a href="setting-student-invoice.html">Invoice</a></li>
                                        <li class=""><a href="setting-support-tickets.html">Support Tickets</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu ">
                                    <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li class=""><a href="notifications.html">Notification</a></li>
                                        <li class=""><a href="pricing-plan.html">Pricing Plan</a></li>
                                        <li class=""><a href="wishlist.html">Wishlist</a></li>
                                        <li class="has-submenu ">
                                            <a href="course-list.html">Course</a>
                                            <ul class="submenu">
                                                <li class=""><a href="add-course.html">Add Course</a></li>
                                                <li class=""><a href="course-list.html">Course List</a></li>
                                                <li class=""><a href="course-grid.html">Course Grid</a></li>
                                                <li class=""><a href="course-details.html">Course Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu ">
                                            <a href="come-soon.html">Error</a>
                                            <ul class="submenu">
                                                <li class=""><a href="come-soon.html">Comeing soon</a></li>
                                                <li class=""><a href="error-404.html">404</a></li>
                                                <li class=""><a href="error-500.html">500</a></li>
                                                <li class=""><a href="under-construction.html">Under Construction</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="help-center.html">Help Center</a></li>
                                        <li class=""><a href="faq.html">FAQ</a></li>
                                        <li class=""><a href="support.html">Support</a></li>
                                        <li class=""><a href="term-condition.html">Terms & Conditions</a></li>
                                        <li class=""><a href="privacy-policy.html">Privacy Policy</a></li>
                                        <li class=""><a href="job-category.html">Category</a></li>
                                        <li class=""><a href="cart.html">Cart</a></li>
                                        <li class=""><a href="checkout.html">Checkout</a></li>
                                        <li class=""><a href="login.html">Login</a></li>
                                        <li class=""><a href="register.html">Register</a></li>
                                        <li class=""><a href="forgot-password.html">Forgot Password</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu ">
                                    <a href="#">Blog <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li class=""><a href="blog-list.html">Blog List</a></li>
                                        <li class=""><a href="blog-grid.html">Blog Grid</a></li>
                                        <li class=""><a href="blog-masonry.html">Blog Masonry</a></li>
                                        <li class=""><a href="blog-modern.html">Blog Modern</a></li>
                                        <li class=""><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="login-link">
                                    <a href="login.html">Login / Signup</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="nav header-navbar-rht">
                            <li class="nav-item">
                                <a href="instructor-chat.html"><img src="{{ asset('') }}assets/img/icon/messages.svg" alt="img"></a>
                            </li>
                            <li class="nav-item cart-nav">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <img src="{{ asset('') }}assets/img/icon/cart.svg" alt="img">
                                </a>
                                <div class="wishes-list dropdown-menu dropdown-menu-right">
                                    <div class="wish-header">
                                        <a href="#">View Cart</a>
                                        <a href="javascript:void(0)" class="float-end">Checkout</a>
                                    </div>
                                    <div class="wish-content">
                                        <ul>
                                            <li>
                                                <div class="media">
                                                    <div class="d-flex media-wide">
                                                        <div class="avatar">
                                                            <a href="course-details.html">
                                                                <img alt="" src="{{ asset('') }}assets/img/course/course-04.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6><a href="course-details.html">Learn Angular...</a></h6>
                                                            <p>By Dave Franco</p>
                                                            <h5>$200 <span>$99.00</span></h5>
                                                        </div>
                                                    </div>
                                                    <div class="remove-btn">
                                                        <a href="#" class="btn">Remove</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="d-flex media-wide">
                                                        <div class="avatar">
                                                            <a href="course-details.html">
                                                                <img alt="" src="{{ asset('') }}assets/img/course/course-14.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6><a href="course-details.html">Build Responsive
                                                                    Real...</a></h6>
                                                            <p>Jenis R.</p>
                                                            <h5>$200 <span>$99.00</span></h5>
                                                        </div>
                                                    </div>
                                                    <div class="remove-btn">
                                                        <a href="#" class="btn">Remove</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="d-flex media-wide">
                                                        <div class="avatar">
                                                            <a href="course-details.html">
                                                                <img alt="" src="{{ asset('') }}assets/img/course/course-15.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6><a href="course-details.html">C# Developers Double
                                                                    ...</a></h6>
                                                            <p>Jesse Stevens</p>
                                                            <h5>$200 <span>$99.00</span></h5>
                                                        </div>
                                                    </div>
                                                    <div class="remove-btn">
                                                        <a href="#" class="btn">Remove</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="total-item">
                                            <h6>Subtotal : $ 600</h6>
                                            <h5>Total : $ 600</h5>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item wish-nav">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <img src="{{ asset('') }}assets/img/icon/wish.svg" alt="img">
                                </a>
                                <div class="wishes-list dropdown-menu dropdown-menu-right">
                                    <div class="wish-content">
                                        <ul>
                                            <li>
                                                <div class="media">
                                                    <div class="d-flex media-wide">
                                                        <div class="avatar">
                                                            <a href="course-details.html">
                                                                <img alt="" src="{{ asset('') }}assets/img/course/course-04.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6><a href="course-details.html">Learn Angular...</a></h6>
                                                            <p>By Dave Franco</p>
                                                            <h5>$200 <span>$99.00</span></h5>
                                                            <div class="remove-btn">
                                                                <a href="#" class="btn">Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="d-flex media-wide">
                                                        <div class="avatar">
                                                            <a href="course-details.html">
                                                                <img alt="" src="{{ asset('') }}assets/img/course/course-14.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6><a href="course-details.html">Build Responsive
                                                                    Real...</a></h6>
                                                            <p>Jenis R.</p>
                                                            <h5>$200 <span>$99.00</span></h5>
                                                            <div class="remove-btn">
                                                                <a href="#" class="btn">Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="d-flex media-wide">
                                                        <div class="avatar">
                                                            <a href="course-details.html">
                                                                <img alt="" src="{{ asset('') }}assets/img/course/course-15.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6><a href="course-details.html">C# Developers Double
                                                                    ...</a></h6>
                                                            <p>Jesse Stevens</p>
                                                            <h5>$200 <span>$99.00</span></h5>
                                                            <div class="remove-btn">
                                                                <a href="#" class="btn">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item noti-nav">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <img src="{{ asset('') }}assets/img/icon/notification.svg" alt="img">
                                </a>
                                <div class="notifications dropdown-menu dropdown-menu-right">
                                    <div class="topnav-dropdown-header">
                                        <span class="notification-title">Notifications
                                            <select>
                                                <option>All</option>
                                                <option>Unread</option>
                                            </select>
                                        </span>
                                        <a href="javascript:void(0)" class="clear-noti">Mark all as read <i
                                                class="fa-solid fa-circle-check"></i></a>
                                    </div>
                                    <div class="noti-content">
                                        <ul class="notification-list">
                                            <li class="notification-message">
                                                <div class="media d-flex">
                                                    <div>
                                                        <a href="notifications.html" class="avatar">
                                                            <img class="avatar-img" alt=""
                                                                src="{{ asset('') }}assets/img/user/user1.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6><a href="notifications.html">Lex Murphy requested
                                                                <span>access to</span> UNIX directory tree hierarchy
                                                            </a></h6>
                                                        <button class="btn btn-accept">Accept</button>
                                                        <button class="btn btn-reject">Reject</button>
                                                        <p>Today at 9:42 AM</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="notification-message">
                                                <div class="media d-flex">
                                                    <div>
                                                        <a href="notifications.html" class="avatar">
                                                            <img class="avatar-img" alt=""
                                                                src="{{ asset('') }}assets/img/user/user2.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6><a href="notifications.html">Ray Arnold left 6
                                                                <span>comments on</span> Isla Nublar SOC2 compliance
                                                                report</a></h6>
                                                        <p>Yesterday at 11:42 PM</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="notification-message">
                                                <div class="media d-flex">
                                                    <div>
                                                        <a href="notifications.html" class="avatar">
                                                            <img class="avatar-img" alt=""
                                                                src="{{ asset('') }}assets/img/user/user3.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6><a href="notifications.html">Dennis Nedry <span>commented
                                                                    on</span> Isla Nublar SOC2 compliance report</a>
                                                        </h6>
                                                        <p class="noti-details">“Oh, I finished de-bugging the phones,
                                                            but the system's compiling for eighteen minutes, or twenty.
                                                            So, some minor systems may go on and off for a while.”</p>
                                                        <p>Yesterday at 5:42 PM</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="notification-message">
                                                <div class="media d-flex">
                                                    <div>
                                                        <a href="notifications.html" class="avatar">
                                                            <img class="avatar-img" alt=""
                                                                src="{{ asset('') }}assets/img/user/user1.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6><a href="notifications.html">John Hammond
                                                                <span>created</span> Isla Nublar SOC2 compliance report
                                                            </a></h6>
                                                        <p>Last Wednesday at 11:15 AM</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item user-nav">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <span class="user-img">
                                        <img src="{{ asset('') }}assets/img/instructor/profile-avatar.jpg" alt="">
                                        <span class="status online"></span>
                                    </span>
                                </a>
                                <div class="users dropdown-menu dropdown-menu-right" data-popper-placement="bottom-end">
                                    <div class="user-header">
                                        <div class="avatar avatar-sm">
                                            <img src="{{ asset('') }}assets/img/instructor/profile-avatar.jpg" alt="User Image"
                                                class="avatar-img rounded-circle">
                                        </div>
                                        <div class="user-text">
                                            <h6>Jenny Wilson</h6>
                                            <p class="text-muted mb-0">Instructor</p>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="instructor-dashboard.html"><i
                                            class="feather-home me-1"></i> Dashboard</a>
                                    <a class="dropdown-item" href="instructor-edit-profile.html"><i
                                            class="feather-star me-1"></i> Edit Profile</a>
                                    <div class="dropdown-item night-mode">
                                        <span><i class="feather-moon me-1"></i> Night Mode </span>
                                        <div class="form-check form-switch check-on m-0">
                                            <input class="form-check-input" type="checkbox" id="night-mode">
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="index.html"><i class="feather-log-out me-1"></i>
                                        Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>


        <div class="page-content instructor-page-content">
            <div class="container">
                <div class="row">

                    <div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
                        <div class="settings-widget dash-profile">
                            <div class="settings-menu p-0">
                                <div class="profile-bg">
                                    <h5>Beginner</h5>
                                    <img src="{{ asset('') }}assets/img/instructor-profile-bg.jpg" alt="">
                                    <div class="profile-img">
                                        <a href="instructor-profile.html"><img src="{{ asset('') }}assets/img/user/user15.jpg"
                                                alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-group">
                                    <div class="profile-name text-center">
                                        <h4><a href="instructor-profile.html">Jenny Wilson</a></h4>
                                        <p>Instructor</p>
                                    </div>
                                    <div class="go-dashboard text-center">
                                        <a href="add-course.html" class="btn btn-primary">Create New Course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="settings-widget account-settings">
                            <div class="settings-menu">
                                <h3>DASHBOARD</h3>
                                <ul>
                                    <li class="nav-item ">
                                        <a class="active" href="instructor-dashboard.html" class="nav-link">
                                            <i class="feather-home"></i> My Dashboard
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="instructor-course.html" class="nav-link">
                                            <i class="feather-book"></i> My Courses
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="instructor-reviews.html" class="nav-link">
                                            <i class="feather-star"></i> Reviews
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="instructor-earnings.html" class="nav-link">
                                            <i class="feather-pie-chart"></i> Earnings
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="instructor-orders.html" class="nav-link">
                                            <i class="feather-shopping-bag"></i> Orders
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="instructor-student-grid.html" class="nav-link">
                                            <i class="feather-users"></i> Students
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="instructor-payouts.html" class="nav-link">
                                            <i class="feather-dollar-sign"></i> Payouts
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="instructor-tickets.html" class="nav-link">
                                            <i class="feather-server"></i> Support Tickets
                                        </a>
                                    </li>
                                </ul>
                                <div class="instructor-title">
                                    <h3>ACCOUNT SETTINGS</h3>
                                </div>
                                <ul>
                                    <li class="nav-item">
                                        <a class="" href="instructor-edit-profile.html" class="nav-link ">
                                            <i class="feather-settings"></i> Edit Profile
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="instructor-security.html" class="nav-link">
                                            <i class="feather-user"></i> Security
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="instructor-social-profiles.html" class="nav-link">
                                            <i class="feather-refresh-cw"></i> Social Profiles
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="instructor-notification.html" class="nav-link">
                                            <i class="feather-bell"></i> Notifications
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="instructor-profile-privacy.html" class="nav-link">
                                            <i class="feather-lock"></i> Profile Privacy
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="instructor-delete-profile.html" class="nav-link">
                                            <i class="feather-trash-2"></i> Delete Profile
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="instructor-linked-account.html" class="nav-link">
                                            <i class="feather-user"></i> Linked Accounts
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="index.html" class="nav-link">
                                            <i class="feather-power"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-9 col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-md-4 d-flex">
                                <div class="card instructor-card w-100">
                                    <div class="card-body">
                                        <div class="instructor-inner">
                                            <h6>REVENUE</h6>
                                            <h4 class="instructor-text-success">$467.34</h4>
                                            <p>Earning this month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex">
                                <div class="card instructor-card w-100">
                                    <div class="card-body">
                                        <div class="instructor-inner">
                                            <h6>STUDENTS ENROLLMENTS</h6>
                                            <h4 class="instructor-text-info">12,000</h4>
                                            <p>New this month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex">
                                <div class="card instructor-card w-100">
                                    <div class="card-body">
                                        <div class="instructor-inner">
                                            <h6>COURSES RATING</h6>
                                            <h4 class="instructor-text-warning">4.80</h4>
                                            <p>Rating this month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card instructor-card">
                                    <div class="card-header">
                                        <h4>Earnings</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="instructor_chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card instructor-card">
                                    <div class="card-header">
                                        <h4>Order</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="order_chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="settings-widget">
                                    <div class="settings-inner-blk p-0">
                                        <div class="sell-course-head comman-space">
                                            <h3>Best Selling Courses</h3>
                                        </div>
                                        <div class="comman-space pb-0">
                                            <div class="settings-tickets-blk course-instruct-blk table-responsive">

                                                <table class="table table-nowrap mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>COURSES</th>
                                                            <th>SALES</th>
                                                            <th>AMOUNT</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="sell-table-group d-flex align-items-center">
                                                                    <div class="sell-group-img">
                                                                        <a href="course-details.html">
                                                                            <img src="{{ asset('') }}assets/img/course/course-10.jpg"
                                                                                class="img-fluid " alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="sell-tabel-info">
                                                                        </p>
                                                                        <p><a href="course-details.html">Information
                                                                                About UI/UX Design Degree</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>34</td>
                                                            <td>$3,145.23</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="sell-table-group d-flex align-items-center">
                                                                    <div class="sell-group-img">
                                                                        <a href="course-details.html">
                                                                            <img src="{{ asset('') }}assets/img/course/course-11.jpg"
                                                                                class="img-fluid " alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="sell-tabel-info">
                                                                        <p><a href="course-details.html">Wordpress for
                                                                                Beginners - Master Wordpress Quickly</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>34</td>
                                                            <td>$3,145.23</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="sell-table-group d-flex align-items-center">
                                                                    <div class="sell-group-img">
                                                                        <a href="course-details.html">
                                                                            <img src="{{ asset('') }}assets/img/course/course-12.jpg"
                                                                                class="img-fluid " alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="sell-tabel-info">
                                                                        <p><a href="course-details.html">Sketch from A
                                                                                to Z (2022): Become an app designer</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>34</td>
                                                            <td>$3,145.23</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <footer class="footer">

            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">

                            <div class="footer-widget footer-about">
                                <div class="footer-logo">
                                    <img src="{{ asset('') }}assets/img/logo.svg" alt="logo">
                                </div>
                                <div class="footer-about-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6">

                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">For Instructor</h2>
                                <ul>
                                    <li><a href="instructor-profile.html">Profile</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="instructor-list.html">Instructor</a></li>
                                    <li><a href="deposit-instructor-dashboard.html"> Dashboard</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6">

                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">For Student</h2>
                                <ul>
                                    <li><a href="student-profile.html">Profile</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="students-list.html">Student</a></li>
                                    <li><a href="deposit-student-dashboard.html"> Dashboard</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6">

                            <div class="footer-widget footer-contact">
                                <h2 class="footer-title">News letter</h2>
                                <div class="news-letter">
                                    <form>
                                        <input type="text" class="form-control" placeholder="Enter your email address"
                                            name="email">
                                    </form>
                                </div>
                                <div class="footer-contact-info">
                                    <div class="footer-address">
                                        <img src="{{ asset('') }}assets/img/icon/icon-20.svg" alt="" class="img-fluid">
                                        <p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
                                    </div>
                                    <p>
                                        <img src="{{ asset('') }}assets/img/icon/icon-19.svg" alt="" class="img-fluid">
                                        <a href="https://dreamslms.dreamguystech.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="96f2e4f3f7fbe5fafbe5d6f3eef7fbe6faf3b8f5f9fb">[email&#160;protected]</a>
                                    </p>
                                    <p class="mb-0">
                                        <img src="{{ asset('') }}assets/img/icon/icon-21.svg" alt="" class="img-fluid">
                                        +19 123-456-7890
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="footer-bottom">
                <div class="container">

                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="privacy-policy">
                                    <ul>
                                        <li><a href="term-condition.html">Terms</a></li>
                                        <li><a href="privacy-policy.html">Privacy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="copyright-text">
                                    <p class="mb-0">&copy; 2022 DreamsLMS. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </footer>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('') }}assets/plugins/jquery/jquery.min.js"></script>

    <script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <script src="{{ asset('') }}assets/js/ckeditor.js"></script>

    <script src="{{ asset('') }}assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

    <script src="{{ asset('') }}assets/plugins/countup/jquery.waypoints.min.js"></script>
    <script src="{{ asset('') }}assets/plugins/countup/jquery.counterup.min.js"></script>

    <script src="{{ asset('') }}assets/js/owl.carousel.min.js"></script>

    <script src="{{ asset('') }}assets/plugins/slick/slick.js"></script>

    <script src="{{ asset('') }}assets/plugins/feather/feather.min.js"></script>

    <script src="{{ asset('') }}assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="{{ asset('') }}assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <script src="{{ asset('') }}assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="{{ asset('') }}assets/plugins/apexchart/chart-data.js"></script>

    <script src="{{ asset('') }}assets/js/circle-progress.min.js"></script>

    <script src="{{ asset('') }}assets/plugins/dropzone/dropzone.min.js"></script>

    <script src="{{ asset('') }}assets/js/validation.js"></script>

    <script src="{{ asset('') }}assets/plugins/aos/aos.js"></script>

    <script src="{{ asset('') }}assets/js/script.js"></script>
</body>

<!-- Mirrored from dreamslms.dreamguystech.com/laravel/public/instructor-dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 16:59:41 GMT -->

</html>