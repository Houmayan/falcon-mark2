@extends('layouts.admin_panel')

@section('title', 'Dues - FALCON')
@section('pageTitle', 'dues')
@section('msg')
    hey {{ Auth::user()->name }}! here is all dues of users 🔥
@endsection

@section('main')
    <main id="dues">
        <!-- search bar -->
        <div class="search_bar">
            <input id="searchBar" type="text" placeholder="Search dues here ...">
            <img src="{{ asset('assets/pictures/search_icon.svg') }}" alt="">
        </div>

        <!-- users table -->
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Subscription Ended</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="dataList">
                <tr>
                    <td>101</td>
                    <td>John</td>
                    <td>৳ 800</td>
                    <td>10 Dec, 2022</td>
                    <td>
                        <a href="javascript:void()" onclick="viewOpen()" class="button view">Details</a>
                        <a href="javascript:void()" onclick="editOpen()" class="button edit">Notify</a>
                        <a href="tel:01400492967" class="button">Call</a>
                    </td>
                </tr>
                <tr>
                    <td>102</td>
                    <td>demo1</td>
                    <td>৳ 1000</td>
                    <td>09 Dec, 2022</td>
                    <td>
                        <a href="javascript:void()" onclick="viewOpen()" class="button view">Details</a>
                        <a href="javascript:void()" onclick="editOpen()" class="button edit">Notify</a>
                        <a href="tel:01400492967" class="button">Call</a>
                    </td>
                </tr>
                <tr>
                    <td>101</td>
                    <td>demo2</td>
                    <td>৳ 1500</td>
                    <td>05 Dec, 2022</td>
                    <td>
                        <a href="javascript:void()" onclick="viewOpen()" class="button view">Details</a>
                        <a href="javascript:void()" onclick="editOpen()" class="button edit">Notify</a>
                        <a href="tel:01400492967" class="button">Call</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- details modal -->
        <div class="modal_container" id="viewModal">
            <div class="modal">
                <div class="modal_top">
                    <h3 class="modal_heading">Due Details</h3>
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
                            <dt>Plan</dt>
                            <dd>Basic</dd>
                        </div>
                        <div class="dl">
                            <dt>Subscription Id</dt>
                            <dd>2342</dd>
                        </div>
                        <div class="dl">
                            <dt>Subscription Started</dt>
                            <dd>10 Nov, 2022</dd>
                        </div>
                        <div class="dl">
                            <dt>Subscription Ended</dt>
                            <dd>10 Dec, 2022</dd>
                        </div>
                        <div class="dl">
                            <dt>Due Amount</dt>
                            <dd>৳ 800</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        <!-- notify modal -->
        <div class="modal_container" id="editModal">
            <div class="modal">
                <div class="modal_top">
                    <h3 class="modal_heading">Notify User</h3>
                    <a href="javascript:void()" onclick="editClose()" class="modal_close">
                        <img src="{{ asset('assets/pictures/close.svg') }}" alt="">
                    </a>
                </div>
                <hr>
                <!-- modal content -->
                <form action="" method="post" enctype="multipart/form-data" class="edit">
                    <input type="number" name="id" id="id" value="101" disabled hidden>
                    <input type="text" name="name" id="name" value="demo" disabled hidden>
                    <input type="email" name="email" id="email" value="demo@gmail.com" disabled hidden>
                    <div class="input">
                        <label for="desc">Message</label>
                        <textarea name="desc" id="desc">Hey John!😢 You have due in Falcon. The amount is ৳ 800. Kindly clear it to stay connected with Falcon.</textarea>
                    </div>
                    <div class="buttons">
                        <button type="reset" class="button cancel">Cancel</button>
                        <button type="submit" class="button action">Send Mail</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
