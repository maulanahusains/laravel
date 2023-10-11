<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class DashboardController extends Controller
{
    public function dashboard() {
        $penjualan = Penjualan::Select()
        ->orderBy('created_at', 'desc')
        ->get();
        return view('home.dashboard', compact('penjualan'));
    }

    public function memberDashboard() {
        $penjualan = Penjualan::Select()->where('id_member', Auth()->User()->id)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('home.member-dashboard', compact('penjualan'));
    }
}
