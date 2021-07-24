<?php
use Obaid\Contact\Http\Controllers\ContactController;

// Route::group(['namespace'=>'Obaid\Contact\Http\Controllers'], function () {
// });

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'send']);

?>