<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function setting() {
    	return "Setting nà";
    }
    public function show($id) {
    	return view('hello')->with('id', $id);
    }
}
