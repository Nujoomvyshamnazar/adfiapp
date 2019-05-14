@extends('investor.layouts.adminlayout')

@section('title', 'Bid Lost')

@section('maintitle', 'Bid Lost')

@section('content')
<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Bid Lost
                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <table class="table table-bordered table-striped table-condensed flip-content">
                                    <thead class="flip-content">
                                        <tr>
                                            <th>Invoice No</th>
                                            <th>Transaction ID</th>
                                            <th class="numeric">PO reference</th>
                                            <th class="numeric">Supplier</th>
                                            <th class="numeric">Buyer</th>
                                            <th class="numeric">Invoice Amount</th>
                                            <th class="numeric">Due date</th>

                                            <th class="numeric">Action</th>
                                            <th class="numeric">Remark</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>
  <td>Intel</td>
                                            <td class="numeric">$10000</td>
                                            <td class="numeric">30/11/2019</td>
                                            <td>
<button type="button" class="btn btn-primary btn_sizes">Reject Bid</button>

</td>

                                            <td class="numeric">Followup</td>
                                        </tr>

                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>
  <td>Intel</td>
                                            <td class="numeric">$10000</td>
                                            <td class="numeric">30/11/2019</td>
                                            <td>
<button type="button" class="btn btn-danger btn_sizes">Bid Rejected</button>

</td>

                                            <td class="numeric">Followup</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->
@endsection
