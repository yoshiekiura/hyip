<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $users['all_users'] = User::count();
        $users['active']    = User::active()->count();
        $subscriptions      = Subscription::orderBy('is_active', 'desc')->get()->groupBy('is_active');

        return view('Admin::dashboard.index', [
            'users'         => $users,
            'subscriptions' => $subscriptions,
        ]);
    }
}