<?php

namespace App\Http\Controllers;

use App\Events\UserUpdated;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = User::updateOrCreate($request->validated());

        event(new UserUpdated($user));

        return response(true);
    }
}
