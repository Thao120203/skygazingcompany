<?php

namespace App\Http\Controllers\CLient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class BuyticketController extends Controller
{
    public function getBuyTicket(){
        return view("client.buyticket");
    }
}
