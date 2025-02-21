<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\Travels\TripModel;
use App\Models\Settings\SettingModel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminBookingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        // dd($request->all());
        $data = SettingModel::where('id',1)->first();
        $trip = TripModel::where('id',$request->trip_id)->first();
        $trip_name = $trip->trip_title;


        $email = $data->email_secondary;
        
        return $this->view('emails.admin-bookingmail', [
            'trip_name' => $trip_name, 
        
            'request' => $request
            
        ])->subject('Trip Booking')->to($email);
    }
}
