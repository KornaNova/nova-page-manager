<?php

use Illuminate\Support\Facades\Route;
use Outl1ne\PageManager\Http\Controllers\PageManagerController;

Route::get('/{type}/{slug}/fields', [PageManagerController::class, 'getFields']);
