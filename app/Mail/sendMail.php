<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\BookingForm;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $bookingForm;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(BookingForm $bookingForm)
    {
        $this->bookingForm = $bookingForm;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin.pages.view-contact-email')
            ->subject('Booking Success Notification');
    }
}
