<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = User::all();
        return view('customers.index', compact('customers'));
    }

    public function filtered()
    {
        $customers = User::where('city', 'cairo')->get();
        return view('customers.filtered', compact('customers'));
    }
}
