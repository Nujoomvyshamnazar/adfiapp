@extends('supplier.layouts.adminlayout')

@section('title', 'Upload Invoice')
@section('maintitle', 'Upload Invoice')

@section('addheader')
@endsection



@section('content')
          <form class="form-horizontal" action="#" method="post">
<section class="content">
  <div class="row">
    <div class="col-md-12">

      <div class="panel panel-primary filterable table-tools">
                       <div class="panel-heading clearfix  ">
                           <div class="panel-title pull-left">
                             <div class="caption">
                                 <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Invoice Entry Form

                             </div>
                           </div>
                           <div class="tools pull-right"></div>
                       </div>
         <div class="panel-body table-responsive">

  <div class="row">
           <div class="col-md-6 display-no" style="display: block;">
             <div class="panel-body">
             <fieldset>
               <div class="form-group ui-draggable-handle" style="position: static;">
                   <label for="input-text-1">From Supplier</label>
                   <div class="form-group">

                                             <select id="select21" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" disabled>
                                                 <option value="">Select value...</option>

                                                 </optgroup>
                                             </select>
                                             <textarea class="form-control resize_vertical" id="message" name="message" placeholder="" rows="5"></textarea>
                                         </div>
         <!--Invoice Particular -->


                 <!--Invoice Particular end-->

               </div>
                 </fieldset>


            </div>
           </div>




           <div class="col-md-6 display-no" style="display: block;">
              <div class="panel-body">
             <fieldset>
               <div class="form-group ui-draggable-handle" style="position: static;">
                   <label for="input-text-1">To Buyer</label>
                   <div class="form-group">

                     <select id="select21" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                         <option value="">Select value...</option>

                         </optgroup>
                     </select>
                                             <textarea class="form-control resize_vertical" id="message" name="message" placeholder="" rows="5"></textarea>
                                         </div>
         <!--Invoice Particular -->


                 <!--Invoice Particular end-->

               </div>  </fieldset>
               </div>
           </div>

</div>
<!-- Invoice Particular -->
 <div class="row">

   <div class="panel panel-primary filterable table-tools">
                    <div class="panel-heading clearfix  ">
                        <div class="panel-title pull-left">
                          <div class="caption">
                              <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Invoices Particular

                          </div>
                        </div>
                        <div class="tools pull-right"></div>
                    </div>

                <div class="panel-body table-responsive">

                 <div class="row">

   <div class="col-md-6 display-no" style="display: block;">

<div class="panel-body">

                                    <fieldset>
                                        <!-- Name input-->
                                        <div class="form-group">
                                            <label for="createEmail" class="control-label col-xs-4">Invoice Date:</label>
                                            <div class="col-xs-6">
                                              <div class="input-group">
                                   <div class="input-group-addon">
                                   <i class="livicon" data-name="calendar" data-size="14" data-loop="true"></i>
                                   </div>
                                   <input type="text" class="form-control" id="rangepicker4" />
                                   </div>
                                            </div>
                                        </div>


                                   <div class="form-group">
                                   <label class="col-md-4 control-label" for="name">P.O Reference:</label>
                                     <div class="col-md-6">
                                     <input id="name" name="name" type="text" placeholder="" class="form-control"></div>
                                     </div>


                                     <div class="form-group">
                                         <label for="createEmail" class="control-label col-xs-4">Delivery Date</label>
                                         <div class="col-xs-6">
                                           <div class="input-group">
                             <div class="input-group-addon">
                             <i class="livicon" data-name="calendar" data-size="14" data-loop="true"></i>
                             </div>
                             <input type="text" class="form-control" id="daterange1" />
                             </div>
                                         </div>
                                     </div>
                                    </fieldset>

                            </div>

  </div>


    <div class="col-md-6 display-no" style="display: block;">



      <div class="panel-body">

                                          <fieldset>
                                              <!-- Name input-->
                                              <div class="form-group">
                                              <label class="col-md-4 control-label" for="name">Invoice Number</label>
                                                <div class="col-md-6">
                                                <input id="name" name="name" type="text" placeholder="" class="form-control"></div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="createEmail" class="control-label col-xs-4">Invoice Due Date</label>
                                                    <div class="col-xs-6">
                                                      <div class="input-group">
                            <div class="input-group-addon">
                                <i class="livicon" data-name="calendar" data-size="14" data-loop="true"></i>
                            </div>
                          <input type="text" class="form-control" id="daterange3" />
                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                <label class="col-md-4 control-label" for="name">Invoice Total Price:</label>
                                                  <div class="col-md-6">
                                                  <input id="name" name="name" type="text" placeholder="" class="form-control"></div>
                                                  </div>

                                          </fieldset>

                                  </div>



     </div>
                  </div>


                  </div>


     </div> <!-- panel panel-primary filterable table-tools-->
  </div>
