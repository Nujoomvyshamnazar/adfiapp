@extends('supplier.layouts.adminlayout')

@section('title', 'Suppliers KYC Profile')

@section('maintitle', 'Suppliers KYC Profile')
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
                            <div class="pull-right">
                              <button type="button" class="btn btn-warning btn_sizes">Update</button>
                            </div>
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
                                                                          <select class="form-control">
                                          @include('supplier.includes.countrylist')

                                        </select>
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
                                                                          <select class="form-control">
                                          @include('supplier.includes.countrylist')

                                        </select>
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
<!-- This is sample-->


<div class="row">
          <div class="col-lg-12">
              <div class="panel panel-primary">
                  <div class="panel-heading clearfix">
                      <h3 class="panel-title pull-left add_remove_title">
                          <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Board of Directors and Senior Management :
                      </h3>
                      <div class="pull-right">
                          <button type="button" class="btn btn-success  btn-sm" id="addButton">Add row</button>
                          <button type="button" class="btn btn-danger btn-sm" id="delButton">Delete row</button>
                      </div>
                      <div class="tools pull-right"></div>
                  </div>
                  <div class="panel-body table-responsive">
                                   <table class="table table-striped table-bordered" id="table2">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Age</th>
                                  <th>Title</th>
                                  <th>
                                    Country of residence
                                  </th>
                                  <th>
                              Years with the establishment
                                  </th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1.</td>
                                  <td><input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div></td>
                                  <td>

                                    <input id="name" name="name" type="text" placeholder="Your name" class="col-md-3 form-control"></div>

                                  </td>
                                  <td>
                                      <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                  </td>
                                  <td>
                                    <select class="form-control">
    @include('supplier.includes.countrylist')

  </select>
                                  </td>
                                  <td>
                                      <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                  </td>
                              </tr>


                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>




<!-- this is another-->

<!-- This is sample-->


<div class="row">
          <div class="col-lg-12">
              <div class="panel panel-primary">
                  <div class="panel-heading clearfix">
                      <h3 class="panel-title pull-left add_remove_title">
                          <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Shareholders Information :
                      </h3>
                      <div class="pull-right">
                          <button type="button" class="btn btn-success  btn-sm" id="addButton">Add row</button>
                          <button type="button" class="btn btn-danger btn-sm" id="delButton">Delete row</button>
                      </div>
                      <div class="tools pull-right"></div>
                  </div>
                  <div class="panel-body table-responsive">
                                   <table class="table table-striped table-bordered" id="table2">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Nationality</th>
                                  <th>Shareholding %</th>
                                  <th>
                                  Date of Birth
                                  </th>
                                  <th>
                              Country of birth
                                  </th>
                                  <th>
                              Passport Number
                                  </th>
                                  <th>
                              Physical address
                                  </th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1.</td>
                                  <td><input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div></td>
                                  <td>

                                    <input id="name" name="name" type="text" placeholder="Your name" class="col-md-3 form-control"></div>

                                  </td>
                                  <td>
                                      <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                  </td>
                                  <td>
                                    <select class="form-control">
    @include('supplier.includes.countrylist')

  </select>
                                  </td>
                                  <td>
                                      <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                  </td>
                                  <td>
                                      <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                  </td>
                                  <td>
                                      <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                  </td>
                              </tr>


                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>




<!-- this is another-->


<!-- This is sample-->


<div class="row">
          <div class="col-lg-12">
              <div class="panel panel-primary">
                  <div class="panel-heading clearfix">
                      <h3 class="panel-title pull-left add_remove_title">
                          <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Beneficial Owner:
                      </h3>
                      <div class="pull-right">
                          <button type="button" class="btn btn-success  btn-sm" id="addButton">Add row</button>
                          <button type="button" class="btn btn-danger btn-sm" id="delButton">Delete row</button>
                      </div>
                      <div class="tools pull-right"></div>
                  </div>
                  <div class="panel-body table-responsive">
                                   <table class="table table-striped table-bordered" id="table2">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Country</th>
                                  <th>Shareholding %</th>
                                  <th>
                                  Physical Address
                                  </th>

                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1.</td>
                                  <td><input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div></td>
                                  <td>

                                    <input id="name" name="name" type="text" placeholder="Your name" class="col-md-3 form-control"></div>

                                  </td>
                                  <td>
                                    <select class="form-control">
    @include('supplier.includes.countrylist')

  </select>
                                  </td>
                                  <td>
                                      <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                  </td>



                              </tr>


                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>




<!-- this is another-->


<!-- This is sample-->


<div class="row">
          <div class="col-lg-12">
              <div class="panel panel-primary">
                  <div class="panel-heading clearfix">
                      <h3 class="panel-title pull-left add_remove_title">
                          <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Details of major Clients :
                      </h3>
                      <div class="pull-right">
                          <button type="button" class="btn btn-success  btn-sm" id="addButton">Add row</button>
                          <button type="button" class="btn btn-danger btn-sm" id="delButton">Delete row</button>
                      </div>
                      <div class="tools pull-right"></div>
                  </div>
                  <div class="panel-body table-responsive">
                                   <table class="table table-striped table-bordered" id="table2">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Country</th>
                                  <th>Addresss</th>
                                  <th>
                                Location
                                  </th>
                                  <th>
