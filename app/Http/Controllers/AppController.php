<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\Account;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $jumlahTransaksi = Transaction::count();
        $jumlahAkun = Account::count();
        return view('index', compact('jumlahTransaksi','jumlahAkun'));
    }
}
