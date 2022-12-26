<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data ->name = $request->name;
        $data -> email = $request ->email;
        $data ->phone = $request ->phone;

        if ($request->file('image')) //profile_image is db image field name
        {
            $file = $request->file('image'); //here profile image is database image field name
            $filename = date('ymdHi') . $file->getClientOriginalName(); // renaming the image. video image update part 4
            $file->move(public_path('upload/admin_images'), $filename); // saving the image in public folder. under public/upload/admin_image folder.
            $data['image'] = $filename;
        }
        $data->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function planInput(Request $request)
    {
       $name = $request->name;
       $price = $request->price;
       return view('user_panel.plans',compact('name','price'));
    }
    public function urlInput($name=null,$price=null)
    {
        return view('user_panel.checkout',compact('name','price'));
    }
}