<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ReviewRequest;
use App\Http\Controllers\Controller;
use App\State;
use App\Lga;
use App\Biz;
use App\Cat;
use App\SubCat;
use Input;
use App\Review;
use App\Setting;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }
}