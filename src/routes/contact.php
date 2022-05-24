<?php

use Illuminate\Support\Facades\Route;
use Plusemon\Contact\http\Controllers\ContactController;

Route::get('contact', [ContactController::class, 'contact']);
Route::post('contact', [ContactController::class, 'send']);
