<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountController extends Controller
{
    public function index() {

        $acc = Account::get();

        return view('accounts.index', ['accts'=>$acc]);
    }
}
