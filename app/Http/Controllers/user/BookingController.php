<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
  public function eventbook()
  {
      return view('website.pages.bookingevent');
  }
}