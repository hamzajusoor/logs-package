<?php

use Illuminate\Support\Facades\Route;
use Alzughbieh\Logs\LogsController;


Route::get('/logs',[LogsController::class,'index']);






