<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function index(Request $request)
    {
        $client = Client::where('email', $request->email)->firstOrFail();

        return $client->company->offices;
    }
}
