<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <section class="sidebar ">
            <div class="page-sidebar  sidebar-nav">
                <div class="nav_icons">
                    <ul class="sidebar_threeicons">
                        <li>
                            <a href="">
                                <i class="livicon" data-name="table" title="Advanced tables" data-c="#418BCA" data-hc="#418BCA" data-size="25" data-loop="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="livicon" data-c="#EF6F6C" title="Tasks" data-hc="#EF6F6C" data-name="list-ul" data-size="25" data-loop="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="livicon" data-name="image" title="Gallery" data-c="#F89A14" data-hc="#F89A14" data-size="25" data-loop="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="livicon" data-name="users" title="Users List" data-size="25" data-c="#01bc8c" data-hc="#01bc8c" data-loop="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <!-- BEGIN SIDEBAR MENU -->
                <ul id="menu" class="page-sidebar-menu">


                    <li class="active">
                        <a href="{{ url('/buyer') }}">
                            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

<!-- All Enquirys menu -->











<!-- Settings menu -->
                    <li>
                 <a href="#">
                     <i class="livicon" data-name="gears" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                     <span class="title">Profile</span>
                     <span class="fa arrow"></span>
                 </a>
                 <ul class="sub-menu">

                     <li>
                         <a href="{{ url('/buyer/edit-KYC') }}">
                             <i class="fa fa-angle-double-right"></i>Edit KYC
                         </a>
                     </li>

                     <li>
                         <a href="{{ url('/buyer/Submit-KYC') }}">
                             <i class="fa fa-angle-double-right"></i> Submit KYC
                         </a>
                     </li>




                 </ul>
             </li>
<!-- All Settings end there -->



                </ul>









                <!-- END SIDEBAR MENU -->
            </div>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">

      @yield('signin-alert')



        <!-- Main content -->
        <section class="content-header">
            <h1>@yield('maintitle')</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <a href="#">
                        <i class="livicon" data-name="home" data-size="14" data-color="#333" data-hovercolor="#333"></i>@yield('title')
                    </a>
                </li>
            </ol>
        </section>



@yield('widget')

           @yield('content')


            <div class="clearfix"></div>

        </section>
    </aside>
    <!-- right-side -->
</div>
