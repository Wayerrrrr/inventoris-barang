<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Barang;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    /** 
     * Mengambil data berdasarkan tanggal ditambahkan seminggu kebelakang
     */

    public function dashboard()
    {
        $take_amount = 5;
        $days = 10;

        $barangs = Barang::whereDate('created_at', '>', now()->subWeek())->latest()->take(3)->get();
        $barangs_mahal = Barang::orderBy('harga_jual', 'desc')->take($take_amount)->get();
        $barangs_murah = Barang::orderBy('harga_jual', 'asc')->take($take_amount)->get();
        $barangs_lowstock = Barang::orderBy('stok', 'asc')->take($take_amount)->get();
        $barangs_highstock = Barang::orderBy('stok', 'desc')->take($take_amount)->get();
        $barangs_expired = Barang::whereDate('expired_date', '<', now())->get();

        $barangs_expired_soon = Barang::whereBetween('expired_date', [
            now(),
            now()->addDays($days)
        ])->get();

        return view('dashboard', compact('barangs', 'barangs_mahal', 'barangs_murah', 'barangs_lowstock', 'barangs_highstock', 'barangs_expired', 'barangs_expired_soon'));
    }
}
