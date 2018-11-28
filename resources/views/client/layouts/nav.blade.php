<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!-- User -->
        @guest
        <div class="user-box">
            <h4 class="">
                <a href="login" class="waves-effect btn btn-secondary"><i class="mdi mdi-login-variant"></i><span> Login </span></a>
                <a href="register" class="waves-effect btn btn-danger"><i class="mdi mdi-account-plus"></i><span> Register </span></a>
            </h4>
        </div>            
        @else
        <div class="user-box">
            <div class="user-img">
                <img src="{{ asset('images/avatar-1.jpg')}}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail img-responsive">
                <div class="user-status offline"><i class="mdi mdi-adjust"></i></div>
            </div>
            <h5><a href="profile/{{Auth::user()->name}}">{{Auth::user()->name}}</a> </h5>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="account/{{Auth::user()->name}}" >
                        <i class="mdi mdi-settings"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <form action="{{ route('logout') }}" method="POST" style="">
                        @csrf
                        <button type="submit" class="btn-light btn btn-waves">
                            <i class="mdi mdi-power"></i>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        @endguest
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Navigation</li>

                <li>
                    <a href="" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Home </span> </a>
                </li>

                <li>
                    <a href="offers" class="waves-effect"><i class="mdi mdi-format-font"></i> <span> Offers </span> </a>
                </li>

                <li>
                    <a href="orders/create" class="waves-effect"><i class="mdi mdi-calendar"></i><span> New Order </span></a>
                </li>

                <li>
                    <a href="orders" class="waves-effect"><i class="mdi mdi-calendar"></i><span> My orders </span></a>
                </li>

                <li>
                    <a href="notification" class="waves-effect"><i class="mdi mdi-email"></i><span class="badge badge-purple pull-right">New</span><span> Notification </span></a>
                </li>

                <li>
                    <a href="contact-us" class="waves-effect"><i class="mdi mdi-email"></i><span> Contact us </span></a>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->