<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\Warehouse;
use App\Models\Petugas;
use App\Models\Kota;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('warehouse')->attempt($credentials)) {
            return redirect()->intended('/warehouse/home');
        }

        if (Auth::guard('customer')->attempt($credentials)) {
            return redirect()->intended('/customer/home');
        }

        if (Auth::guard('driver')->attempt($credentials)) {
            return redirect()->intended('/driver/home');
        }

        if (Auth::guard('petugas')->attempt($credentials)) {
            return redirect()->intended('/petugas/home');
        }

        return back()->withErrors(['login' => 'Username atau password tidak valid.']);
    }

    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'nama_customer' => 'required|string|max:100',
            'alamat' => 'required|string',
            'nama_kota' => 'required|string',
            'nomor_telepon' => 'required|string|max:15',
            'username' => 'required|string|max:50|unique:customer,username',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $namaKotaInput = strtolower($validated['nama_kota']);
        $kota = Kota::whereRaw('LOWER(nama_kota) = ?', [$namaKotaInput])->first();
        if (!$kota) {
            return back()->withErrors(['nama_kota' => 'Nama kota tidak ditemukan di database.']);
        }

        $customer = Customer::create([
            'nama_customer' => $validated['nama_customer'],
            'alamat' => $validated['alamat'],
            'nomor_telepon' => $validated['nomor_telepon'],
            'username' => $validated['username'],
            'nama_kota' => $validated['nama_kota'],
            'password' => bcrypt($validated['password']),
            'id_kota' => $kota->id_kota
        ]);

        Auth::guard('customer')->login($customer);

        return redirect()->route('customer.home');
}

    public function logout(Request $request)
    {
        if (Auth::guard('warehouse')->check()) {
            Auth::guard('warehouse')->logout();
        }

        if (Auth::guard('customer')->check()) {
            Auth::guard('customer')->logout();
        }

        if (Auth::guard('driver')->check()) {
            Auth::guard('driver')->logout();
        }

        if (Auth::guard('petugas')->check()) {
            Auth::guard('petugas')->logout();
        }
        return redirect('/');
    }
}