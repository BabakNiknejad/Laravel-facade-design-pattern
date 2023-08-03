<?php

namespace App\Http\Controllers;

use App\Facades\UserFacade;

class UsersController extends Controller
{
    public function index()
    {
        $users = UserFacade::getAll();

        return response()->json([
            'users' => $users
        ]);
    }

    public function show($id)
    {
        $user = UserFacade::getByID($id);

        return response()->json([
            'user' => $user
        ]);
    }


}
