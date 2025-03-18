<?php

namespace App\Mail;

use App\Models\Settings\SettingModel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    protected $data;
    protected $siteData;
    public function __construct($data)
    {
        $this->data = $data;
        $this->siteData = SettingModel::where('id', '1')->first();
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $siteName = $this->siteData?->site_name ?? env('APP_NAME', 'Lhakpa Trek');
        return new Envelope(
            subject: "$siteName - Password Reset Request", // Slightly reworded for clarity
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.reset-password',
            with: [ 
                'data' => $this->data,
                'siteData' => $this->siteData,
            ]
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
