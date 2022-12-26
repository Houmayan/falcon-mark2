@extends('layouts.user_panel')

@section('title', 'Plans - FALCON')
@section('pageTitle', 'choose plan')
@section('msg')
    hey {{ Auth::user()->name }}! choose your subscription plan wisely 😃
@endsection

@section('main')
    <main id="plans">
        <div class="plan_container">
            <!-- basic plan -->
            <form action="{{ route('planurl') }}" method="get" enctype="multipart/form-data" class="plan basic">
                @csrf
                <h4 class="plan_title">basic</h4>

                <table>
                    <tr>
                        <td class="plan_speed">15 <span>mbps</span></td>
                    </tr>
                    <tr>
                        <td>15 mbps speed / Off-Peak</td>
                    </tr>
                    <tr>
                        <td>10 mbps speed / Peak</td>
                    </tr>
                    <tr>
                        <td>24/7 Support</td>
                    </tr>
                    <tr>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td class="plan_price">৳ <span>800</span> /month</td>
                    </tr>
                </table>

                <input type="hidden" name="name" value="Basic">
                <input type="hidden" name="price" value="800">
                <button type="submit" class="action button">Select</button>
            </form>

            <!-- standard plan -->
            <form action="{{ route('planurl') }}" method="get" enctype="multipart/form-data" class="plan standard">
                @csrf
                <h4 class="plan_title">standard</h4>

                <table>
                    <tr>
                        <td class="plan_speed">25 <span>mbps</span></td>
                    </tr>
                    <tr>
                        <td>25 mbps speed / Off-Peak</td>
                    </tr>
                    <tr>
                        <td>20 mbps speed / Peak</td>
                    </tr>
                    <tr>
                        <td>24/7 Support</td>
                    </tr>
                    <tr>
                        <td>100 mbps Youtube</td>
                    </tr>
                    <tr>
                        <td>100 mbps Facebook</td>
                    </tr>
                    <tr>
                        <td class="plan_price">৳ <span>1000</span> /month</td>
                    </tr>
                </table>

                <input type="hidden" name="name" value="Standard">
                <input type="hidden" name="price" value="1000">
                <button type="submit" class="action button">Select</button>
            </form>

            <!-- premium plan -->
            <form action="{{ route('planurl') }}" method="get" enctype="multipart/form-data" class="plan premium">
                @csrf
                <h4 class="plan_title">premium</h4>

                <table>
                    <tr>
                        <td class="plan_speed">50 <span>mbps</span></td>
                    </tr>
                    <tr>
                        <td>50 mbps speed / Off-Peak</td>
                    </tr>
                    <tr>
                        <td>30 mbps speed / Peak</td>
                    </tr>
                    <tr>
                        <td>24/7 Support</td>
                    </tr>
                    <tr>
                        <td>100 mbps Youtube</td>
                    </tr>
                    <tr>
                        <td>100 mbps Facebook</td>
                    </tr>
                    <tr>
                        <td class="plan_price">৳ <span>1500</span> /month</td>
                    </tr>
                </table>

                <input type="hidden" name="name" value="Premium">
                <input type="hidden" name="price" value="1500">
                <button type="submit" class="action button">Select</button>
        </div>
        </form>
    </main>
@endsection
