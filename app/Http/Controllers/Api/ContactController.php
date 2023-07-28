<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ContactRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make(
            $data,
            [
                "name" => "required",
                "email" => "required|email",
                "message" => "required",
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "errors" => $validator->errors()
            ]);
        }

        $newContactRequest = new ContactRequest();
        $newContactRequest->fill($data);
        $newContactRequest->save();

        // invio mail
        $newMail = new NewContact($data);
        Mail::to("marcogiammari@gmail.com")->send($newMail);

        return response()->json([
            "success" => true,
        ]);
    }
}
