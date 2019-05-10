@extends('admin.layouts.adminlayout')

@section('title', 'Invoices Buyer Rejected')

@section('maintitle', 'Invoices Buyer rejected')

@section('content')

<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Invoices Buyer Rejected
                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <table class="table table-bordered table-striped table-condensed flip-content">
                                    <thead class="flip-content">
                                        <tr>
                                            <th>Invoice No</th>
                                            <th>Transaction ID</th>
                                            <th class="numeric">PO reference</th>
                                            <th class="numeric">Buyer</th>
                                            <th class="numeric">Supplier</th>
                                            <th class="numeric">Invoice Amount</th>
                                            <th class="numeric">Due date</th>
                                            <th class="numeric">Status</th>
                                            <th class="numeric">View</th>
                                            <th class="numeric">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>
    <td>INTEL</td>
                                            <td class="numeric">$10000</td>
                                            <td class="numeric">30/11/2019</td>
                                                <td class="numeric">
<span class="label label-sm label-danger">Buyer Rejected</span>
                                                </td>

<td>

<a class="btn btn-raised btn-success btn-large" data-toggle="modal" data-href="#responsive" href="#responsive">View Invoice</a>


</td>



                                            <td>


<button type="button" class="btn btn-primary btn_sizes">Contact supplier</button>

</td>


                                        </tr>







                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->

</div>
</div>
</div>

<!--- responsive model -->
         <div class="extended_modals">
             <div class="modal fade in" id="responsive" tabindex="-1" role="dialog" aria-hidden="false">
                 <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                             <h4 class="modal-title">Invoice No: INV20002</h4>
                         </div>
                         <div class="modal-body">
                             <div class="row">
                                 <div class="col-md-6">
                                     <h4>Some More data</h4>
                                     <p>
                                         <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                     </p>
                                     <p>
                                         <input id="name1" name="name" type="text" placeholder="Your name" class="form-control">
                                     </p>
                                     <p>
                                         <input id="name2" name="name" type="text" placeholder="Your name" class="form-control">
                                     </p>
                                     <p>
                                         <input id="name3" name="name" type="text" placeholder="Your name" class="form-control">
                                     </p>
                                     <p>
                                         <input id="name4" name="name" type="text" placeholder="Your name" class="form-control">
                                     </p>
                                     <p>
                                         <input id="name5" name="name" type="text" placeholder="Your name" class="form-control">
                                     </p>
                                 </div>
                                 <div class="col-md-6">
                                     <h4>Some More data</h4>
                                     <p>
                                         <input id="name6" name="name" type="text" placeholder="Your name" class="form-control">
                                     </p>
                                     <p>
                                         <input id="name7" name="name" type="text" placeholder="Your name" class="form-control">
                                     </p>
                                     <p>
                                         <input id="name8" name="name" type="text" placeholder="Your name" class="form-control">
                                     </p>
                                     <p>
                                         <input id="name9" name="name" type="text" placeholder="Your name" class="form-control">
                                     </p>
                                     <p>
                                         <input id="name10" name="name" type="text" placeholder="Your name" class="form-control">
                                     </p>
                                     <p>
                                         <input id="name41" name="name" type="text" placeholder="Your name" class="form-control">
                                     </p>
                                 </div>
                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>

                         </div>
                     </div>
                 </div>
             </div>
           </div>
@endsection
