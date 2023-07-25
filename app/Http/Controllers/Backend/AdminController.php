<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminLoginFrom()
    {
        return view('backend.admin.admin_login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function adminLogin(Request $request)
    {
       $request->validate([
            'email'=>'required',
            'password'=>'required',
       ]);
       if(!Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
        return redirect('/admin/dashboard');
       }else{
        Session::flash('error-msg','Invalid Email or Password');
        return redirect()->back();
       }
    }

    /**
     * Display the specified resource.
     */
    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
