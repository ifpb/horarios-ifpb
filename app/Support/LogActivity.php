<?php


namespace App\Support;
use App\Log;
use Illuminate\Support\Facades\Auth;


class LogActivity
{
    public static function store($action)
    {
        Log::create([
            'action' => $action,
            'user_id' => Auth::user()->id
        ]);
    }
}
