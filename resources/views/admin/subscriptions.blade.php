@extends('layouts.admin_panel')

@section('title', 'Subscriptions - FALCON')
@section('pageTitle', 'Subscriptions')
@section('msg')
    hey {{ Auth::user()->name }}! here is subscriptions 📃
@endsection

@section('main')
    <main id="subscriptions">
        <!-- search bar -->
        <div class="search_bar">
            <input id="searchBar" type="text" placeholder="Search subscription details here ...">
            <img src="{{ asset('assets/pictures/search_icon.svg') }}" alt="">
        </div>

        <!-- users table -->
        <table>
            <thead>
                <tr>
                    <th>Subscription Id</th>
                    <th>Name</th>
                    <th>Plan</th>
                    <th>Price</th>
                    <th>Ends</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="dataList">
                <tr>
                    <td>101</td>
                    <td>demo</td>
                    <td>Basic</td>
                    <td>৳ 800</td>
                    <td>24 Dec, 2022</td>
                    <td>
                        <a href="javascript:void()" onclick="viewOpen()" class="button view">Details</a>
                        <a href="tel:01400492967" class="button">Call</a>
                    </td>
                </tr>
                <tr>
                    <td>102</td>
                    <td>demo1</td>
                    <td>Standard</td>
                    <td>৳ 1000</td>
                    <td>01 Jan, 2022</td>
                    <td>
                        <a href="javascript:void()" onclick="viewOpen()" class="button view">Details</a>
                        <a href="tel:01400492967" class="button">Call</a>
                    </td>
                </tr>
                <tr>
                    <td>103</td>
                    <td>demo2</td>
                    <td>Premium</td>
                    <td>৳ 1500</td>
                    <td>11 Jan, 2022</td>
                    <td>
                        <a href="javascript:void()" onclick="viewOpen()" class="button view">Details</a>
                        <a href="tel:01400492967" class="button">Call</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- details modal -->
        <div class="modal_container" id="viewModal">
            <div class="modal">
                <div class="modal_top">
                    <h3 class="modal_heading">Subscription Details</h3>
                    <a href="javascript:void()" onclick="viewClose()" class="modal_close">
                        <img src="{{ asset('assets/pictures/close.svg') }}" alt="">
                    </a>
                </div>
                <hr>
                <!-- modal content -->
                <div class="view">
                    <dl>
                        <div class="dl">
                            <dt>Id</dt>
                            <dd>101</dd>
                        </div>
                        <div class="dl">
                            <dt>Name</dt>
                            <dd>demo</dd>
                        </div>
                        <div class="dl">
                            <dt>Email</dt>
                            <dd>demo@gmail.com</dd>
                        </div>
                        <div class="dl">
                            <dt>Phone</dt>
                            <dd>01400492967</dd>
                        </div>
                        <div class="dl">
                            <dt>Subscription Id</dt>
                            <dd>213</dd>
                        </div>
                        <div class="dl">
                            <dt>Subscription Started</dt>
                            <dd>10 Dec, 2022</dd>
                        </div>
                        <div class="dl">
                            <dt>Subscription Ends</dt>
                            <dd>12 Dec, 2022</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </main>
@endsection
