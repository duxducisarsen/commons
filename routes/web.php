<?php

use DuxDucisArsen\Commons\Http\Controllers\ConceptoController;
use Illuminate\Support\Facades\Route;

use DuxDucisArsen\Commons\Http\Controllers\VoucherClassController;
use DuxDucisArsen\Commons\Http\Controllers\CurrencyController;
use DuxDucisArsen\Commons\Http\Controllers\IdentificationClassController;

Route::middleware(['web', 'auth'])->group(function () {

    Route::prefix('currency')
        ->name('currency.')
        ->middleware('ajax')
        ->controller(CurrencyController::class)
        ->group(function () {
            Route::get('indexCommons', 'indexCommons')->name('indexCommons');
        });

    Route::middleware('ajax')->group(function () {

        Route::get('voucherClass/select', [VoucherClassController::class, 'select'])->name('voucherClass.select');

        Route::apiResources([
            'currency'              => CurrencyController::class,
            'concepto' => ConceptoController::class
        ]);
    });

    Route::resources([
        'voucherClass' => VoucherClassController::class,
        'identificationClass'         => IdentificationClassController::class
    ]);
});
