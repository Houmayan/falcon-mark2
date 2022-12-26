@extends('layouts.user_panel')

@section('title', 'Transactions - FALCON')
@section('pageTitle', 'transactions')
@section('msg')
    hey {{ Auth::user()->name }}! here is all you gave to falcon 😃
@endsection

@section('main')
    <main id="transactions">
        <div class="transaction_table">
            <h3 class="table_title">
                <img src="{{ asset('assets/pictures/transactions-icon.svg') }}" alt="">
                recent transactions
            </h3>
            <table>
                <thead>
                    <tr>
                        <th>Invoice Id</th>
                        <th>Amount</th>
                        <th>Payment Status</th>
                        <th>Date</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>৳1500</td>
                        <td>Paid</td>
                        <td>03 oct, 2022</td>
                        <td>
                            <a href="javascript:void()" class="action" onclick="modalOpen()">
                                <img src="{{ asset('assets/pictures/detials_icon.svg') }}" alt="">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- transaction modal -->
        <div class="modal_container" id="modal">
            <div class="modal invoice">
                <div class="modal_top">
                    <h3 class="modal_heading">Invoice Id: 001</h3>
                    <a href="javascript:void()" onclick="modalClose()" class="modal_close">
                        <img src="{{ asset('assets/pictures/close.svg') }}" alt="">
                    </a>
                </div>
                <hr>
                <div class="transaction_modal">
                    <div class="brand">
                        <img src="{{ asset('assets/pictures/logo-light.svg') }}" alt="" class="logo">
                    </div>
                    <table class="invoice_info">
                        <tr>
                            <td>User Name:</td>
                            <td>John</td>
                        </tr>
                        <tr>
                            <td>Subscription Id:</td>
                            <td>flc23423</td>
                        </tr>
                        <tr>
                            <td>Subscription Plan:</td>
                            <td>Basic</td>
                        </tr>
                        <tr>
                            <td>Amount:</td>
                            <td>৳ 800</td>
                        </tr>
                        <tr>
                            <td>Payment Status:</td>
                            <td>Paid</td>
                        </tr>
                        <tr>
                            <td>Payment Method:</td>
                            <td>Bkash</td>
                        </tr>
                        <tr>
                            <td>Date:</td>
                            <td>10 Dec, 2022</td>
                        </tr>
                    </table>
                    <table class="pricing">
                        <tr>
                            <td>Subtotal</td>
                            <td>৳ <span>800</span></td>
                        </tr>
                        <tr>
                            <td>Vat (10%)</td>
                            <td>৳ <span>80</span></td>
                        </tr>
                        <tr class="price">
                            <td>Total</td>
                            <td>৳ <span>880</span></td>
                        </tr>
                    </table>
                </div>
                <a href="javascript:void()" onclick="window.print()" class="print">Print Invoice</a>
            </div>
        </div>
    </main>
@endsection
