<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showDaftarform()
    {
        return Inertia::render('Users/Daftar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'domisili' => 'required',
            'suku' => 'required',
            'pekerjaan' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'agama' => 'required',
            'gambaran_diri' => 'required',
            'hobi' => 'required',
            'usia' => 'required|integer',
            'provider' => 'required|in:google,facebook,others',
        ]);
        User::create([
            'name' => $request->name,
            'usia' => $request->usia,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'domisili' => $request->domisili,
            'suku' => $request->suku,
            'pekerjaan' => $request->pekerjaan,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'agama' => $request->agama,
            'gambaran_diri' => $request->gambaran_diri,
            'hobi' => $request->hobi,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tanggal_lahir' => $request->tanggal_lahir,
            'provider' => $request->provider,
        ]);

        return redirect(route('home'))->with('success', 'Pendaftaran berhasil. Apakah sudah benar?');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
