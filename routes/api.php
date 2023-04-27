<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Llaski\NovaScheduledJobs\Http\Controllers\JobsController;
use Llaski\NovaScheduledJobs\Http\Controllers\DispatchController;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

Route::get('jobs', JobsController::class)->name('nova-scheduled-jobs.jobs');
Route::post('dispatch', DispatchController::class)->name('nova-scheduled-jobs.dispatch');
