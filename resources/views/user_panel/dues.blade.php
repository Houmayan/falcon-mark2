@extends('layouts.user_panel')

@section('title', 'Dues - FALCON')
@section('pageTitle', 'dues')
@section('msg', 'hey john! you have due 😢')
@section('msg')
    hey {{ Auth::user()->name }}! you have due 😢
@endsection

@section('main')
    <main id="dues">
        <div class="due_container">
            <div class="due_card">
                <div>
                    <img src="{{ asset('assets/pictures/dues-icon.svg') }}" alt="">
                    <h3 class="heading">Dues</h3>
                </div>
                <p class="due_amount">৳ <span>800</span></p>
            </div>
            <div class="due_table">
                <h3 class="heading">Dues</h3>
                <table>
                    <tr>
                        <th>Due Id</th>
                        <th>Amount</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>28</td>
                        <td>৳ <span>800</span></td>
                        <td>
                            <a href="javascript:void()" onclick="modalOpen()" class="action">
                                <img src="{{ asset('assets/pictures/detials_icon.svg') }}" alt="">
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <img src="{{ asset('assets/pictures/due_illustration.svg') }}" alt="" class="illustration">

        <!-- due modal -->
        <div class="modal_container" id="modal">
            <div class="modal">
                <div class="modal_top">
                    <h3 class="modal_heading">Due Details</h3>
                    <a href="javascript:void()" onclick="modalClose()" class="modal_close">
                        <img src="{{ asset('assets/pictures/close.svg') }}" alt="">
                    </a>
                </div>
                <hr>
                <form action="{{ route('checkout') }}" method="get" enctype="multipart/form-data" class="due_modal">
                    @csrf
                    <table>
                        <tr>
                            <td>User Name:</td>
                            <td>John</td>
                        </tr>
                        <tr>
                            <td>Subscription Plan:</td>
                            <td>Basic</td>
                        </tr>
                        <tr>
                            <td>Subscription Id:</td>
                            <td>flc23423</td>
                        </tr>
                        <tr>
                            <td>Subscription Started:</td>
                            <td>10 Nov, 2022</td>
                        </tr>
                        <tr>
                            <td>Subscription Ended:</td>
                            <td>10 Dec, 2022</td>
                        </tr>
                        <tr>
                            <td>Due Amount:</td>
                            <td>৳ 800</td>
                        </tr>
                    </table>
                    <input type="hidden" name="due" value="800">
                    <button class="button due_pay">Pay ৳800</button>
                </form>
            </div>
        </div>
    </main>
@endsection
