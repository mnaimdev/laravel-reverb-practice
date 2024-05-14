<?php

namespace App\Http\Controllers;

use App\Events\MessageSentEvent;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        try {
            MessageSentEvent::dispatch('Mohammad Naim', $request->message);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
