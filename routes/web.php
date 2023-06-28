<?php
use App\Http\Controllers\GetController;
use App\Http\Controllers\PostController;

Route::get("/",[GetController::class,"homeHandler"]);
Route::get("/about",[GetController::class,"aboutHandler"]);
Route::get("/contact",[GetController::class,"contactHandler"]);
Route::get("/show-contact-list",[GetController::class,"showListHandler"]);
Route::get("/gallery",[GetController::class,"galleryHandler"]);
Route::get("/login",[GetController::class,"LoginHandler"]);
Route::get("/logout",[GetController::class,"LogoutHandler"]);
Route::get("/encrypt",[GetController::class,"EncryptPasswordHandler"]);




Route::Post("/contact",[PostController::class,"ContactPostHandler"]);
Route::Post("/send-contact",[PostController:: class,"SendContactPostHandler"]);
Route::post("/auth-admin",[PostController::class,"AuthAdminHandler"]);