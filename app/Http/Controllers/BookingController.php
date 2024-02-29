<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Mail\TicketMail;
use App\Models\Booking;
use App\Models\FilmRoom;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function create ($id){
        $schedule = FilmRoom::find($id);
        return view("member.roomSchema", compact("schedule"));
    }

}
