<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <div class="top-left-part"><a class="logo" href="index.html">
                    <b>
                        <!--This is dark logo icon-->
                        <img src="plugins/images/eliteadmin-logo.png" alt="home" class="dark-logo" />
                    </b>
                    <span class="hidden-xs">
                        <!--This is dark logo text-->
                        <img src="plugins/images/eliteadmin-text.png" alt="home" class="dark-logo" />
                    </span>
                </a>
            </div>

            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                <li>
                    <h4 class="page-title" style="padding-top:8px; color:white; font-weight: bold;">UGC</h4>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="ti-settings"></i>
                        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <ul class="dropdown-menu mailbox animated bounceInDown">
                        <li>
                            <div class="drop-title">Profile Hub</div>
                        </li>
                        <li>
                            <div class="message-center">
                                <a href="#">
                                    <div class="mail-contnet">
                                        <h5>Create New Dashboard Admin</h5>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="mail-contnet">
                                        <h5>Create New App User</h5>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="mail-contnet">
                                        <h5>My Profile</h5>
                                    </div>
                                </a>
                                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <div class="mail-contnet">
                                        <h5>Logout</h5>
                                    </div>
                                </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </div>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>

                <!-- /.dropdown -->
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            <div class="user-profile">
                <div class="dropdown user-pro-body">
                    <div><img src="<?php echo e(URL::to($image_url)); ?>" alt="user-img" class="img-circle"></div>
                    <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span></a>
                    <ul class="dropdown-menu animated flipInY">
                        <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="nav" id="side-menu">
                <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                    <!-- input-group -->
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                    <!-- /input-group -->
                </li>

                <li> <a href="<?php echo e(route('home')); ?>" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span></span></a></li>

                <li> <a href="<?php echo e(route('login')); ?>" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="&#xe013"></i> <span class="hide-menu"> Branding Activity Analysis <span class="fa arrow"></span></span></a></li>
                <li> <a href="<?php echo e(route('login')); ?>" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="&#xe013"></i> <span class="hide-menu"> Business Card Requisition <span class="fa arrow"></span></span></a></li>
                <li> <a href="<?php echo e(route('login')); ?>" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="&#xe013"></i> <span class="hide-menu"> Competing Brand Retailer <span class="fa arrow"></span></span></a></li>
                <li> <a href="<?php echo e(route('login')); ?>" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="&#xe013"></i> <span class="hide-menu"> Competing Dealer <span class="fa arrow"></span></span></a></li>

            </ul>
        </div>
    </div>