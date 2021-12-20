<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Users;

class UserUpdateController extends Controller
{
        public function show() {
        return User::find(1);
        }
        }