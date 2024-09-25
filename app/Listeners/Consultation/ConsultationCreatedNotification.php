<?php

namespace App\Listeners\Consultation;

use App\Events\ConsultationCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class ConsultationCreatedNotification
{
    public function handle(ConsultationCreated $event): void
    {
		
		dump($event);
		//Mail::to('predlozhi@bk.ru')->send(new WelcomeEmail($event->string));
		
    }
}
