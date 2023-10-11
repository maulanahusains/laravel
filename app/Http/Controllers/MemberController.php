<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Alert;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Member::all();
        return view('home.member.index', compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Member::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt($request->username),
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            $request->except(['_token'])
        ]);
        return redirect('/member');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::find($id);
        return view('home.member.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        $member->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt($request->username),
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            $request->except(['_token'])
        ]);
        return redirect('/member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        return redirect('/member');
    }

    public function indexLogin() {
        return view('auth.login-member');
    }

    public function login(Request $request) {
        if(Auth::guard('member')->attempt($request->only('username', 'password'))) {
            return redirect('/member/dashboard');
        }
        return redirect('/member/login')->with('error', 'username or password is incorrect');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('member-login');
    }

}
