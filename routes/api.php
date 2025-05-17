<?php

use App\Http\Controllers\Api\MemberController;

Route::get('/', function () {
    return Inertia::render('YourHomePage');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('members', MemberController::class);
});

public const HOME = '/dashboard'; 

protected function redirectTo(Request $request): ?string
{
    return $request->expectsJson() ? null : route('your-custom-route');
}