<!-- Invoice Particular -->


<!-- Invoice Particular -->
 <div class="row">

   <div class="panel panel-primary filterable table-tools">
                    <div class="panel-heading clearfix  ">
                        <div class="panel-title pull-left">
                          <div class="caption">
                              <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Item Description

                          </div>
                        </div>
                        <div class="pull-right">
                             <button type="button" class="btn btn-success  btn-sm" id="addButton">Add Item</button>
                             <button type="button" class="btn btn-danger btn-sm" id="delButton">Delete Item</button>
                         </div>
                         <div class="tools pull-right"></div>
                        <div class="tools pull-right"></div>
                    </div>

                <div class="panel-body table-responsive">

                 <div class="row">

                     <table class="table table-bordered table-striped table-condensed flip-content">
                         <thead class="flip-content">
                             <tr>
                                <th>#</th>
                                 <th>Item ID</th>
                                 <th>Item Description</th>
                                 <th class="numeric">Item Quantity</th>
                                 <th class="numeric">Item Price</th>

                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>     <input type="checkbox" class="custom-checkbox" value=""></td>
                                 <td><input id="name" name="name" type="text"  class="form-control"></td>
                                 <td><input id="name" name="name" type="text"  class="form-control"></td>
                                 <td><input id="name" name="name" type="text"  class="form-control"></td>

                                 <td class="numeric"><input id="name" name="name" type="text"  class="form-control"></td>
                             </tr>


                         </tbody>
                     </table>


                  </div>


                  </div>


     </div> <!-- panel panel-primary filterable table-tools-->
  </div>
<!-- Invoice Particular -->

<div class="row">

  <div class="panel panel-primary filterable table-tools">
                   <div class="panel-heading clearfix  ">
                       <div class="panel-title pull-left">
                         <div class="caption">
                             <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Attachments

                         </div>
                       </div>

                   </div>
                  <div class="panel-body">








                              <div class="form-group">
                              <label class="col-md-4 control-label" for="name">Upload Invoice (PDF/JPG Only)</label>
                                <div class="col-md-6">
                                 <input type="file" id="input-file-1">
                                </div>




                                                            <div class="col-md-offset-3 col-md-9">

                                                                                                                    </div>



                  </div>




              </div>




                          </div>

                          <div class="col-md-12 text-right">

                                                          <button type="submit" class="btn btn-primary">Submit</button>
                                                          &nbsp;
                                                          <button type="button" class="btn btn-danger">Cancel</button>
                                                          &nbsp;
                                                          <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                                                      </div>
    </div>

         </div> <!-- Table -->

    </div>            <!-- BEGIN SAMPLE TABLE PORTLET-->

   </div>
 </div>
</section>
  </form>
@endsection

@section('addheader')
<link href="{{asset('assets/css/app.css')}}" rel="stylesheet" type="text/css" />
   <!-- end of global css -->
   <!--page level css -->
   <!-- daterange picker -->
   <link href="{{asset('assets/vendors/daterangepicker/css/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('assets/vendors/clockface/css/clockface.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.cs')}}s" rel="stylesheet" type="text/css" />
@endsection

@section('addfooter')

   <script src="{{asset('assets/js/app.js')}}" type="text/javascript"></script>
   <!-- end of global js -->
   <!-- begining of page level js -->
   <script src="{{asset('assets/vendors/moment/js/moment.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('assets/vendors/daterangepicker/js/daterangepicker.js')}}" type="text/javascript"></script>
   <script src="{{asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('assets/vendors/clockface/js/clockface.js')}}" type="text/javascript"></script>
   <script src="{{asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js')}}" type="text/javascript"></script>
   <script src="{{asset('assets/js/pages/datepicker.js')}}" type="text/javascript"></script>
   @endsection
