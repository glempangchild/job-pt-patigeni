<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class PendudukController extends Controller
{
    public function apiPenduduk(){
        $employees = Employee::all();
        return response()->json([
            'message' => 'Succes',
            'data' => $employees
        ],200);
    }
}
