@extends('layouts.admin_panel')

@section('title', 'Admin Dashboard - FALCON')
@section('pageTitle', 'dashboard')
@section('msg')
    welcome {{ Auth::user()->name }}! floor is your 🔥
@endsection

@section('main')
    <main id="dashboard">
        <div class="card_container">
            <!-- user status -->
            <a href="{{ route('adminUsers') }}" class="card">
                <div class="card_info">
                    <img src="/assets/pictures/users_icon.svg" alt="" class="card_img">
                    <h3 class="card_heading">Users</h3>
                </div>
                <p class="total">20</p>
            </a>

            <!-- connection status -->
            <a href="{{ route('adminConnections') }}" class="card">
                <div class="card_info">
                    <img src="/assets/pictures/connection-icon.svg" alt="" class="card_img">
                    <h3 class="card_heading">Connected</h3>
                </div>
                <p class="total">16</p>
            </a>

            <!-- dues status -->
            <a href="{{ route('adminDues') }}" class="card">
                <div class="card_info">
                    <img src="/assets/pictures/dues-icon.svg" alt="" class="card_img">
                    <h3 class="card_heading">Dues</h3>
                </div>
                <p class="total">4</p>
            </a>

            <!-- subscription status -->
            <a href="{{ route('adminSubscriptions') }}" class="card">
                <div class="card_info">
                    <img src="/assets/pictures/subscription-icon.svg" alt="" class="card_img">
                    <h3 class="card_heading">Subscriptions</h3>
                </div>
                <p class="total">18</p>
            </a>

            <!-- payment status -->
            <a href="{{ route('adminPayments') }}" class="card">
                <div class="card_info">
                    <img src="/assets/pictures/payment_icon.svg" alt="" class="card_img">
                    <h3 class="card_heading">Pending Approval</h3>
                </div>
                <p class="total">2</p>
            </a>
        </div>
    </main>
@endsection
