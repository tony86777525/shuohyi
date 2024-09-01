<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\MailRequest;
use App\Services\MailService;
use Illuminate\Http\JsonResponse;

class MailController extends Controller
{
    public function store(MailRequest $request): JsonResponse
    {
        $response = [];
        $statusCode = 200;

        $postData = $request->post();

        try {
            MailService::sendMail($postData);

            $response['message'] = 'Send Mail Success';
        } catch (\Exception $e) {
            $statusCode = 500;

            $response['message'] = 'Send Mail Fail';
        }

        return response()->json($response, $statusCode);
    }
}
