@extends('admin.layouts.adminlayout2')

@section('title', 'Invitation Pending')

@section('maintitle', 'Invitation Pending')

@section('content')

<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Offer Pending With Buyer
                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                          <table class="table table-striped table-bordered" id="table1">
                                    <thead class="flip-content">
                                        <tr>
                                            <th>Invoice No</th>
                                            <th>Transaction ID</th>
                                            <th class="numeric">PO reference</th>
                                            <th class="numeric">Buyer</th>
                                            <th class="numeric">Invoice Amount</th>
                                            <th class="numeric">Due date</th>
                                            <th class="numeric">Pending Days</th>
                                            <th class="numeric">Status</th>

                                              <th class="numeric">View</th>
                                            <th class="numeric">Remark</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>

                                            <td class="numeric">$10000</td>
                                            <td class="numeric">30/11/2019</td>
<td class="numeric">3</td>
                                            <td>
<span class="label label-sm label-success">Offer Submitted</span>

</td>

<td class="numeric"><button type="button" class="btn btn-info btn_sizes">view Invoice</button></td>
                                            <td class="numeric">Followup</td>
                                        </tr>


                                    </tbody>
                                    <tfoot>
                                  <tr>
                                    <th>Invoice No</th>
                                    <th>Transaction ID</th>
                                    <th class="numeric">PO reference</th>
                                    <th class="numeric">Buyer</th>
                                    <th class="numeric">Invoice Amount</th>
                                    <th class="numeric">Due date</th>
                                    <th class="numeric">Pending Days</th>
                                




                                  </tr>
                              </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->

</div>
</div>
</div>


@endsection
@section('addheader')

<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datatables/css/dataTables.bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/select2/css/select2.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/select2/css/select2-bootstrap.css')}}" />

@endsection

@section('addfooter')

<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/jquery.dataTables.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.bootstrap.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.responsive.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/vendors/select2/js/select2.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/js/pages/table-advanced2.js')}}"></script>
@endsection
