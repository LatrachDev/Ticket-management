<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index()
    {
        // $agents = User::where('role', 'agent')->get();
        // return view('tickets.index');
    }

} 