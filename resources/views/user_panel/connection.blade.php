@extends('layouts.user_panel')

@section('title', 'Connection - FALCON')
@section('pageTitle', 'connection details')
@section('msg')
    hey {{ Auth::user()->name }}! here is your connection details 😃
@endsection

@section('main')
    <main id="connection">
        <div class="connection_details">
            <div class="status_card connection">
                <img src="{{ asset('assets/pictures/connection-icon.svg') }}" alt="" class="icon">
                <h3 class="status">Connected</h3>
            </div>
            <div class="status_card subscription">
                <img src="{{ asset('assets/pictures/subscription-icon.svg') }}" alt="" class="icon">
                <h3 class="status">Basic</h3>
            </div>
            <div class="details">
                <table>
                    <tr>
                        <th>Connection Status</th>
                        <td>Connected</td>
                    </tr>
                    <tr>
                        <th>Subscription Id</th>
                        <td>fls356</td>
                    </tr>
                    <tr>
                        <th>Subscription Started</th>
                        <td>10 Nov, 2022</td>
                    </tr>
                    <tr>
                        <th>Subscription Ends</th>
                        <td>10 Dec, 2022</td>
                    </tr>
                    <tr>
                        <th>Speed</th>
                        <td>10 mbps</td>
                    </tr>
                    <tr>
                        <th>Charge</th>
                        <td>৳ 800 /month</td>
                    </tr>
                </table>
            </div>
        </div>
        <img src="{{ asset('assets/pictures/connection-illustration.svg') }}" alt="" class="connection_img">
    </main>
@endsection
