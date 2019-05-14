@extends('supplier.layouts.adminlayout')

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
                                              <a href="#tab1" data-toggle="tab">Entity Profiling</a>
                                          </li>
                                          <li>
                                              <a href="#tab2" data-toggle="tab">Activity Profile</a>
                                          </li>
                                          <li>
                                              <a href="#tab3" data-toggle="tab">Attachments</a>
                                          </li>

                                      </ul>
                                      <div class="tab-content">
                                          <div class="tab-pane" id="tab1">
                                              <h2 class="hidden">&nbsp;</h2>


                                              <div class="panel-body">
                                                        <div class="row">

                                                                <div class="col-md-6">

                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="first_Name">Entity Name:</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control required" id="Entity_Name" placeholder="First Name" >
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="first_Name">Nature of Business:</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control required" id="Nature_of_Business" placeholder="First Name" >
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="first_Name">Incorporation date:</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control required" id="Incorporation_date:" placeholder="First Name" >
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="first_Name">Country of Head office:</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control required" id="Incorporation_date:" placeholder="First Name" >
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="first_Name">Company ID Type : </label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control required" id="Incorporation_date:" placeholder="First Name" >
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="first_Name"> Company ID Date of First Issuance: </label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control required" id="Incorporation_date:" placeholder="First Name" >
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="first_Name">Registered Addresss:   </label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control required" id="Incorporation_date:" placeholder="First Name" >
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="first_Name">Contact Numbers :  </label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control required" id="Incorporation_date:" placeholder="First Name" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="first_Name">Annual Turnover </label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control required" id="Incorporation_date:" placeholder="First Name" >
                                                                        </div>
                                                                    </div>




                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="last_Name">Entity Type:</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="last_Name" placeholder="Last Name">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="last_Name">Industry:</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="last_Name" placeholder="Last Name">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="last_Name">Country of Operations:</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="last_Name" placeholder="Last Name">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="last_Name">Company ID Number :</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="last_Name" placeholder="Last Name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="last_Name">Company ID Date of Expiry:  </label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="last_Name" placeholder="Last Name">
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="last_Name">Name of the Auditor:   </label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="last_Name" placeholder="Last Name">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="last_Name">  Mailing Adresss  </label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="last_Name" placeholder="Last Name">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="last_Name">Sources of Income </label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="last_Name" placeholder="Last Name">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="last_Name">Group Company Details </label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="last_Name" placeholder="Last Name">
                                                                        </div>
                                                                    </div>





                                                                </div>



                                                        </div>



                                                    </div>
                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="panel panel-primary">
                                                                                <div class="panel-heading">
                                                                                    <h4 class="panel-title">Board of Directors and Senior Management :</h4>

                                                                                </div>
                                                                                <div class="panel-body">

                                        <fieldset>
                                            <!-- Name input-->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="name">Name</label>
                                                <div class="col-md-9">
                                                    <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="name"> Age </label>
                                                <div class="col-md-9">
                                                    <input id="name" name="age" type="text" placeholder="age" class="form-control"></div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="name">Title</label>
                                                <div class="col-md-9">
                                                    <input id="name" name="title" type="text" placeholder="title" class="form-control"></div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="name">Country of residence</label>
                                                <div class="col-md-9">
                                              <input id="name" name="country" type="text" placeholder="title" class="form-control">
                                            </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label" for="name">Years with the establishment</label>
    <div class="col-md-9">
  <input id="name" name="country" type="text" placeholder="title" class="form-control">
