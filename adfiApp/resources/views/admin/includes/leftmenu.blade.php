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
                        <li>
                            <a href="gallery.html">
                                <i class="livicon" data-name="image" title="Gallery" data-c="#F89A14" data-hc="#F89A14" data-size="25" data-loop="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="users_list.html">
                                <i class="livicon" data-name="users" title="Users List" data-size="25" data-c="#01bc8c" data-hc="#01bc8c" data-loop="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <!-- BEGIN SIDEBAR MENU -->
                <ul id="menu" class="page-sidebar-menu">


                    <li class="active">
                        <a href="{{ url('/admin') }}">
                            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

<!-- All Enquirys menu -->
                    <li>
                 <a href="#">
                     <i class="livicon" data-name="medal" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                     <span class="title">Enquiries</span>
                     <span class="fa arrow"></span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="{{ url('/admin/all-enquirys') }}">
                             <i class="fa fa-angle-double-right"></i> All Enquirys
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/admin/supplier-enquiry') }}">
                             <i class="fa fa-angle-double-right"></i> Supplier Enquiry
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/admin/buyer-enquiry') }}">
                             <i class="fa fa-angle-double-right"></i> Buyer Enquiry
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/admin/investor-enquiry') }}">
                             <i class="fa fa-angle-double-right"></i> Investor Enquiry
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/admin/archived-enquiry') }}">
                             <i class="fa fa-angle-double-right"></i> Archived Enquiry
                         </a>
                     </li>
                 </ul>
             </li>
<!-- All Enquirys menu end there -->



<!-- All invite user menu -->
                    <li>
                 <a href="#">
                     <i class="livicon" data-name="user" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                     <span class="title">Invite User</span>
                     <span class="fa arrow"></span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="{{ url('/admin/invitation-pending') }}">
                             <i class="fa fa-angle-double-right"></i> Invitation Pending
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/admin/invited-emails') }}">
                             <i class="fa fa-angle-double-right"></i> Invited Emails
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/admin/invitation-success-statistics') }}">
                             <i class="fa fa-angle-double-right"></i> Invitation Success Statistics
                         </a>
                     </li>

                 </ul>
             </li>
<!-- All invite user end there -->



<!-- All Early payment menu -->
                    <li>
                 <a href="#">
                     <i class="livicon" data-name="piggybank" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                     <span class="title">Early Payment</span>
                     <span class="fa arrow"></span>
                 </a>
                 <ul class="sub-menu">

          
                     <li>
                         <a href="{{ url('/admin/offer-pending-supplier') }}">
                             <i class="fa fa-angle-double-right"></i> Offer Pending With Supplier
                         </a>
                     </li>

                     <li>
                         <a href="{{ url('/admin/offer-pending-buyer') }}">
                             <i class="fa fa-angle-double-right"></i> Offer Pending With Buyer
                         </a>
                     </li>


                     <li>
                         <a href="{{ url('/admin/buyer-returned-offer') }}">
                             <i class="fa fa-angle-double-right"></i> Buyer returned Offers
                         </a>
                     </li>

                     <li>
                         <a href="{{ url('/admin/offer-pending-investor') }}">
                             <i class="fa fa-angle-double-right"></i> Offer Pending with Investor
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/admin/offer-Overdue-with-investor') }}">
                             <i class="fa fa-angle-double-right"></i> Offer Overdue With Investor
                         </a>
                     </li>

                 </ul>
             </li>
<!-- All Early payment end there -->

<!-- All Early payment menu -->
                    <li>
                 <a href="#">
                     <i class="livicon" data-name="archive-add" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                     <span class="title">Invoices</span>
                     <span class="fa arrow"></span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="{{ url('/admin/pending-for-buyer-Approval') }}">
                             <i class="fa fa-angle-double-right"></i> Pending For buyer Approval
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/admin/invoices-rejected') }}">
                             <i class="fa fa-angle-double-right"></i> Invoices rejected
                         </a>
                     </li>

                     <li>
                         <a href="{{ url('/admin/invoices-uploaded') }}">
                             <i class="fa fa-angle-double-right"></i> Invoices Uploaded
                         </a>
                     </li>


                     <li>
                         <a href="{{ url('/admin/invoices-pending-admin-Approval') }}">
                             <i class="fa fa-angle-double-right"></i>  Pending For Admin Approval
                         </a>
                     </li>



                 </ul>
             </li>
