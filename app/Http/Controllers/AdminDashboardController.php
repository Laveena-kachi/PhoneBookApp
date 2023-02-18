<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       
        if(Auth::check()){
        return redirect("users");
    }

    return redirect("login");
    
    }
    public function count()
    {
        $daily = Contact::whereDate('created_at', Carbon::today())->count();
        $weekly = Contact::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $monthly = Contact::whereMonth('created_at', date('m'))->count();
        return view("admin.users.count",compact('daily','weekly','monthly'));
    }
}
