@extends('investor.layouts.adminlayout')

@section('title', 'Submit KYC')

@section('maintitle', 'Submit KYC')
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
                                  <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i> Submit KYC
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

                                                                    <div class="form-group required">
                                                                        <label class="control-label col-md-3" for="first_Name">First Name:</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control required" id="first_name" placeholder="" >
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group required">
                                                                        <label class="control-label col-md-3" for="first_Name">Date of Birth:</label>
                                                                        <div class="col-md-9">
                                                                                  <input type="text" class="form-control" id="rangepicker4" />
                                                                        </div>
                                                                    </div>





                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3" for="first_Name">Nationality :</label>
                                                                        <div class="col-md-9">
                                                                          <select class="form-control">
                                          @include('supplier.includes.countrylist')

                                        </select>
                                                                        </div>
                                                                    </div>














                                                                </div>
                                                                <div class="col-md-6">



                                                                  <div class="form-group required">
                                                                      <label class="control-label col-md-3" for="first_Name">Last Name:</label>
                                                                      <div class="col-md-9">
                                                                          <input type="text" class="form-control required" id="last_name" placeholder="" >
                                                                      </div>
                                                                  </div>

                                                                  <div class="form-group required">
                                                                      <label class="control-label col-md-3" for="first_Name">Gender:</label>
                                                                      <div class="col-md-9">
                                                                        <select class="form-control">
                                                                          <option value="">Select</option>
	                                                                           <option value="male">Male</option>
                                                                             <option value="female">Female</option>


                                      </select>
                                                                      </div>
                                                                  </div>


                                                                  <div class="form-group required">
                                                                      <label class="control-label col-md-3" for="first_Name">Residency Status:</label>
                                                                      <div class="col-md-9">
                                                                        <select class="form-control">
                                                                          <option value="">Select</option>
                                                                             <option value="permanent residence">Permanent residence</option>
                                                                             <option value="Non-permanent residence">Non-permanent residence</option>

                                      </select>
                                                                      </div>
                                                                  </div>








                                                                </div>





                                                        </div>


                                                        <!-- This is sample-->


                                                        <div class="row">
                                                                  <div class="col-lg-12">
                                                                      <div class="panel panel-primary">
                                                                          <div class="panel-heading clearfix">
                                                                              <h3 class="panel-title pull-left add_remove_title">
                                                                                  <i class="livicon" data-name="user" data-size="19" data-loop="true" data-c="#fff" data-hc="white"></i> Identity Details  :
                                                                              </h3>

                                                                              <div class="tools pull-right"></div>
                                                                          </div>
                                                                          <div class="panel-body table-responsive">

                                                                     <div class="col-md-6">
                                                                       <div class="form-group required">
                                                                           <label class="control-label col-md-3" for="first_Name">ID Type:</label>
                                                                           <div class="col-md-9">
                                                                            <input type="text" class="form-control required" id="last_name" placeholder="" >
                                                                           </div>
                                                                       </div>

                                                                       <div class="form-group required">
                                                                           <label class="control-label col-md-3" for="first_Name">Date of Issuance:</label>
                                                                           <div class="col-md-9">
                                                                            <input type="text" class="form-control required" id="last_name" placeholder="" >
                                                                           </div>
                                                                       </div>

                                                                       <div class="form-group required">
                                                                           <label class="control-label col-md-3" for="first_Name">Issuing Authority:</label>
                                                                           <div class="col-md-9">
                                                                            <input type="text" class="form-control required" id="last_name" placeholder="" >
                                                                           </div>
                                                                       </div>

                                                                       </div>
                                                                         <div class="col-md-6">

                                                                           <div class="form-group required">
                                                                               <label class="control-label col-md-3" for="first_Name">ID No:</label>
                                                                               <div class="col-md-9">
                                                                                <input type="text" class="form-control required" id="last_name" placeholder="" >
                                                                               </div>
                                                                           </div>

                                                                           <div class="form-group required">
                                                                               <label class="control-label col-md-3" for="first_Name">Date of Expiry:</label>
                                                                               <div class="col-md-9">
                                                                                <input type="text" class="form-control required" id="last_name" placeholder="" >
                                                                               </div>
                                                                           </div>

                                                                        </div>

                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>


                                                              <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="panel panel-primary">
                                                                                <div class="panel-heading clearfix">
                                                                                    <h3 class="panel-title pull-left add_remove_title">
                                                                                        <i class="livicon" data-name="piggybank" data-size="19" data-loop="true" data-c="#fff" data-hc="white"></i> Source of Wealth  :
                                                                                    </h3>

                                                                                    <div class="tools pull-right"></div>
                                                                                </div>
                                                                                <div class="panel-body table-responsive">

                                                                               <div class="col-md-6">
                                                                                 <div class="form-group required">
                                                                                     <label class="control-label col-md-3" for="first_Name">Annual Income :</label>
                                                                                     <div class="col-md-9">
                                                                                      <input type="text" class="form-control required" id="last_name" placeholder="" >
                                                                                     </div>
                                                                                 </div>

                                                                                 <div class="form-group required">
                                                                                     <label class="control-label col-md-3" for="first_Name">Estimated investment corpus or ADFI :</label>
                                                                                     <div class="col-md-9">
                                                                                      <input type="text" class="form-control required" id="last_name" placeholder="" >
                                                                                     </div>
                                                                                 </div>

                                                                               </div>

                                                                               <div class="col-md-6">
                                                                                 <div class="form-group required">
                                                                                     <label class="control-label col-md-3" for="first_Name">Income Source:</label>
                                                                                     <div class="col-md-9">
                                                                                      <input type="text" class="form-control required" id="last_name" placeholder="" >
                                                                                     </div>
                                                                                 </div>
                                                                               </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                        <!-- this is another-->

                                                    </div>



                                          </div>





                                          <div class="tab-pane" id="tab2">
                                              <h2 class="hidden">&nbsp;</h2>




                                              <!-- major Suppliers start -->

                                                                                                                      <div class="col-md-12">

                                                                                                                        <div class="form-group">
                                                                                                                            <label class="col-md-3 control-label" for="name">Buyer Invoices preferred </label>
                                                                                                                            <div class="col-md-9">
                                                                                                                                <input id="name" name="name" type="text" placeholder="" class="form-control"></div>
                                                                                                                        </div>

                                                                                                                        <div class="form-group">
                                                                                                                            <label class="col-md-3 control-label" for="name">Preferred Investment tenure </label>
                                                                                                                            <div class="col-md-9">
                                                                                                                                <input id="name" name="name" type="text" placeholder="" class="form-control"></div>
                                                                                                                        </div>


                                                                                                                        <div class="form-group">
                                                                                                                            <label class="col-md-3 control-label" for="name">Maximum investment /invoice</label>
                                                                                                                            <div class="col-md-9">
                                                                                                                                <input id="name" name="name" type="text" placeholder="" class="form-control"></div>
                                                                                                                        </div>

                                                                                                                        <div class="form-group">
                                                                                                                            <label class="col-md-3 control-label" for="name">Maximum Investment/ month/Half yearly/Annually</label>
                                                                                                                            <div class="col-md-9">
                                                                                                                                <input id="name" name="name" type="text" placeholder="" class="form-control"></div>
                                                                                                                        </div>

                                                                                                                          <div class="panel panel-primary">
                                                                                                                              <div class="panel-heading">
                                                                                                                                  <h4 class="panel-title"><i class="livicon" data-name="bank" data-size="19" data-loop="true" data-c="#fff" data-hc="white"></i> Bank Details:</h4>

                                                                                                                              </div>
                                                                                                                              <div class="panel-body">
                                                                                                                                <fieldset>
                                                                                                                                    <!-- Name input-->

                                                                                                                                    <div class="form-group">
                                                                                                                                        <label class="col-md-3 control-label" for="name">Bank IBAN Number </label>
                                                                                                                                        <div class="col-md-9">
                                                                                                                                            <input id="name" name="name" type="text" placeholder="" class="form-control"></div>
                                                                                                                                    </div>


                                                                                                                                    <div class="form-group">
                                                                                                                                        <label class="col-md-3 control-label" for="name">Bank Name </label>
                                                                                                                                        <div class="col-md-9">
                                                                                                                                            <input id="name" name="name" type="text" placeholder="" class="form-control"></div>
                                                                                                                                    </div>

                                                                                                                                    <div class="form-group">
                                                                                                                                        <label class="col-md-3 control-label" for="name">Branch  </label>
                                                                                                                                        <div class="col-md-9">
                                                                                                                                            <input id="name" name="name" type="text" placeholder="" class="form-control"></div>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group">
                                                                                                                                        <label class="col-md-3 control-label" for="name">Type of account  </label>
                                                                                                                                        <div class="col-md-9">
                                                                                                                                          <select class="form-control">
                                                                                                                                            <option value="">Select</option>
                                                                                                                                               <option value="Current Account">Current Account</option>
                                                                                                                                               <option value="Saving Account">Saving Account</option>

                                                                                                        </select>
                                                                                                                                            </div>
                                                                                                                                    </div>
                                                                                                                                </fieldset>
                                                                                                                              </div>
                                                                                                                          </div>
                                                                                                                      </div>

                                              <!-- major Suppliers ends -->







                                          </div>
                                          <div class="tab-pane" id="tab3">


                                            <div class="form-group ">
                                            <label class="col-md-4 control-label" for="example-file-input">Passport Copies with Visas </label>
                                            <div class="col-md-6 mar-top">
                                            <input type="file" id="example-file-input" name="example-file-input">
                                            </div>
                                            </div>


                                            <div class="form-group ">
                                            <label class="col-md-4 control-label" for="example-file-input">Local ID copy </label>
                                            <div class="col-md-6 mar-top">
                                            <input type="file" id="example-file-input" name="example-file-input">
                                            </div>
                                            </div>


                                            <div class="form-group ">
                                            <label class="col-md-4 control-label" for="example-file-input">Cancelled bank account cheque copy for validating the bank account details

 </label>
                                            <div class="col-md-6 mar-top">
                                            <input type="file" id="example-file-input" name="example-file-input">
                                            </div>
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
