<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('index', [
        'time' => now()->toDateTimeString(),
        'event' => 'HumanTalks Paris',
    ]);
});








































// ---






Route::post('register', function (Request $request): void {
    sleep(1);

    $request->validate([
        'email' => 'required|string|max:255',
        'password' => 'required|string|min:8',
    ]);
});
