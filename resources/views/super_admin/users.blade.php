@extends('layouts.super_admin_panel')

@section('title', 'Users - FALCON')
@section('pageTitle', 'users list')
@section('msg')
    hey {{ Auth::user()->name }}! all users are here 🧑🏻‍🤝‍🧑🏼
@endsection

@section('main')
    <main id="users">
        <!-- search bar -->
        <div class="search_bar">
            <input id="searchBar" type="text" placeholder="Search user here ...">
            <img src="{{ asset('assets/pictures/search_icon.svg') }}" alt="">
        </div>

        <!-- users table -->
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="dataList">
                <tr>
                    <td>101</td>
                    <td>demo</td>
                    <td>demo@gmail.com</td>
                    <td>01400492967</td>
                    <td>
                        <a href="javascript:void()" onclick="viewOpen()" class="button view">View</a>
                        <a href="javascript:void()" onclick="editOpen()" class="button edit">Edit</a>
                        <a href="tel:01400492967" class="button">Call</a>
                    </td>
                </tr>
                <tr>
                    <td>102</td>
                    <td>demo1</td>
                    <td>demo1@gmail.com</td>
                    <td>0140049467</td>
                    <td>
                        <a href="javascript:void()" onclick="viewOpen()" class="button view">View</a>
                        <a href="javascript:void()" onclick="editOpen()" class="button edit">Edit</a>
                        <a href="tel:01400492967" class="button">Call</a>
                    </td>
                </tr>
                <tr>
                    <td>103</td>
                    <td>demo2</td>
                    <td>demo2@gmail.com</td>
                    <td>017823452345</td>
                    <td>
                        <a href="javascript:void()" onclick="viewOpen()" class="button view">View</a>
                        <a href="javascript:void()" onclick="editOpen()" class="button edit">Edit</a>
                        <a href="tel:01400492967" class="button">Call</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- view modal -->
        <div class="modal_container" id="viewModal">
            <div class="modal">
                <div class="modal_top">
                    <h3 class="modal_heading">User Details</h3>
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
                            <dt>User Registered</dt>
                            <dd>10 Dec, 2022</dd>
                        </div>
                        <div class="dl">
                            <dt>User Updated</dt>
                            <dd>12 Dec, 2022</dd>
                        </div>
                    </dl>
                    <img src="{{ asset('assets/pictures/john-wick.jpg') }}" alt="">
                </div>
            </div>
        </div>

        <!-- edit modal -->
        <div class="modal_container" id="editModal">
            <div class="modal">
                <div class="modal_top">
                    <h3 class="modal_heading">Edit User Details</h3>
                    <a href="javascript:void()" onclick="editClose()" class="modal_close">
                        <img src="{{ asset('assets/pictures/close.svg') }}" alt="">
                    </a>
                </div>
                <hr>
                <!-- modal content -->
                <form action="" method="post" enctype="multipart/form-data" class="edit">
                    @csrf
                    <div class="input">
                        <label for="id">Id</label>
                        <input type="number" name="id" id="id" value="101" disabled>
                    </div>
                    <div class="input">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="demo">
                    </div>
                    <div class="input">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="demo@gmail.com">
                    </div>
                    <div class="input">
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" id="phone" value="01400492967">
                    </div>
                    <div class="buttons">
                        <button type="reset" class="button cancel">Cancel</button>
                        <button type="submit" class="button action">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
