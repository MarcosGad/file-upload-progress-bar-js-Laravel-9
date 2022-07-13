<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;


Route::controller(FileController::class)->group(function(){
    Route::get('upload_file', 'index');
    Route::post('upload_file/upload', 'upload')->name('upload_file.upload');
});
