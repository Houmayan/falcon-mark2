@extends('layouts.user_panel')

@section('title', 'Dashboard - FALCON')
@section('pageTitle', 'dashboard')
@section('msg')
    welcome {{ Auth::user()->name }}!
@endsection

@section('main')
    <main id="dashboard">
        <div class="status_container">
            <a href="{{ route('connection') }}" class="status">
                <img src="{{ asset('assets/pictures/connection-icon.svg') }}" alt="" class="status_icon">
                <div class="status_info">
                    <h3 class="status_title">connected</h3>
                    <p>your connection status</p>
                </div>
            </a>
            <a href="{{ route('subscription') }}" class="status">
                <img src="{{ asset('assets/pictures/subscription-icon.svg') }}" alt="" class="status_icon">
                <div class="status_info">
                    <h3 class="status_title">standard</h3>
                    <p>your subscription</p>
                </div>
            </a>
            <a href="{{ route('dues') }}" class="status">
                <img src="{{ asset('assets/pictures/dues-icon.svg') }}" alt="" class="status_icon">
                <div class="status_info">
                    <h3 class="status_title">৳ 1500</h3>
                    <p>your due</p>
                </div>
            </a>
        </div>

        <div class="transaction_table">
            <h3 class="table_title">
                <img src="{{ asset('assets/pictures/transactions-icon.svg') }}" alt="">
                recent transactions
            </h3>
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Plan</th>
                        <th>Method</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>premium package subscription</td>
                        <td>bkash</td>
                        <td>৳1500</td>
                        <td>03 oct, 2022</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
