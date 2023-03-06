<div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
    <div class="settings-widget dash-profile">
        <div class="settings-menu p-0">
            <div class="profile-bg">
                <h5>Beginner</h5>
                <img src="{{ asset('') }}assets/img/instructor-profile-bg.jpg" alt="">
                <div class="profile-img">
                    <a href="instructor-profile.html"><img src="{{ asset('images/'.Auth::user()->foto) }}"
                            alt=""></a>
                </div>
            </div>
            <div class="profile-group">
                <div class="profile-name text-center">
                    <h4><a href="instructor-profile.html">{{ auth()->user()->name }}</a></h4>
                    <p>{{ Auth::user()->roles->pluck('name')[0] }}</p>
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
                {{-- <li class="nav-item">
                    <a class="" href="instructor-payouts.html" class="nav-link">
                        <i class="feather-dollar-sign"></i> Payouts
                    </a>
                </li> --}}
                @hasrole('Admin')
                <li class="nav-item">
                    <a class="" href="{{ url('admin/list-ujian') }}" class="nav-link">
                        <i class="feather-server"></i> List Ujian Peserta
                    </a>
                </li>
                @endrole
                
                @hasrole('PPK|Pokja')
                <li class="nav-item">
                    <a class="" href="{{ url('user/ticket') }}" class="nav-link">
                        <i class="feather-server"></i> Ticket
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="" href="{{ url('user/dokumen-ujian') }}" class="nav-link">
                        <i class="feather-server"></i> Data Ujian
                    </a>
                </li> --}}
                @endrole
            </ul>
            <div class="instructor-title">
                <h3>ACCOUNT SETTINGS</h3>
            </div>
            <ul>
                <li class="nav-item">
                    <a class="" href="{{ url('admin/peserta') }}" class="nav-link">
                        <i class="feather-users"></i> Peserta Ujian
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="instructor-edit-profile.html" class="nav-link ">
                        <i class="feather-settings"></i> Edit Profile
                    </a>
                </li>
                {{-- <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')" class=""
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form> --}}
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="submit" class="nav-link btn">
                            <i class="feather-power"></i> Sign Out
                        </button>
                        {{-- <a class="" href="index.html" class="nav-link">
                        </a> --}}
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>