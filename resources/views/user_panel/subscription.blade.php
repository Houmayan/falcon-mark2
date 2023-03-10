@extends('layouts.user_panel')

@section('title', 'Subscription - FALCON')
@section('pageTitle', 'subscription details')
@section('msg')
    hey {{ Auth::user()->name }}! here is subscription details 😊
@endsection

@section('main')
@foreach ($data as $item)
    
    @if ($item -> statusOfSub == '1' && $item -> email ==  Auth::user()->email )
    <main id="subscription">
        <div class="card_container">
            <div class="card plan">
                <h3 class="plan_name">{{ $item->plan }}</h3>
                <div>
                    {{-- \Carbon\Carbon::parse($user->from_date)->format('d/m/Y') --}}
                    <p>Started <span>{{ \Carbon\Carbon::parse($item-> created_at)->format('d/m/Y') }}</span></p>
                    <p>Ends <span>10 Dec, 2022</span></p>
                    <a href="{{ route('plans') }}">
                        <span>Change Plan</span>
                    </a>
                </div>
            </div>
            {{-- $item-> created_at --}}

            <div class="card">
                <h3 class="heading">Details</h3>
                <table>
                    <tr>
                        <td>
                            Subscription Id: <span>fls356</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="plan_speed">Speed: <span>15 mbps</span></td>
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
                        <td class="plan_price">৳ <span>800</span> /month</td>
                    </tr>
                </table>
            </div>
        </div>

        <img src="{{ asset('assets/pictures/subscription_illustration.svg') }}" alt="" class="illustration">
    
    </main>
    @else
        <h2>You have not Purchesed any Plan !</h2>
        <a href="{{route('plans')}}"><h1>Click here</h1></a>
    @endif
   
    @endforeach
@endsection
