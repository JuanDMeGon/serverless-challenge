<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::any('inspire', function() {
    $message = Inspiring::quote();

    return response()->json([
        'data' => [
            'stack' => 'This is a serverless application using PHP 8 and Laravel 8.',
            'context' => 'We will give you an inspirational quote as follows',
            'quote' => $message,
        ],
    ]);
});

