<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;


Route::get("/contacts", [ContactsController::class, "show"])->name("contacts");
Route::post("/contacts", [ContactsController::class, "send"])->name("contacts.send");
