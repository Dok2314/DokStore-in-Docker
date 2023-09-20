<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CarMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $car;

    /**
     * Create a new message instance.
     */
    public function __construct($car)
    {
        $this->car = $car;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Car Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.car_created',
            with: [
                'modelName' => $this->car->model->name,
                'markName' => $this->car->model->mark->name,
                'type' => $this->car->type,
                'condition' => $this->car->condition,
                'price' => $this->car->price,
                'year' => $this->car->year,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
