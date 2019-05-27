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
<!--Invoice Particular -->
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
                                                                    <label for="createEmail" class="control-label col-xs-4">Invoice Date</label>
                                                                    <div class="col-xs-6">
                                                                      <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="livicon" data-name="calendar" data-size="14" data-loop="true"></i>
                                            </div>
                                            <input class="form-control flatpickr" data-dateFormat="l, F j, Y">
                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                <label class="col-md-4 control-label" for="name">Invoice Number</label>
                                                                  <div class="col-md-6">
                                                                  <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                                                  </div>

                                                                  <div class="form-group">
                                                                  <label class="col-md-4 control-label" for="name">P.O Reference</label>
                                                                    <div class="col-md-6">
                                                                    <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="createEmail" class="control-label col-xs-4">Invoice Due Date</label>
                                                                        <div class="col-xs-6">
                                                                          <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="livicon" data-name="calendar" data-size="14" data-loop="true"></i>
                                                </div>
                                                <input class="form-control flatpickr" data-dateFormat="l, F j, Y">
                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group">
                                                                        <label for="createEmail" class="control-label col-xs-4">Delivery  Due Date</label>
                                                                        <div class="col-xs-6">
                                                                          <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="livicon" data-name="calendar" data-size="14" data-loop="true"></i>
                                                </div>
                                                <input class="form-control flatpickr" data-dateFormat="l, F j, Y">
                                            </div>
                                                                        </div>
                                                                    </div>

                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>

        <!--Invoice Particular end-->

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

                              <div class="panel panel-primary">
                                                  <div class="panel-heading">
                                                Item Description
                                                      <span class="pull-right">

                                              </span>
                                                  </div>
                                                  <div class="panel-body">


                                                      <form class="form-horizontal">
                                                          <fieldset >




                                                              <div class="form-group">
                                                              <label class="col-md-4 control-label" for="name">Item ID</label>
                                                                <div class="col-md-6">
                                                                <input id="name" name="name" type="text" placeholder="Item ID" class="form-control"></div>
                                                                </div>

                                                                <div class="form-group">
                                                                <label class="col-md-4 control-label" for="name">Item Description</label>
                                                                  <div class="col-md-6">
                                                                    <textarea class="form-control resize_vertical" id="message" name="message" placeholder="" rows="3"></textarea></div>
                                                                  </div>

                                                                  <div class="form-group">
                                                                  <label class="col-md-4 control-label" for="name">Item Quantity</label>
                                                                    <div class="col-md-6">
                                                                    <input id="name" name="name" type="text" placeholder="Item ID" class="form-control"></div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                    <label class="col-md-4 control-label" for="name">Invoice Value</label>
                                                                      <div class="col-md-6">
                                                                      <input id="name" name="name" type="text" placeholder="Item ID" class="form-control"></div>
                                                                      </div>




                                                          </fieldset>




                                                      </form>
                                                  </div>




                                              </div>

    </div>
  </div>
</div>

<div class="panel panel-primary">
                    <div class="panel-heading">
                  Invoice Upload
                        <span class="pull-right">

                </span>
                    </div>
                    <div class="panel-body">








                                <div class="form-group">
                                <label class="col-md-4 control-label" for="name">Upload Invoice</label>
                                  <div class="col-md-6">
                                   <input type="file" id="input-file-1">
                                  </div>


                                  <div class="col-md-12 text-right">
                                                                
                                                                  <button type="submit" class="btn btn-primary">Submit</button>
                                                                  &nbsp;
                                                                  <button type="button" class="btn btn-danger">Cancel</button>
                                                                  &nbsp;
                                                                  <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                                                              </div>

                                                              <div class="col-md-offset-3 col-md-9">

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
