<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationForm extends Mailable
{
    use Queueable, SerializesModels;

    public $data = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($application)
    {
        $this->data = $application;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $year = date('Y');
        return $this->from('scholarship@senatortaorji.com', "Senator T.A Orji (Ochendo), CON - ANNUAL SCHOLARSHIP {$year} EDITION PORTAL")
                ->view('emailview', $this->data);

    }
    
}
