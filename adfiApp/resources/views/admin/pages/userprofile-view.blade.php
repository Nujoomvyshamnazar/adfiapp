@extends('investor.layouts.adminlayout')

@section('title', 'User Profile')

@section('maintitle', 'User Profile')

@section('content')

<section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav  nav-tabs ">
                        <li class="active">
                            <a href="#tab1" data-toggle="tab">
                                <i class="livicon" data-name="user" data-size="16" data-c="#000" data-hc="#000" data-loop="true"></i> User Profile</a>
                        </li>
                        <li>
                            <a href="#tab2" data-toggle="tab">
                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i> Change Password</a>
                        </li>

                    </ul>
                    <div class="tab-content mar-top">
                        <div id="tab1" class="tab-pane fade active in">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                User Profile
                                            </h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="col-md-4">
                                                <div class="text-center">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail img-file">
                                                            <img src="{{asset('assets/img/authors/avatar3.jpg')}}" width="200" class="img-responsive" height="150" alt="riot">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail img-max">
                                                        </div>
                                                        <div>
                                                            <span class="btn btn-default btn-file ">
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" name="...">
                                                            </span>
                                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped" id="users">
                                                            <tr>
                                                                <td>First Name *</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit User Name">Bella</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Last Name *</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit E-mail">gankunding@hotmail.com</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Company Name</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit Phone Number">(999) 999-9999</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Business Category</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit Address">Sydney, Australia</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email *</td>
                                                                <td>
                                                                    <a href="#" id="status" data-type="select" data-pk="1" data-value="1" data-title="Status"></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Date of Birth</td>
                                                                <td>
                                                                    1 month ago
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Bio (brief intro) *</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit City">Nakia</a>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>Gender *</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit City">Nakia</a>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td>Country</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit City">Nakia</a>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>State</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit City">Nakia</a>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>City</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit City">Nakia</a>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>Address</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit City">Nakia</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Postal/zip</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit City">Nakia</a>
                                                                </td>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tab-pane fade">
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
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                &nbsp;
                                                <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