<!-- All Early payment end there -->

<!-- kyc updations menu -->
                    <li>
                 <a href="#">
                     <i class="livicon" data-name="inbox-out" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                     <span class="title">Client KYC</span>
                     <span class="fa arrow"></span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="{{ url('/admin/buyer-KYC-list') }}">
                             <i class="fa fa-angle-double-right"></i> Buyer KYC List
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/admin/supplier-KYC-list') }}">
                             <i class="fa fa-angle-double-right"></i> Supplier KYC List
                         </a>
                     </li>

                     <li>
                         <a href="{{ url('/admin/investor-KYC-list') }}">
                             <i class="fa fa-angle-double-right"></i> Investor KYC List
                         </a>
                     </li>

                 </ul>
             </li>
<!-- All kyc updations end there -->


<!-- kyc updations menu -->
                    <li>
                 <a href="#">
                     <i class="livicon" data-name="inbox-out" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                     <span class="title">KYC Updations</span>
                     <span class="fa arrow"></span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="{{ url('/admin/Buyer-KYC-edits') }}">
                             <i class="fa fa-angle-double-right"></i> Buyer KYC Edits
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/admin/supplier-KYC-edits') }}">
                             <i class="fa fa-angle-double-right"></i> Supplier KYC Edits
                         </a>
                     </li>

                     <li>
                         <a href="{{ url('/admin/supplier-alerts') }}">
                             <i class="fa fa-angle-double-right"></i> Supplier Alerts
                         </a>
                     </li>

                 </ul>
             </li>
<!-- All kyc updations end there -->



<!-- kyc updations menu -->
                    <li>
                 <a href="#">
                     <i class="livicon" data-name="inbox-out" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                     <span class="title">User Profiles</span>
                     <span class="fa arrow"></span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="{{ url('/admin/supplier-list') }}">
                             <i class="fa fa-angle-double-right"></i> Suppliers
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/admin/buyer-list') }}">
                             <i class="fa fa-angle-double-right"></i> Buyers
                         </a>
                     </li>

                     <li>
                         <a href="{{ url('/admin/investor-institutional-list') }}">
                             <i class="fa fa-angle-double-right"></i> Investor - Institutional

                         </a>
                     </li>

                     <li>
                         <a href="{{ url('/admin/investor-individual-list') }}">
                             <i class="fa fa-angle-double-right"></i> Investor - Individual

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
                         <a href="{{ url('/admin/password-Change') }}">
                             <i class="fa fa-angle-double-right"></i> Password Change
                         </a>
                     </li>

                     <li>
                         <a href="{{ url('/admin/add-admin') }}">
                             <i class="fa fa-angle-double-right"></i>Add Admin User
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/admin/admin-users') }}">
                             <i class="fa fa-angle-double-right"></i>Admin User
                         </a>
                     </li>

                     <li>
                         <a href="{{ url('/admin/deleted-admin-users') }}">
                             <i class="fa fa-angle-double-right"></i> Deleted Admin Users
                         </a>
                     </li>




                 </ul>
             </li>
<!-- All Settings end there -->



<!-- kyc updations menu -->
                    <li>
                 <a href="#">
                     <i class="livicon" data-name="clip" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                     <span class="title">Transactions</span>
                     <span class="fa arrow"></span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="{{ url('/admin/all-transactions') }}">
                             <i class="fa fa-angle-double-right"></i> All Transactions
                         </a>
                     </li>
                     <!--
                     <li>
                         <a href="{{ url('/admin/buyer-wise') }}">
                             <i class="fa fa-angle-double-right"></i> Buyer Wise
                         </a>
                     </li>

                     <li>
                         <a href="{{ url('/admin/investor-wise') }}">
                             <i class="fa fa-angle-double-right"></i> Investor Wise
                         </a>
                     </li>-->

                 </ul>
             </li>
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
