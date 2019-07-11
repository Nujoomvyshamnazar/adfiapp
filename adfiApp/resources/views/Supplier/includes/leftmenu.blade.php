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
                        <li>
                            <a href="tasks.html">
                                <i class="livicon" data-c="#EF6F6C" title="Tasks" data-hc="#EF6F6C" data-name="list-ul" data-size="25" data-loop="true"></i>
                            </a>
                        </li>


                    </ul>
                </div>
                <div class="clearfix"></div>
                <!-- BEGIN SIDEBAR MENU -->
                <ul id="menu" class="page-sidebar-menu">


                    <li class="active">
                        <a href="{{ url('/supplier') }}">
                            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>




<!-- All invite user menu -->
                    <li>
                 <a href="#">
                     <i class="livicon" data-name="piggybank" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                     <span class="title">Early payments</span>
                     <span class="fa arrow"></span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="{{ url('/supplier/offer-pending') }}">
                             <i class="fa fa-angle-double-right"></i> Offer pending
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/supplier/offer-submitted') }}">
                             <i class="fa fa-angle-double-right"></i> Offer Submitted
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/supplier/buyer-accepted-offers') }}">
                             <i class="fa fa-angle-double-right"></i> Buyer Accepted Offers
                         </a>
                     </li>

                     <li>
                         <a href="{{ url('/supplier/investor-accepted-offers') }}">
                             <i class="fa fa-angle-double-right"></i> Investor Accepted Offers
                         </a>
                     </li>

                     <li>
                         <a href="{{ url('/supplier/offer-for-resubmission') }}">
                             <i class="fa fa-angle-double-right"></i> Offers For Resubmission
                         </a>
                     </li>



                 </ul>
             </li>




<!-- All Early payment menu -->
                    <li>
                 <a href="#">
                     <i class="livicon" data-name="printer" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                     <span class="title">New Invoice</span>
                     <span class="fa arrow"></span>
                 </a>
                 <ul class="sub-menu">


                     <li>
                         <a href="{{ url('/supplier/upload-invoice') }}">
                             <i class="fa fa-angle-double-right"></i> Upload Invoice
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/supplier/Submitted-invoices') }}">
                             <i class="fa fa-angle-double-right"></i> Submitted Invoices
                         </a>
                     </li>

                 </ul>
             </li>
<!-- All Early payment end there -->

<!-- kyc updations menu -->
                    <li>
                 <a href="#">
                     <i class="livicon" data-name="clip" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                     <span class="title">Transactions</span>
                     <span class="fa arrow"></span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="{{ url('/supplier/all-transactions') }}">
                             <i class="fa fa-angle-double-right"></i> All Transactions
                         </a>
                     </li>




                 </ul>
             </li>
<!-- All kyc updations end there -->






<!-- kyc updations menu -->
                    <li>
                 <a href="#">
                     <i class="livicon" data-name="user" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                     <span class="title">Profile</span>
                     <span class="fa arrow"></span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="{{ url('/supplier/edit-KYC') }}">
                             <i class="fa fa-angle-double-right"></i> Edit KYC
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/supplier/Submit-KYC') }}">
                             <i class="fa fa-angle-double-right"></i> Submit KYC
                         </a>
                     </li>



                 </ul>
             </li>
<!-- All kyc updations end there -->




<!-- Settings menu -->
                    <li>
                 <a href="#">
                     <i class="livicon" data-name="gears" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                     <span class="title">Settings</span>
                     <span class="fa arrow"></span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="{{ url('/supplier/password-Change') }}">
                             <i class="fa fa-angle-double-right"></i> Password Change
                         </a>
                     </li>


                 </ul>
             </li>
<!-- All Settings end there -->
<!--
<li>
<a href="#">
 <i class="livicon" data-name="users-add" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
 <span class="title">Manage Buyer</span>
 <span class="fa arrow"></span>
</a>
<ul class="sub-menu">
 <li>
     <a href="{{ url('/supplier/add-buyer') }}">
         <i class="fa fa-angle-double-right"></i>Add Buyer
     </a>
 </li>
 <li>
     <a href="{{ url('/supplier/deleted-buyer') }}">
         <i class="fa fa-angle-double-right"></i>Deleted Buyer
     </a>
 </li>

 <li>
     <a href="{{ url('/supplier/list-buyer') }}">
         <i class="fa fa-angle-double-right"></i> Buyers List
     </a>
 </li>

</ul>
</li>
-->

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
