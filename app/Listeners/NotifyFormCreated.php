<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\FormCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyFormCreated
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\FormCreated  $event
     * @return void
     */
    public function handle(FormCreated $form)
    {
        Mail::send('emails.form_created', ['data'=>$form], function($message)
        {
            $message->to('admin@example.com', 'Email Message')->subject('New form created!');
        }); 
    }
}
