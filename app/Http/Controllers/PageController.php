<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	return view('page.trangchu');
    }

    public function getLoaisach(){
    	return view('page.loaisach');
    }
    public function getChitietsach(){
    	return view('page.chitietsach');
    }
    public function getGioithieu(){
    return view('page.gioithieu');
    }
}
