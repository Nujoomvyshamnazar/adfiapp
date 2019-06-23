@extends('supplier.layouts.adminlayout')

@section('title', 'Submitted Invoices')
@section('maintitle', 'Submitted Invoices')

@section('signin-alert  ')


@endsection



@section('content')

<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Submitted Invoices
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
                                            <th class="numeric">supplier</th>
                                            <th class="numeric">Invoice Amount</th>
                                            <th class="numeric">Due Date</th>
                                            <th class="numeric">Status</th>
                                            <th class="numeric">view invoice</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>
                                            <td class="numeric">INTEL</td>
                                            <td class="numeric">$10000</td>
                                            <td class="numeric">30/11/2019</td>
                                            <td>

<span class="label label-sm label-info">Submitted To Admin</span>

                                            </td>
                                            <td class="numeric"><button type="button" class="btn btn-primary btn_sizes">View</button></td>
                                        </tr>
                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>
                                            <td class="numeric">INTEL</td>
                                            <td class="numeric">$10000</td>
                                            <td class="numeric">30/11/2019</td>
                                            <td>

                            <span class="label label-sm label-danger">Admin Rejected</span>

                                            </td>
                                            <td class="numeric"><button type="button" class="btn btn-primary btn_sizes">View</button></td>
                                        </tr>
                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>
                                            <td class="numeric">INTEL</td>
                                            <td class="numeric">$10000</td>
                                            <td class="numeric">30/11/2019</td>
                                            <td>

<span class="label label-sm label-info">Submitted To Buyer</span>

                                            </td>
                                            <td class="numeric"><button type="button" class="btn btn-primary btn_sizes">View</button></td>
                                        </tr>
                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>
                                            <td class="numeric">INTEL</td>
                                            <td class="numeric">$10000</td>
                                            <td class="numeric">30/11/2019</td>
                                            <td>

                                  <span class="label label-sm label-danger">Buyer Rejected</span>

                                            </td>
                                            <td class="numeric"><button type="button" class="btn btn-primary btn_sizes">View</button></td>
                                        </tr>
                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>
                                            <td class="numeric">INTEL</td>
                                            <td class="numeric">$10000</td>
                                            <td class="numeric">30/11/2019</td>
                                            <td>

                                  <span class="label label-sm label-success">Buyer Approved</span>

                                            </td>
                                            <td class="numeric"><button type="button" class="btn btn-primary btn_sizes">View</button></td>
                                        </tr>

                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>
                                            <td class="numeric">INTEL</td>
                                            <td class="numeric">$10000</td>
                                            <td class="numeric">30/11/2019</td>
                                            <td>

                                  <span class="label label-sm label-warning">Offer Pending</span>

                                            </td>
                                            <td class="numeric"><button type="button" class="btn btn-primary btn_sizes">View</button></td>
                                        </tr>

                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>
                                            <td class="numeric">INTEL</td>
                                            <td class="numeric">$10000</td>
                                            <td class="numeric">30/11/2019</td>
                                            <td>

                                  <span class="label label-sm label-info">Offer Submitted</span>

                                            </td>
                                            <td class="numeric"><button type="button" class="btn btn-primary btn_sizes">View</button></td>
                                        </tr>

                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>
                                            <td class="numeric">INTEL</td>
                                            <td class="numeric">$10000</td>
                                            <td class="numeric">30/11/2019</td>
                                            <td>

                                  <span class="label label-sm label-success">Paid</span>

                                            </td>
                                            <td class="numeric"><button type="button" class="btn btn-primary btn_sizes">View</button></td>
                                        </tr>

                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>
                                            <td class="numeric">INTEL</td>
                                            <td class="numeric">$10000</td>
                                            <td class="numeric">30/11/2019</td>
                                            <td>

                                  <span class="label label-sm label-danger">Buyer Returned</span>

                                            </td>
                                            <td class="numeric"><button type="button" class="btn btn-primary btn_sizes">View</button></td>
                                        </tr>
                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>
                                            <td class="numeric">INTEL</td>
                                            <td class="numeric">$10000</td>
                                            <td class="numeric">30/11/2019</td>
                                            <td>

                                  <span class="label label-sm label-success">Investor Paid</span>

                                            </td>
                                            <td class="numeric"><button type="button" class="btn btn-primary btn_sizes">View</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->

</div>
</div>
</div>

@endsection
