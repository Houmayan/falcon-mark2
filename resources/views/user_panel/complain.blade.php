@extends('layouts.user_panel')

@section('title', 'Complain - FALCON')
@section('pageTitle', 'complain')
@section('msg')
    hey {{ Auth::user()->name }}! here you can Complain to falcon ⚠️
@endsection

@section('main')
    <main id="complain">
        <form action="" method="post" enctype="multipart/form-data" class="complain_card">
            @csrf
            <div class="input">
                <input type="text" name="user_id" id="" value="{{ Auth::user()->id }}" disabled required hidden>
            </div>
            <div class="input">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" disabled required>
            </div>
            <div class="input">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" disabled required>
            </div>
            <div class="input">
                <label for="complain">Complain</label>
                <textarea name="description" id="complain" placeholder="Share your complain with falcon 🙂" required autofocus></textarea>
            </div>
            <hr>
            <div class="buttons">
                <button class="button cancel" type="reset">Cancel</button>
                <button class="button action" type="submit">Submit</button>
            </div>
        </form>

        <img class="illustration" src="{{ asset('assets/pictures/complain_illustration.svg') }}" alt="">
    </main>
@endsection
