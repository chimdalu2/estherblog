<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get("/contacts", [ContactController::class, "show"])->name("contacts");
Route::post("/contacts", [ContactController::class, "send"])->name("contacts.send");
