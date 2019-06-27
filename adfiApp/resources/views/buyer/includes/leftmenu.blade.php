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


<li>
<a href="#">
 <i class="livicon" data-name="piggybank" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
 <span class="title">Early payment</span>
 <span class="fa arrow"></span>
</a>
<ul class="sub-menu">

 <li>
     <a href="{{ url('/buyer/offer-pending') }}">
         <i class="fa fa-angle-double-right"></i>Offer Received
     </a>
 </li>

 <li>
     <a href="{{ url('/buyer/Third-Party-payments') }}">
         <i class="fa fa-angle-double-right"></i>Third Party payments
     </a>
 </li>

 <li>
     <a href="{{ url('/buyer/payed-early') }}">
         <i class="fa fa-angle-double-right"></i> Paid Early
     </a>
 </li>
 <li>
     <a href="{{ url('/buyer/returned-offer') }}">
         <i class="fa fa-angle-double-right"></i> Archived Offer
     </a>
 </li>
</ul>
</li>



<li>
<a href="#">
 <i class="livicon" data-name="archive-add" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
 <span class="title">Invoices</span>
 <span class="fa arrow"></span>
</a>
<ul class="sub-menu">

 <li>
     <a href="{{ url('/buyer/Approval-pending') }}">
         <i class="fa fa-angle-double-right"></i>Approval pending
     </a>
 </li>
 <li>
     <a href="{{ url('/buyer/invoices-Approved') }}">
         <i class="fa fa-angle-double-right"></i>invoices Approved
     </a>
 </li>
 <li>
     <a href="{{ url('/buyer/Rejected-invoices') }}">
         <i class="fa fa-angle-double-right"></i>invoices Rejected
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
     <a href="{{ url('/buyer/all-transactions') }}">
         <i class="fa fa-angle-double-right"></i>All Transactions
     </a>
 </li>


</ul>
</li>


<li>
<a href="#">
 <i class="livicon" data-name="truck" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
 <span class="title">Supplier</span>
 <span class="fa arrow"></span>
</a>
<ul class="sub-menu">

 <li>
     <a href="{{ url('/buyer/request-kyc') }}">
         <i class="fa fa-angle-double-right"></i>Request KYC
     </a>
 </li>

 <li>
     <a href="{{ url('/buyer/report-supplier') }}">
         <i class="fa fa-angle-double-right"></i> Report Supplier
     </a>
 </li>
 <li>
     <a href="{{ url('/buyer/supplier-list') }}">
         <i class="fa fa-angle-double-right"></i>  Supplier List
     </a>
 </li>
</ul>
</li>




<li>
<a href="#">
 <i class="livicon" data-name="gears" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
 <span class="title">Settings</span>
 <span class="fa arrow"></span>
</a>
<ul class="sub-menu">

 <li>
     <a href="{{ url('/buyer/change-Password') }}">
         <i class="fa fa-angle-double-right"></i>change Password
     </a>
 </li>

</ul>
</li>


<!-- Settings menu -->
                    <li>
                 <a href="#">
                     <i class="livicon" data-name="user" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
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
<li>
<a href="#">
 <i class="livicon" data-name="shopping-cart-in" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
 <span class="title">
Purchase order
 </span>
 <span class="fa arrow"></span>
</a>
<ul class="sub-menu">

 <li>
     <a href="{{ url('/buyer/new-purchase-order') }}">
         <i class="fa fa-angle-double-right"></i>New Purchase Order
     </a>
 </li>

 <li>
     <a href="{{ url('/buyer/manage-po') }}">
         <i class="fa fa-angle-double-right"></i> Manage PO
     </a>
 </li>

</ul>
</li>



<!-- All Settings end there -->
<li>
<a href="#">
 <i class="livicon" data-name="shopping-cart-in" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
 <span class="title">
ADFI Invoices
 </span>
 <span class="fa arrow"></span>
</a>
<ul class="sub-menu">

 <li>
     <a href="{{ url('/buyer/due-invoices') }}">
         <i class="fa fa-angle-double-right"></i>Due Invoices
     </a>
 </li>

 <li>
     <a href="{{ url('/buyer/Over-due-invoices') }}">
         <i class="fa fa-angle-double-right"></i> Over due Invoices
     </a>
 </li>

</ul>
</li>

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
