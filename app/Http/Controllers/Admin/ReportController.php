<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Massage;

class ReportController extends Controller
{
    public function index()
    {
        $mass = Massage::all();
        return view('admin.index', [
            'mass' => $mass
        ]);
    }
}
