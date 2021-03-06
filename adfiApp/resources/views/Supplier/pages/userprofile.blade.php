@extends('admin.layouts.adminlayout')

@section('title', 'User Profile')

@section('maintitle', 'User Profile')
@section('addheader')
<link href="{{asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('assets/vendors/select2/css/select2.min.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('assets/vendors/select2/css/select2-bootstrap.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendors/iCheck/css/all.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/pages/wizard.css')}}" type="text/css" rel="stylesheet">
@endsection

@section('content')

<section class="content">
              <div class="row">
                  <div class="col-md-12">
                      <div class="panel panel-primary">
                          <div class="panel-heading">
                              <h3 class="panel-title">
                                  <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i> Edit User Profile
                              </h3>
                              <span class="pull-right clickable">
                                  <i class="glyphicon glyphicon-chevron-up"></i>
                              </span>
                          </div>
                          <div class="panel-body">
                              <!-- errors -->
                              <!--main content-->
                              <form id="commentForm" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                  <!-- CSRF Token -->
                                  <input type="hidden" name="_token" />
                                  <div id="rootwizard">
                                      <ul>
                                          <li>
                                              <a href="#tab1" data-toggle="tab">User Profile</a>
                                          </li>
                                          <li>
                                              <a href="#tab2" data-toggle="tab">Bio</a>
                                          </li>
                                          <li>
                                              <a href="#tab3" data-toggle="tab">Address</a>
                                          </li>

                                      </ul>
                                      <div class="tab-content">
                                          <div class="tab-pane" id="tab1">
                                              <h2 class="hidden">&nbsp;</h2>
                                              <div class="form-group">
                                                  <label for="first_name" class="col-sm-2 control-label">First Name *</label>
                                                  <div class="col-sm-10">
                                                      <input id="first_name" name="first_name" type="text" placeholder="" class="form-control required" />
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="last_name" class="col-sm-2 control-label">Last Name *</label>
                                                  <div class="col-sm-10">
                                                      <input id="last_name" name="last_name" type="text" placeholder="" class="form-control required" />
                                                  </div>
                                              </div>
                                                <div class="form-group">
                                                  <label for="last_name" class="col-sm-2 control-label">Company Name</label>
                                                  <div class="col-sm-10">
                                                      <input id="company" name="company" type="text" placeholder="" class="form-control required" />
                                                  </div>
                                              </div>
                                                 <div class="form-group">
                                                  <label for="last_name" class="col-sm-2 control-label">Business Category</label>
                                                  <div class="col-sm-10">
                                                      <input id="company" name="company" type="text" placeholder="" class="form-control required" />
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="email" class="col-sm-2 control-label">Email *</label>
                                                  <div class="col-sm-10">
                                                      <input id="email" name="email" placeholder="E-mail" type="text" class="form-control required email" />
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="password" class="col-sm-2 control-label">Password *</label>
                                                  <div class="col-sm-10">
                                                      <input id="password" name="password" type="password" placeholder="Password" class="form-control required" />
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="password_confirm" class="col-sm-2 control-label">Confirm Password *</label>
                                                  <div class="col-sm-10">
                                                      <input id="password_confirm" name="password_confirm" type="password" placeholder="Confirm Password " class="form-control required" />
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="tab-pane" id="tab2">
                                              <h2 class="hidden">&nbsp;</h2>
                                              <div class="form-group required">
                                                  <label for="dob" class="col-sm-2 control-label">Date of Birth</label>
                                                  <div class="col-sm-10">
                                                      <input id="dob" name="dob" type="text" class="form-control" data-date-format="YYYY-MM-DD" placeholder="yyyy-mm-dd" />
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="pic" class="col-sm-2 control-label">Profile picture</label>
                                                  <div class="col-sm-10">
                                                      <div class="fileinput fileinput-new" data-provides="fileinput">
                                                          <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                                                              <img src="http://placehold.it/200x200" alt="profile pic">
                                                          </div>
                                                          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
                                                          <div>
                                                              <span class="btn btn-default btn-file">
                                  <span class="fileinput-new">Select image</span>
                                                              <span class="fileinput-exists">Change</span>
                                                              <input id="pic" name="pic_file" type="file" class="form-control" />
                                                              </span>
                                                              <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group required">
                                                  <label for="bio" class="col-sm-2 control-label">Bio <small>(brief intro) *</small></label>
                                                  <div class="col-sm-10">
                                                      <textarea name="bio" id="bio" class="form-control resize_vertical" rows="4"></textarea>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="tab-pane" id="tab3">
                                              <div class="form-group">
                                                  <label for="gender" class="col-sm-2 control-label">Gender *</label>
                                                  <div class="col-sm-10">
                                                      <select class="form-control select21" id="gender" title="Select Gender..." name="gender">
                                                          <option disabled selected>Select Gender</option>
                                                          <option value="male">MALE</option>
                                                          <option value="female">FEMALE </option>
                                                          <option value="other">OTHER </option>
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="country" class="col-sm-2 control-label">Country</label>
                                                  <div class="col-md-10">
                                                      <select class="select21 form-control" name="country" id="country">
                                                            @include('supplier.includes.countrylist')
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="form-group ">
                                                  <label for="state" class="col-sm-2 control-label">State </label>
                                                  <div class="col-sm-10">
                                                      <input id="state" name="state" type="text" class="form-control" />
                                                  </div>
                                              </div>
                                              <div class="form-group required">
                                                  <label for="city" class="col-sm-2 control-label">City </label>
                                                  <div class="col-sm-10">
                                                      <input id="city" name="city" type="text" class="form-control" />
                                                  </div>
                                              </div>
                                              <div class="form-group required">
                                                  <label for="address" class="col-sm-2 control-label">Address </label>
                                                  <div class="col-sm-10">
                                                      <input id="address" name="address" type="text" class="form-control" />
                                                  </div>
                                              </div>
                                              <div class="form-group required">
                                                  <label for="postal" class="col-sm-2 control-label">Postal/zip</label>
                                                  <div class="col-sm-10">
                                                      <input id="postal" name="postal" type="text" class="form-control" />
                                                  </div>
                                              </div>
                                          </div>

                                          <ul class="pager wizard">
                                              <li class="previous">
                                                  <a href="#">Previous</a>
                                              </li>
                                              <li class="next">
                                                  <a href="#">Next</a>
                                              </li>
                                              <li class="next finish" style="display:none;">
                                                  <a href="javascript:;">Finish</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div id="myModal" class="modal fade" role="dialog">
                                      <div class="modal-dialog">
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">User Register</h4>
                                              </div>
                                              <div class="modal-body">
                                                  <p>Account Registered Successfully.</p>
                                              </div>
                                              <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
              <!--row end-->
          </section>

@endsection


@section('addfooter')
          <script src="{{asset('assets/vendors/moment/js/moment.min.js')}}"></script>
           <script src="{{asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js')}}" type="text/javascript"></script>
           <script src="{{asset('assets/vendors/select2/js/select2.js')}}" type="text/javascript"></script>
           <script src="{{asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>
           <script src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
           <script src="{{asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
           <script src="{{asset('assets/vendors/iCheck/js/icheck.js')}}"></script>
           <script src="{{asset('assets/js/pages/adduser.js')}}" type="text/javascript"></script>
           <!-- end of page level js -->
           <script>
           $(document).ready(function() {

               $("#dob").datetimepicker({
                   format: 'YYYY-MM-DD',
                   widgetPositioning:{
                       vertical:'bottom'
                   },
                   keepOpen:false,
                   useCurrent: false,
                   maxDate: new Date()
               });
           });
           </script>



@endsection
