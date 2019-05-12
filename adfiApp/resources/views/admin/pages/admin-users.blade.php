@extends('admin.layouts.adminlayout')

@section('title', 'Admin User List')

@section('maintitle', 'Admin User List')

@section('content')
<section class="content paddingleft_right15">
           <div class="row">
               <div class="panel panel-primary ">
                   <div class="panel-heading">
                       <h4 class="panel-title">
                           <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>Admin Users List
                       </h4>
                   </div>
                   <br />
                   <div class="panel-body">
                       <table class="table table-bordered " id="table">
                           <thead>
                               <tr class="filters">
                                   <th>First Name</th>
                                   <th>Last Name</th>
                                   <th>
                                       User E-mail
                                   </th>
                                   <th>Status</th>
                                   <th>Created At</th>
                                   <th>Actions</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>John</td>
                                   <td>Doe</td>
                                   <td>
                                       admin@admin.com
                                   </td>
                                   <td>Activated</td>
                                   <td>
                                       1 month ago
                                   </td>
                                   <td>
                                       <a href="view_user.html">
                                           <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                       </a>
                                       <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                           <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                       </a>
                                   </td>
                               </tr>
                               <tr>
                                   <td>Mozzy</td>
                                   <td>
                                       loomy69@gmail.com
                                   </td>
                                   <td>
                                       loomy69@gmail.com
                                   </td>
                                   <td>Activated</td>
                                   <td>
                                       4 weeks ago
                                   </td>
                                   <td>
                                       <a href="view_user.html">
                                           <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                       </a>
                                       <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                           <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                       </a>
                                   </td>
                               </tr>
                               <tr>
                                   <td>jonh</td>
                                   <td>Doe</td>
                                   <td>
                                       email@email.com.br
                                   </td>
                                   <td>Activated</td>
                                   <td>
                                       3 weeks ago
                                   </td>
                                   <td>
                                       <a href="view_user.html">
                                           <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                       </a>
                                       <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                           <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                       </a>
                                   </td>
                               </tr>
                               <tr>
                                   <td>Lue</td>
                                   <td>Gutkowski</td>
                                   <td>
                                       weissnat.ron@feeney.biz
                                   </td>
                                   <td>Activated</td>
                                   <td>
                                       2 weeks ago
                                   </td>
                                   <td>
                                       <a href="view_user.html">
                                           <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                       </a>
                                       <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                           <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                       </a>
                                   </td>
                               </tr>
                               <tr>
                                   <td>Claire</td>
                                   <td>Crooks</td>
                                   <td>
                                       yd&#039;amore@grimes.net
                                   </td>
                                   <td>Activated</td>
                                   <td>
                                       2 weeks ago
                                   </td>
                                   <td>
                                       <a href="view_user.html">
                                           <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                       </a>
                                       <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                           <i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete user"></i>
                                       </a>
                                   </td>
                               </tr>

                               <tr>
                                   <td>Franco</td>
                                   <td>Waelchi</td>
                                   <td>
                                       quigley.karelle@gmail.com
                                   </td>
                                   <td>Activated</td>
                                   <td>
                                       2 weeks ago
                                   </td>
                                   <td>
                                       <a href="view_user.html">
                                           <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                       </a>
                                       <a href="view_user.html">
                                           <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i>
                                       </a>
                                   </td>
                               </tr>
                           </tbody>
                       </table>
                       <!-- Modal for showing delete confirmation -->
                       <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                       <h4 class="modal-title" id="user_delete_confirm_title">
                                           Delete User
                                       </h4>
                                   </div>
                                   <div class="modal-body">
                                       Are you sure to delete this user? This operation is irreversible.
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                       <a href="deleted_users.html" class="btn btn-danger">Delete
                                       </a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- row-->
       </section>

@endsection