</div>
</div>

                                        </fieldset>

                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="panel panel-primary">
                                                                                <div class="panel-heading">
                                                                                    <h4 class="panel-title">Shareholders Information: </h4>

                                                                                </div>
                                                                                <div class="panel-body">
                                                                                  <fieldset>
                                                                                      <!-- Name input-->
                                                                                      <div class="form-group">
                                                                                          <label class="col-md-3 control-label" for="name">Name</label>
                                                                                          <div class="col-md-9">
                                                                                              <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                                                                      </div>

                                                                                      <div class="form-group">
                                                                                          <label class="col-md-3 control-label" for="name"> Nationality </label>
                                                                                          <div class="col-md-9">
                                                                                              <input id="name" name="country" type="text" placeholder="Country" class="form-control"></div>
                                                                                      </div>

                                                                                      <div class="form-group">
                                                                                          <label class="col-md-3 control-label" for="name">Shareholding % </label>
                                                                                          <div class="col-md-9">
                                                                                              <input id="name" name="title" type="text" placeholder="Shareholding % " class="form-control"></div>
                                                                                      </div>

                                                                                      <div class="form-group">
                                                                                          <label class="col-md-3 control-label" for="name">Country of residence</label>
                                                                                          <div class="col-md-9">
                                                                                        <input id="name" name="country" type="text" placeholder="title" class="form-control">
                                                                                      </div>
                                          </div>

                                          <div class="form-group">
                                              <label class="col-md-3 control-label" for="name">Years with the establishment</label>
                                              <div class="col-md-9">
                                            <input id="name" name="country" type="text" placeholder="title" class="form-control">
                                          </div>
                                          </div>

                                                                                  </fieldset>
                                                                                </div>
                                                                            </div>
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
                                                          <optgroup label="Alaskan/Hawaiian Time Zone">
                                                              <option>Select Country</option>
                                                              <option value="AK">Alaska</option>
                                                              <option value="HI">Hawaii</option>
                                                          </optgroup>
                                                          <optgroup label="Pacific Time Zone">
                                                              <option value="CA">California</option>
                                                              <option value="NV">Nevada</option>
                                                              <option value="OR">Oregon</option>
                                                              <option value="WA">Washington</option>
                                                          </optgroup>
                                                          <optgroup label="Mountain Time Zone">
                                                              <option value="AZ">Arizona</option>
                                                              <option value="CO">Colorado</option>
                                                              <option value="ID">Idaho</option>
                                                              <option value="MT">Montana</option>
                                                              <option value="NE">Nebraska</option>
                                                              <option value="NM">New Mexico</option>
                                                              <option value="ND">North Dakota</option>
                                                              <option value="UT">Utah</option>
                                                              <option value="WY">Wyoming</option>
                                                          </optgroup>
                                                          <optgroup label="Central Time Zone">
                                                              <option value="AL">Alabama</option>
                                                              <option value="AR">Arkansas</option>
                                                              <option value="IL">Illinois</option>
                                                              <option value="IA">Iowa</option>
                                                              <option value="KS">Kansas</option>
                                                              <option value="KY">Kentucky</option>
                                                              <option value="LA">Louisiana</option>
                                                              <option value="MN">Minnesota</option>
                                                              <option value="MS">Mississippi</option>
                                                              <option value="MO">Missouri</option>
                                                              <option value="OK">Oklahoma</option>
                                                              <option value="SD">South Dakota</option>
                                                              <option value="TX">Texas</option>
                                                              <option value="TN">Tennessee</option>
                                                              <option value="WI">Wisconsin</option>
                                                          </optgroup>
                                                          <optgroup label="Eastern Time Zone">
                                                              <option value="CT">Connecticut</option>
                                                              <option value="DE">Delaware</option>
                                                              <option value="FL">Florida</option>
                                                              <option value="GA">Georgia</option>
                                                              <option value="IN">Indiana</option>
                                                              <option value="ME">Maine</option>
                                                              <option value="MD">Maryland</option>
                                                              <option value="MA">Massachusetts</option>
                                                              <option value="MI">Michigan</option>
                                                              <option value="NH">New Hampshire</option>
                                                              <option value="NJ">New Jersey</option>
                                                              <option value="NY">New York</option>
                                                              <option value="NC">North Carolina</option>
                                                              <option value="OH">Ohio</option>
                                                              <option value="PA">Pennsylvania</option>
                                                              <option value="RI">Rhode Island</option>
                                                              <option value="SC">South Carolina</option>
                                                              <option value="VT">Vermont</option>
                                                              <option value="VA">Virginia</option>
                                                              <option value="WV">West Virginia</option>
                                                          </optgroup>
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
