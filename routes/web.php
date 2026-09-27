<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('kmi.forma');
})->name('kmi.forma');

Route::post('/rezultatas', function (Request $request) {
    $duomenys = $request->validate([
        'svoris' => ['required', 'numeric', 'gt:0'],
        'ugis' => ['required', 'numeric', 'gt:0'],
    ], [
        'svoris.required' => 'Įveskite svorį kilogramais.',
        'svoris.numeric' => 'Svoris turi būti skaičius.',
        'svoris.gt' => 'Svoris turi būti didesnis už 0.',
        'ugis.required' => 'Įveskite ūgį centimetrais.',
        'ugis.numeric' => 'Ūgis turi būti skaičius.',
        'ugis.gt' => 'Ūgis turi būti didesnis už 0.',
    ]);

    $ugisMetrais = $duomenys['ugis'] / 100;
    $kmi = $duomenys['svoris'] / ($ugisMetrais ** 2);

    return view('kmi.rezultatas', ['kmi' => $kmi]);
})->name('kmi.rezultatas');
