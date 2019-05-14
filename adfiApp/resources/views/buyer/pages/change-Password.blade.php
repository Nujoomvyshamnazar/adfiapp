@extends('buyer.layouts.adminlayout')

@section('title', 'Change Password')

@section('maintitle', 'Change Password')

@section('content')
<section class="content">
             <div class="row">
                 <div class="col-lg-12">


                             <div class="row">
                                 <div class="col-md-12 pd-top">
                                     <form action="#" class="form-horizontal">
                                         <div class="form-body">
                                             <div class="form-group">
                                                 <label for="inputpassword" class="col-md-3 control-label">
                                                     Password
                                                     <span class='require'>*</span>
                                                 </label>
                                                 <div class="col-md-9">
                                                     <div class="input-group">
                                                         <span class="input-group-addon">
                                                             <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                         </span>
                                                         <input type="password" id="inputpassword" placeholder="Password" class="form-control" />
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                 <label for="inputnumber" class="col-md-3 control-label">
                                                     Confirm Password
                                                     <span class='require'>*</span>
                                                 </label>
                                                 <div class="col-md-9">
                                                     <div class="input-group">
                                                         <span class="input-group-addon">
                                                             <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                         </span>
                                                         <input type="password" id="inputnumber" placeholder="Confirm Password" class="form-control" />
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="form-actions">
                                             <div class="col-md-offset-3 col-md-9">
                                                 <button type="submit" class="btn btn-primary">Update</button>
                                                 &nbsp;
                                                 <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                                             </div>
                                         </div>
                                     </form>
                                 </div>
                             </div>

                 </div>
             </div>
         </section>
@endsection
