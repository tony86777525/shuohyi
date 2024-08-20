<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;

class MailService
{
    public static function sendMail($data)
    {
        $postNoticeMailData = self::getPostNoticeMailData($data['email'], $data['name']);

        Mail::send('email.post', $data, function($message) use ($postNoticeMailData) {
            $message->to($postNoticeMailData['toMail'], $postNoticeMailData['toName'])
                ->subject($postNoticeMailData['subject']);

            $message->from($postNoticeMailData['fromMail'], $postNoticeMailData['fromName']);
        });
    }

    private static function getPostNoticeMailData($email, $name)
    {
        $subject = __('email.subject');
        $fromName = __('email.fromName');
        $fromMail = env('MAIL_USERNAME');
        $toName = $name;
        $toMails = [
            $email
        ];

        return [
            'subject' => $subject,
            'fromMail' => $fromMail,
            'fromName' => $fromName,
            'toMail' => $toMails,
            'toName' => $toName,
        ];
    }
}
