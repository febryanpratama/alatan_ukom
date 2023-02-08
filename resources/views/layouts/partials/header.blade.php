<header class="header {{ Request::path() != '/' ? 'header-page' : '' }}">
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
                        <img src="{{ asset('') }}assets/img/logo.svg" class="img-fluid" alt="Logo" />
                    </a>
                </div>
                {{-- <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="index.html" class="menu-logo">
                            <img src="{{ asset('') }}assets/img/logo.svg" class="img-fluid" alt="Logo" />
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li class="active">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">Instructor <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="">
                                    <a href="instructor-dashboard.html">Dashboard</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="instructor-list.html">Instructor</a>
                                    <ul class="submenu">
                                        <li class="">
                                            <a href="instructor-list.html">List</a>
                                        </li>
                                        <li class="">
                                            <a href="instructor-grid.html">Grid</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="instructor-course.html">My Course</a>
                                </li>
                                <li class="">
                                    <a href="instructor-reviews.html">Reviews</a>
                                </li>
                                <li class="">
                                    <a href="instructor-earnings.html">Earnings</a>
                                </li>
                                <li class="">
                                    <a href="instructor-orders.html">Orders</a>
                                </li>
                                <li class="">
                                    <a href="instructor-payouts.html">Payouts</a>
                                </li>
                                <li class="">
                                    <a href="instructor-tickets.html">Support Ticket</a>
                                </li>
                                <li class="">
                                    <a href="instructor-edit-profile.html">Instructor Profile</a>
                                </li>
                                <li class="">
                                    <a href="instructor-security.html">Security</a>
                                </li>
                                <li class="">
                                    <a href="instructor-social-profiles.html">Social Profiles</a>
                                </li>
                                <li class="">
                                    <a href="instructor-notification.html">Notifications</a>
                                </li>
                                <li class="">
                                    <a href="instructor-profile-privacy.html">Profile Privacy</a>
                                </li>
                                <li class="">
                                    <a href="instructor-delete-profile.html">Delete Profile</a>
                                </li>
                                <li class="">
                                    <a href="instructor-linked-account.html">Linked Accounts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#">Student <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu first-submenu">
                                <li class="has-submenu">
                                    <a href="students-list.html">Student</a>
                                    <ul class="submenu">
                                        <li class="">
                                            <a href="students-list.html">List</a>
                                        </li>
                                        <li class="">
                                            <a href="students-grid.html">Grid</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="setting-edit-profile.html">Student Profile</a>
                                </li>
                                <li class="">
                                    <a href="setting-student-security.html">Security</a>
                                </li>
                                <li class="">
                                    <a href="setting-student-social-profile.html">Social profile</a>
                                </li>
                                <li class="">
                                    <a href="setting-student-notification.html">Notification</a>
                                </li>
                                <li class="">
                                    <a href="setting-student-privacy.html">Profile Privacy</a>
                                </li>
                                <li class="">
                                    <a href="setting-student-accounts.html">Link Accounts</a>
                                </li>
                                <li class="">
                                    <a href="setting-student-referral.html">Referal</a>
                                </li>
                                <li class="">
                                    <a href="setting-student-subscription.html">Subscribtion</a>
                                </li>
                                <li class="">
                                    <a href="setting-student-billing.html">Billing</a>
                                </li>
                                <li class="">
                                    <a href="setting-student-payment.html">Payment</a>
                                </li>
                                <li class="">
                                    <a href="setting-student-invoice.html">Invoice</a>
                                </li>
                                <li class="">
                                    <a href="setting-support-tickets.html">Support Tickets</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="">
                                    <a href="notifications.html">Notification</a>
                                </li>
                                <li class="">
                                    <a href="pricing-plan.html">Pricing Plan</a>
                                </li>
                                <li class=""><a href="wishlist.html">Wishlist</a></li>
                                <li class="has-submenu">
                                    <a href="course-list.html">Course</a>
                                    <ul class="submenu">
                                        <li class="">
                                            <a href="add-course.html">Add Course</a>
                                        </li>
                                        <li class="">
                                            <a href="course-list.html">Course List</a>
                                        </li>
                                        <li class="">
                                            <a href="course-grid.html">Course Grid</a>
                                        </li>
                                        <li class="">
                                            <a href="course-details.html">Course Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="come-soon.html">Error</a>
                                    <ul class="submenu">
                                        <li class="">
                                            <a href="come-soon.html">Comeing soon</a>
                                        </li>
                                        <li class=""><a href="error-404.html">404</a></li>
                                        <li class=""><a href="error-500.html">500</a></li>
                                        <li class="">
                                            <a href="under-construction.html">Under Construction</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="help-center.html">Help Center</a>
                                </li>
                                <li class=""><a href="faq.html">FAQ</a></li>
                                <li class=""><a href="support.html">Support</a></li>
                                <li class="">
                                    <a href="term-condition.html">Terms & Conditions</a>
                                </li>
                                <li class="">
                                    <a href="privacy-policy.html">Privacy Policy</a>
                                </li>
                                <li class=""><a href="job-category.html">Category</a></li>
                                <li class=""><a href="cart.html">Cart</a></li>
                                <li class=""><a href="checkout.html">Checkout</a></li>
                                <li class=""><a href="login.html">Login</a></li>
                                <li class=""><a href="register.html">Register</a></li>
                                <li class="">
                                    <a href="forgot-password.html">Forgot Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class=""><a href="blog-list.html">Blog List</a></li>
                                <li class=""><a href="blog-grid.html">Blog Grid</a></li>
                                <li class="">
                                    <a href="blog-masonry.html">Blog Masonry</a>
                                </li>
                                <li class="">
                                    <a href="blog-modern.html">Blog Modern</a>
                                </li>
                                <li class="">
                                    <a href="blog-details.html">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="login-link">
                            <a href="login.html">Login / Signup</a>
                        </li>
                    </ul>
                </div> --}}
                <ul class="nav header-navbar-rht">
                    <li class="nav-item">
                        <a class="nav-link header-sign" href="{{ url('/login') }}">Signin</a>
                    </li>
                    @if (Auth::user())
                        <li class="nav-item">
                            <a class="nav-link header-login" href="register.html">Dashboard</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>

{{-- {{ dd(url()->current() != '' ? 'false' : 'true') }} --}}