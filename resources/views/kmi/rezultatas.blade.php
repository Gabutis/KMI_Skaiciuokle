@extends('kmi.layout')

@section('title', 'Rezultatas')

@section('content')
    <h1 class="h3 mb-4">KMI rezultatas</h1>
    <div class="text-center bg-body-secondary rounded p-4 mb-4">
        <p class="mb-1">Jūsų kūno masės indeksas</p>
        <p class="display-5 fw-semibold mb-0">{{ number_format($kmi, 2, ',', '') }}</p>
    </div>

    <h2 class="h5">KMI normų lentelė</h2>
    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead>
                <tr><th scope="col">KMI</th><th scope="col">Kategorija</th></tr>
            </thead>
            <tbody>
                <tr><td>Mažiau nei 18.5</td><td>Per mažas svoris</td></tr>
                <tr><td>18.5–24.9</td><td>Normalus svoris</td></tr>
                <tr><td>25.0–29.9</td><td>Antsvoris</td></tr>
                <tr><td>30.0 ir daugiau</td><td>Nutukimas</td></tr>
            </tbody>
        </table>
    </div>
    <a href="{{ route('kmi.forma') }}" class="btn btn-primary w-100 mt-3">Skaičiuoti iš naujo</a>
@endsection
