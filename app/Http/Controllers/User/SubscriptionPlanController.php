<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;
use Inertia\Inertia;

class SubscriptionPlanController extends Controller
{
    public function index() {

        $subcriptionPlan = SubscriptionPlan::all();

        $data = [
            "subcriptionPlan" => $subcriptionPlan
        ];

        return Inertia::render('User/SubscriptionPlan/Index', $data);

    }
}
