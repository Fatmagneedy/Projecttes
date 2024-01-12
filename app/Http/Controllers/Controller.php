<?php

namespace App\Http\Controllers;
use App\Message;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
class MessagesController extends Controller
{
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2',
            'email' => 'required|max:255',
            'phonenumber' => 'required|min:11',
            'message' => 'required|min:5',
        ]);


        if ($validator->fails()) {
            return redirect(url()->previous() . '#contact')
                ->withErrors($validator)
                ->withInput();
        }

        $message = Message::create($request->all());

        Mail::to($message->email)->queue(
            new MessageCreated($message)
        );


        return redirect('/')->with('success', 'Your message has been 
            successfully sent. We will reach out to you soon');
    }
}