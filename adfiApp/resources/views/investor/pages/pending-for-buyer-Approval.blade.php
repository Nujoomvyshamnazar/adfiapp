@extends('admin.layouts.adminlayout')

@section('title', 'Pending For Buyer Approval')

@section('maintitle', 'Pending For Buyer Approval')

@section('content')

<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Pending For Buyer Approval
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
                                            <th class="numeric">Invoice Amount</th>
                                            <th class="numeric">Due date</th>
                                            <th class="numeric">Status</th>
                                            <th class="numeric">Pending Days</th>
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
                                            <td>
<span class="label label-sm label-success">Offer Submitted</span>

</td>
<td class="numeric">3</td>
                                            <td class="numeric">Followup</td>
                                        </tr>

                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>

                                            <td class="numeric">$10000</td>
                                            <td class="numeric">30/11/2019</td>
                                            <td>
<span class="label label-sm label-danger">Offer Rejected</span>

</td>
<td class="numeric">3</td>
                                            <td class="numeric">Followup</td>
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
