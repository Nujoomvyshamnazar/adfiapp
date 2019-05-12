@extends('admin.layouts.adminlayout')

@section('title', 'Deleted Admin Users')

@section('maintitle', 'Deleted Admin User')

@section('content')

           <!-- Content Header (Page header) -->

           <!-- Main content -->
           <section class="content paddingleft_right15">
               <div class="row">
                   <div class="panel panel-warning">
                       <div class="panel-heading">
                           <h4 class="panel-title">
                               <i class="livicon" data-name="users-remove" data-size="18" data-c="#ffffff" data-hc="#ffffff"></i> Deleted Admin Users List
                           </h4>
                       </div>
                       <div class="panel-body">
                           <div class="table-responsive">
                               <table class="table table-bordered" id="table">
                                   <thead>
                                       <tr class="filters">
                                           <th>First Name</th>
                                           <th>Last Name</th>
                                           <th>User E-mail</th>
                                           <th>Created At</th>
                                           <th>Actions</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td>Adele</td>
                                           <td>Becker</td>
                                           <td>otis98@hotmail.com</td>
                                           <td>2 weeks ago</td>
                                           <td>
                                               <a href=""><i class="livicon" data-name="user-flag" data-c="#01BC8C" data-hc="#01BC8C" data-size="18" title="restore"></i></a>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Adan</td>
                                           <td>Schmeler</td>
                                           <td>arnoldo19@gmail.com</td>
                                           <td>2 weeks ago</td>
                                           <td>
                                               <a href=""><i class="livicon" data-name="user-flag" data-c="#01BC8C" data-hc="#01BC8C" data-size="18" title="restore"></i></a>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Abbey</td>
                                           <td>Conn</td>
                                           <td>lehner.rhianna@christiansenwill.info</td>
                                           <td>2 weeks ago</td>
                                           <td>
                                               <a href=""><i class="livicon" data-name="user-flag" data-c="#01BC8C" data-hc="#01BC8C" data-size="18" title="restore"></i></a>
                                           </td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>
           </section>

@endsection
