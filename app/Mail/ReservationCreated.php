<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Reservations;

class ReservationCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $reservation;

    public function __construct(Reservations $reservation)
    {
        $this->reservation = $reservation;
    }

    public function build()
    {
        return $this->subject('New Reservation Created')
                    ->view('emails.reservation-created')
                    ->with('reservation', $this->reservation);
    }
}

