 <div class="page-header-topbar">
        <nav id="topbar" role="navigation" class="navbar navbar-default container pln prn">
            <div class="container-fluid pln prn">
                <div id="topbar-menu" class="navbar-collapse pln prn">
                    <ul class="nav navbar-nav logo-wrapper">
                        <li class="btn-menu-toggle">
                            <div id="menu-toggle" class="show-collapsed"><i class="fa fa-bars"></i></div>
                        </li>
                        <li class="pull-left"><a id="logo" href="/" class="pan"><img
                                src="{{asset('admin_temp/assets/images/logo2.png')}}"/></a></li>

                    </ul>
                   
                    <ul class="nav navbar-nav navbar-right">
                       
                        <li class="dropdown"><a data-toggle="dropdown" href="#" class="dropdown-toggle"><i
                                class="icon-user"></i>&nbsp;<span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-user pull-right">
                                <li>
                                    <div class="navbar-content">
                                        <div class="row">
                                            <div class="col-md-5 col-xs-5"><img
                                                    src="{{asset('images')}}/{{ Auth::user()->images}}" alt=""
                                                    class="img-responsive img-circle"/>

                                                <p class="text-center mtm"><a href="#" class="change-avatar">
                                                    <small>Set Avatar</small>
                                                </a></p>
                                            </div>
                                            <div class="col-md-7 col-xs-5"><span> <?=  Auth::user()->name; ?></span>

                                                <p class="text-muted small"><?=Auth::user()->email; ?></p>

                                                <div class="divider"></div>
                                                <a href="profile">
                                                    <button href="" class="btn btn-default btn-sm">Edit Profile
                                                    </button>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="navbar-footer">
                                        <div class="navbar-footer-content">
                                            <div class="row">
                                                <div class="col-md-6 col-xs-6"><a href="password/reset">
                                                    <button class="btn btn-default btn-sm">{{-- Change Password --}}</button>
                                                </a></div>
                                                <div class="col-md-6 col-xs-6"><a href="logout">
                                                    <button href="logout"
                                                            class="btn btn-info btn-sm pull-right">Sign Out
                                                    </button>
                                                </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                     
                    </ul>
                </div>
            </div>
        </nav>
    </div>