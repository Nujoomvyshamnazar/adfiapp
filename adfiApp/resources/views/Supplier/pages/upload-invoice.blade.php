@extends('supplier.layouts.adminlayout')

@section('title', 'Upload Invoice')
@section('maintitle', 'Upload Invoice')






@section('content')

<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Invoices Upload

                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">
                              <div class="row">

  <div class="col-md-6 display-no" style="display: block;">
      <div class="form-group ui-draggable-handle" style="position: static;">
          <label for="input-text-1">From Supplier</label>
          <div class="form-group">

                                    <select id="select21" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                        <option value="">Select value...</option>

                                        </optgroup>
                                    </select>
                                    <textarea class="form-control resize_vertical" id="message" name="message" placeholder="" rows="5"></textarea>
                                </div>

                                <div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                  Invoice Particular
                                                        <span class="pull-right">

                                                </span>
                                                    </div>
                                                    <div class="panel-body">


                                                        <form class="form-horizontal">
                                                            <fieldset >
                                                                <div class="form-group">
                                                                    <label for="createEmail" class="control-label col-xs-2">Invoice Date</label>
                                                                    <div class="col-xs-10">
                                                                      <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="livicon" data-name="calendar" data-size="14" data-loop="true"></i>
                                            </div>
                                            <input class="form-control flatpickr" data-dateFormat="l, F j, Y">
                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="createPassword" class="control-label col-xs-2">Password</label>
                                                                    <div class="col-xs-10">
                                                                        <input type="password" class="form-control" id="createPassword" placeholder="Password">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-xs-offset-2 col-xs-10">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <div class="icheckbox_minimal-blue disabled" style="position: relative;"><input type="checkbox" class="square-blue" disabled="" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Remember me</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-xs-offset-2 col-xs-10">
                                                                        <button type="submit" class="btn btn-primary">Login</button>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>

      </div>
  </div>
  <div class="col-md-6 display-no" style="display: block;">
    <div class="form-group ui-draggable-handle" style="position: static;">
        <label for="input-text-1">To Buyer</label>
        <div class="form-group">

                                  <select id="select21" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                      <option value="">Select value...</option>

                                      </optgroup>
                                  </select>
                                  <textarea class="form-control resize_vertical" id="message" name="message" placeholder="" rows="5"></textarea>
                              </div>

    </div>
  </div>
</div>
                            </div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->

</div>
</div>
</div>

@endsection

@section('addheader')
<link href="{{asset('assets/vendors/pickadate/css/default.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/vendors/pickadate/css/default.date.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/vendors/pickadate/css/default.time.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/vendors/flatpickr-calendar/css/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/air-datepicker/css/datepicker.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('addfooter')
<script src="{{asset('assets/vendors/pickadate/js/picker.js')}}" type="text/javascript"></script>
   <script src="{{asset('assets/vendors/pickadate/js/picker.date.js')}}" type="text/javascript"></script>
   <script src="{{asset('assets/vendors/pickadate/js/picker.time.js')}}" type="text/javascript"></script>
   <script src="{{asset('assets/vendors/air-datepicker/js/datepicker.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('assets/vendors/air-datepicker/js/datepicker.en.js')}}" type="text/javascript"></script>
   <script type="text/javascript" src="{{asset('assets/vendors/flatpickr-calendar/js/flatpickr.min.js')}}"></script>
   <script src="{{asset('assets/js/pages/custom_datepicker.js')}}" type="text/javascript"></script>
   @endsection
