@extends('layouts.admin_panel')

@section('title', 'Admin Profile - FALCON')
@section('pageTitle', 'Admin Profile')
@section('msg')
    hey {{ Auth::user()->name }}! its your profile 🔥
@endsection

@section('main')
    <main id="profile">
        <div class="card personal_info">
            <div>
                <h3 class="heading">Personal Information</h3>
                <p>Update your photo and personal details here.</p>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="input">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}">
                </div>
                <div class="input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}">
                </div>
                <div class="input">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" id="phone" value="{{ Auth::user()->phone }}"
                        pattern="01+[0-9]{9}">
                </div>
                <div class="input">
                    <label for="">Image</label>
                    <div class="input_img">
                        <img src="/assets/pictures/john-wick.jpg" alt="" class="user_image" id="image">
                        <label for="uploadImage" class="upload_img">Upload your image</label>
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
        <div class="card password_info">
            <div>
                <h3 class="heading">Change Password</h3>
                <p>Update your password here.</p>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="input">
                    <label for="old_password">Old Password</label>
                    <input type="text" name="password" id="old_password" placeholder="Put you old password"
                        pattern=".{8,}" required>
                </div>
                <div class="input">
                    <label for="new_password">New Password</label>
                    <input type="password" name="new_password" id="new_password" placeholder="Put your new password"
                        pattern=".{8,}" required>
                </div>
                <hr>
                <div class="buttons">
                    <button class="button action" type="submit">Save Changes</button>
                </div>
            </form>
        </div>
    </main>
@endsection