Yearly Turnover
            </th>                </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1.</td>
                                  <td><input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div></td>
                                  <td>

                                    <input id="name" name="name" type="text" placeholder="Your name" class="col-md-3 form-control"></div>

                                  </td>
                                  <td>
                                    <select class="form-control">
    @include('supplier.includes.countrylist')

  </select>
                                  </td>
                                  <td>
                                      <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                  </td>

                                  <td>
                                      <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                  </td>


                              </tr>


                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>




<!-- this is another-->

<!-- This is sample-->


<div class="row">
          <div class="col-lg-12">
              <div class="panel panel-primary">
                  <div class="panel-heading clearfix">
                      <h3 class="panel-title pull-left add_remove_title">
                          <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Details of major Suppliers :
                      </h3>
                      <div class="pull-right">
                          <button type="button" class="btn btn-success  btn-sm" id="addButton">Add row</button>
                          <button type="button" class="btn btn-danger btn-sm" id="delButton">Delete row</button>
                      </div>
                      <div class="tools pull-right"></div>
                  </div>
                  <div class="panel-body table-responsive">
                                   <table class="table table-striped table-bordered" id="table2">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Country</th>
                                  <th>Addresss</th>
                                  <th>
                                Location
                                  </th>
                                  <th>
Yearly Turnover
            </th>                </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1.</td>
                                  <td><input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div></td>
                                  <td>

                                    <input id="name" name="name" type="text" placeholder="Your name" class="col-md-3 form-control"></div>

                                  </td>
                                  <td>
                                    <select class="form-control">
    @include('supplier.includes.countrylist')

  </select>
                                  </td>
                                  <td>
                                      <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                  </td>

                                  <td>
                                      <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                  </td>


                              </tr>


                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>




<!-- this is another-->
                                          </div>





                                          <div class="tab-pane" id="tab2">
                                              <h2 class="hidden">&nbsp;</h2>




                                              <!-- major Suppliers start -->

                                                                                                                      <div class="col-md-12">
                                                                                                                          <div class="panel panel-primary">
                                                                                                                              <div class="panel-heading">
                                                                                                                                  <h4 class="panel-title">Anticipated Monthly activity:</h4>

                                                                                                                              </div>
                                                                                                                              <div class="panel-body">
                                                                                                                                <fieldset>
                                                                                                                                    <!-- Name input-->
                                                                                                                                    <div class="form-group">
                                                                                                                                        <label class="col-md-3 control-label" for="name">Invoices /Buyer</label>
                                                                                                                                        <div class="col-md-9">
                                                                                                                                            <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                                                                                                                    </div>

                                                                                                                                    <div class="form-group">
                                                                                                                                        <label class="col-md-3 control-label" for="name">Invoices Generated/Month</label>
                                                                                                                                        <div class="col-md-9">
                                                                                                                                            <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                                                                                                                    </div>

                                                                                                                                    <div class="form-group">
                                                                                                                                        <label class="col-md-3 control-label" for="name">Average Credit Period / Buyer</label>
                                                                                                                                        <div class="col-md-9">
                                                                                                                                            <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                                                                                                                    </div>

                                                                                                                                    <div class="form-group">
                                                                                                                                        <label class="col-md-3 control-label" for="name">Current Banks / Sources of Finance </label>
                                                                                                                                        <div class="col-md-9">
                                                                                                                                            <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                                                                                                                    </div>



                                                                                                                                </fieldset>
                                                                                                                              </div>
                                                                                                                          </div>
                                                                                                                      </div>

                                              <!-- major Suppliers ends -->







                                          </div>
                                          <div class="tab-pane" id="tab3">


                                            <div class="form-group ">
                                            <label class="col-md-4 control-label" for="example-file-input">Valid Trade License/ Chamber of commerce </label>
                                            <div class="col-md-6 mar-top">
                                            <input type="file" id="example-file-input" name="example-file-input">
                                            </div>
                                            </div>


                                            <div class="form-group ">
                                            <label class="col-md-4 control-label" for="example-file-input">	MOA/AOA with amendments </label>
                                            <div class="col-md-6 mar-top">
                                            <input type="file" id="example-file-input" name="example-file-input">
                                            </div>
                                            </div>


                                            <div class="form-group ">
                                            <label class="col-md-4 control-label" for="example-file-input">Passport Copies of the Promoters/ Signatories </label>
                                            <div class="col-md-6 mar-top">
                                            <input type="file" id="example-file-input" name="example-file-input">
                                            </div>
                                            </div>


                                            <div class="form-group ">
                                            <label class="col-md-4 control-label" for="example-file-input">Cancelled Cheque image to validate the bank details for each of the banks </label>
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
