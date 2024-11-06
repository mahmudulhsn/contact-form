<?php

use Illuminate\Support\Facades\Route;
use Mahmudulhsn\Contactform\Http\Controllers\ContactFormController;





Route::middleware('web')->group(function () {
    Route::get("contact", [ContactFormController::class, "create"])->name("contacts.index");
    Route::post("contacts", [ContactFormController::class, "store"])->name("contacts.store");
});
