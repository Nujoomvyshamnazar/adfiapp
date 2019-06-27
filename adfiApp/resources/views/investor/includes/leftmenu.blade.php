<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <section class="sidebar ">
            <div class="page-sidebar  sidebar-nav">
                <div class="nav_icons">
                    <ul class="sidebar_threeicons">
                        <li>
                            <a href="advanced_tables.html">
                                <i class="livicon" data-name="table" title="Advanced tables" data-c="#418BCA" data-hc="#418BCA" data-size="25" data-loop="true"></i>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="clearfix"></div>
                <!-- BEGIN SIDEBAR MENU -->
                <ul id="menu" class="page-sidebar-menu">


                    <li class="active">
                        <a href="{{ url('/investor') }}">
                            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li>
                  <a href="#">
                     <i class="livicon" data-name="piggybank" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                     <span class="title">Early payments</span>
                     <span class="fa arrow"></span>
                  </a>
                  <ul class="sub-menu">
                     <li>
                         <a href="{{ url('/investor/offer-Availables') }}">
                             <i class="fa fa-angle-double-right"></i> Offers Availables
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/investor/offer-Accepted') }}">
                             <i class="fa fa-angle-double-right"></i> Offers Accepted
                         </a>
                     </li>

                     <li>
                         <a href="{{ url('/investor/bids-lost') }}">
                             <i class="fa fa-angle-double-right"></i> Bids Lost
                         </a>
                     </li>

                  </ul>
                  </li>

                    <li>
                  <a href="#">
                     <i class="livicon" data-name="clip" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                     <span class="title">Transactions</span>
                     <span class="fa arrow"></span>
                  </a>
                  <ul class="sub-menu">
                     <li>
                         <a href="{{ url('/investor/all-transactions') }}">
                             <i class="fa fa-angle-double-right"></i> All Transactions
                         </a>
                     </li>
                

                  </ul>
                  </li>


                  <li>
                <a href="#">
                   <i class="livicon" data-name="spinner-one" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                   <span class="title">Information Update</span>
                   <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                   <li>
                       <a href="{{ url('/investor/buyer-financials') }}">
                           <i class="fa fa-angle-double-right"></i> Buyer Financials
                       </a>
                   </li>
                   <li>
                       <a href="{{ url('/investor/media-coverage') }}">
                           <i class="fa fa-angle-double-right"></i> Media Coverage
                       </a>
                   </li>

                   <li>
                       <a href="{{ url('/investor/industry-analysis') }}">
                           <i class="fa fa-angle-double-right"></i> Industry Analysis
                       </a>
                   </li>
                   <li>
                       <a href="{{ url('/investor/Regulations') }}">
                           <i class="fa fa-angle-double-right"></i> Regulations
                       </a>
                   </li>
                </ul>
                </li>

                <!-- kyc updations menu -->
                                    <li>
                                 <a href="#">
                                     <i class="livicon" data-name="user" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                     <span class="title">Individual Profile</span>
                                     <span class="fa arrow"></span>
                                 </a>
                                 <ul class="sub-menu">
                                     <li>
                                         <a href="{{ url('/investor/edit-individual-KYC') }}">
                                             <i class="fa fa-angle-double-right"></i> Edit KYC
                                         </a>
                                     </li>
                                     <li>
                                         <a href="{{ url('/investor/Submit-individual-KYC') }}">
                                             <i class="fa fa-angle-double-right"></i> Submit KYC
                                         </a>
                                     </li>



                                 </ul>
                             </li>

                             <li>
                          <a href="#">
                              <i class="livicon" data-name="user" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                              <span class="title">Institutional Profile</span>
                              <span class="fa arrow"></span>
                          </a>
                          <ul class="sub-menu">
                              <li>
                                  <a href="{{ url('/investor/edit-Institutional-KYC') }}">
                                      <i class="fa fa-angle-double-right"></i> Edit KYC
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ url('/investor/Submit-Institutional-KYC') }}">
                                      <i class="fa fa-angle-double-right"></i> Submit KYC
                                  </a>
                              </li>



                          </ul>
                      </li>



<!-- Settings menu -->
                    <li>
                 <a href="#">
                     <i class="livicon" data-name="gears" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                     <span class="title">Settings</span>
                     <span class="fa arrow"></span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="{{ url('/investor/password-Change') }}">
                             <i class="fa fa-angle-double-right"></i> Password Change
                         </a>
                     </li>


                     <li>
                         <a href="{{ url('/investor/change-view-settings') }}">
                             <i class="fa fa-angle-double-right"></i> Change View Settings
                         </a>
                     </li>




                 </ul>
             </li>
<!-- All Settings end there -->



<!-- kyc updations menu -->

<!-- All kyc updations end there -->
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
