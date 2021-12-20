<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usrs;

class Users extends Controller
{
    //
    public function show() {
        return usrs::find(1)->show;
        }
        public function shows() {
            return usrs::find(2)->shows;
            }
}
