@extends('layouts.admin_panel')

@section('title', 'Payments - FALCON')
@section('pageTitle', 'Payments')
@section('msg')
    hey {{ Auth::user()->name }}! check all payments 🔥
@endsection

@section('main')
    <main id="payments">
        <!-- search bar -->
        <div class="search_bar">
            <input id="searchBar" type="text" placeholder="Search payment details here ...">
            <img src="{{ asset('assets/pictures/search_icon.svg') }}" alt="">
        </div>

        <!-- users table -->
        <table>
            <thead>
                <tr>
                    <th>Invoice Id</th>
                    <th>Method</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="dataList">
                <tr>
                    <td>101</td>
                    <td>Card</td>
                    <td>৳ 800</td>
                    <td>Pending</td>
                    <td>12 Dec, 2022</td>
                    <td>
                        <a href="javascript:void()" onclick="viewOpen()" class="button view">Details</a>
                        <a href="javascript:void()" onclick="deleteOpen()" class="button delete">Approve</a>
                        <a href="tel:01400492967" class="button">Call</a>
                    </td>
                </tr>
                <tr>
                    <td>102</td>
                    <td>Bkash</td>
                    <td>৳ 1000</td>
                    <td>Paid</td>
                    <td>06 Dec, 2022</td>
                    <td>
                        <a href="javascript:void()" onclick="viewOpen()" class="button view">Details</a>
                        <a href="javascript:void()" onclick="deleteOpen()" class="button delete">Approve</a>
                        <a href="tel:01400492967" class="button">Call</a>
                    </td>
                </tr>
                <tr>
                    <td>101</td>
                    <td>Cash</td>
                    <td>৳ 1500</td>
                    <td>Paid</td>
                    <td>03 Dec, 2022</td>
                    <td>
                        <a href="javascript:void()" onclick="viewOpen()" class="button view">Details</a>
                        <a href="javascript:void()" onclick="deleteOpen()" class="button delete">Approve</a>
                        <a href="tel:01400492967" class="button">Call</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- view modal -->
        <div class="modal_container" id="viewModal">
            <div class="modal">
                <div class="modal_top">
                    <h3 class="modal_heading">Payment Details</h3>
                    <a href="javascript:void()" onclick="viewClose()" class="modal_close">
                        <img src="{{ asset('assets/pictures/close.svg') }}" alt="">
                    </a>
                </div>
                <hr>
                <!-- modal content -->
                <div class="view">
                    <dl>
                        <div class="dl">
                            <dt>Invoice Id</dt>
                            <dd>101</dd>
                        </div>
                        <div class="dl">
                            <dt>Name</dt>
                            <dd>demo</dd>
                        </div>
                        <div class="dl">
                            <dt>Email</dt>
                            <dd>demo@email.com</dd>
                        </div>
                        <div class="dl">
                            <dt>Amount</dt>
                            <dd>৳ 800</dd>
                        </div>
                        <div class="dl">
                            <dt>Bkash Account Number</dt>
                            <dd>01400492967</dd>
                        </div>
                        <div class="dl">
                            <dt>Bkash Transaction Id</dt>
                            <dd>BK425232FL</dd>
                        </div>
                        <div class="dl">
                            <dt>Payment Status</dt>
                            <dd>Pending</dd>
                        </div>
                        <div class="dl">
                            <dt>Date</dt>
                            <dd>12 Dec, 2022</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        <!-- delete modal -->
        <div class="modal_container" id="deleteModal">
            <div class="modal">
                <div class="modal_top">
                    <h3 class="modal_heading">Are you sure?</h3>
                    <a href="javascript:void()" onclick="deleteClose()" class="modal_close">
                        <img src="{{ asset('assets/pictures/close.svg') }}" alt="">
                    </a>
                </div>
                <hr>
                <!-- modal content -->
                <div class="buttons">
                    <a href="javascript:void()" class="button" onclick="deleteClose()">Cancel</a>
                    <a href="javascript:void()" class="button delete">Approve</a>
                </div>
            </div>
        </div>
    </main>
@endsection
