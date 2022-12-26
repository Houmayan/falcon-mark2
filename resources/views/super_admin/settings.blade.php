@extends('layouts.super_admin_panel')

@section('title', 'Settings - FALCON')
@section('pageTitle', 'Settings')
@section('msg')
    hey {{ Auth::user()->name }}! all settings are here 🏗️
@endsection

@section('main')
    <main id="settings">
        <div class="card">
            <div>
                <h3 class="heading">Website Information</h3>
                <p>Update website details here.</p>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input">
                    <label for="">Logo</label>
                    <div class="input_img">
                        <img src="/assets/pictures/logo-light.svg" alt="" class="user_image" id="image">
                        <label for="uploadImage" class="upload_img">Upload website logo</label>
                        <input type="file" name="image" id="uploadImage" accept="image/*">
                    </div>
                </div>
                <hr>
                <div class="buttons">
                    <button class="button cancel" type="reset">Cancel</button>
                    <button class="button action" type="submit">Save Changes</button>
                </div>
            </form>
        </div>
        <div class="card">
            <div>
                <h3 class="heading">Plan Information</h3>
                <p>Update plan details here.</p>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <hr>
                <p><b>Plan 1</b></p>
                <div class="input">
                    <label for="name">Name</label>
                    <input type="text" name="" id="name">
                </div>
                <div class="input">
                    <label for="price">Price</label>
                    <input type="number" name="" id="price" min="0">
                </div>
                <hr>
                <p><b>Plan 2</b></p>
                <div class="input">
                    <label for="name">Name</label>
                    <input type="text" name="" id="name">
                </div>
                <div class="input">
                    <label for="price">Price</label>
                    <input type="number" name="" id="price" min="0">
                </div>
                <hr>
                <p><b>Plan 3</b></p>
                <div class="input">
                    <label for="name">Name</label>
                    <input type="text" name="" id="name">
                </div>
                <div class="input">
                    <label for="price">Price</label>
                    <input type="number" name="" id="price" min="0">
                </div>
                <hr>
                <div class="buttons">
                    <button class="button cancel" type="reset">Cancel</button>
                    <button class="button action" type="submit">Save Changes</button>
                </div>
            </form>
        </div>
    </main>
@endsection
