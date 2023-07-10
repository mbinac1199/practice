<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // public function __invoke(Request $request)
    // {
    //     // Your controller logic here
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.index', [
            'users' => DB::table('users')->paginate(2),
            'latestFive' => DB::table('users')->orderBy('id', 'desc')->limit(5)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create', [
            'latestFive' => DB::table('users')->orderBy('id', 'desc')->limit(5)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        session([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect("/add2");
    }

    public function create2()
    {
        return view('users.create2', [
            'latestFive' => DB::table('users')->orderBy('id', 'desc')->limit(5)->get()
        ]);
    }

    public function store2(Request $request)
    {
        DB::table('users')->insert([
            'name' => session('name'),
            'email' => session('email'),
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        return redirect("/users");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('users.edit', [
            'user' => DB::table('users')->find($id),
            'latestFive' => DB::table('users')->orderBy('id', 'desc')->limit(5)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address
            ]);
        return redirect("/users");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect("/users");
    }

    public function login()
    {
        return view("login");
    }

    public function authenticate(Request $request)
    {
        if ($request->email == "admin" && $request->password == "admin") {
            session(["authenticated" => true]);
            return redirect("/users");
        } else
            return redirect("/login");
    }

    public function logout()
    {
        session(["authenticated" => false]);
        return redirect("/users");
    }
}
