<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        // Logic to handle the request and return a response
        return response()->json([
            'message' => 'Hello, this is your data!',
        ]);
    }
}
