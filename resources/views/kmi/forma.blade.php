@extends('kmi.layout')

@section('title', 'Skaičiavimas')

@section('content')
    <h1 class="h3 mb-3">KMI skaičiuoklė</h1>
    <p class="text-secondary">Įveskite savo svorį ir ūgį, kad apskaičiuotumėte kūno masės indeksą.</p>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <p class="mb-1">Patikrinkite įvestus duomenis:</p>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kmi.rezultatas') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="svoris" class="form-label">Svoris (kg)</label>
            <input type="number" id="svoris" name="svoris"
                   class="form-control @error('svoris') is-invalid @enderror"
                   value="{{ old('svoris') }}" min="0" step="any" required>
        </div>
        <div class="mb-4">
            <label for="ugis" class="form-label">Ūgis (cm)</label>
            <input type="number" id="ugis" name="ugis"
                   class="form-control @error('ugis') is-invalid @enderror"
                   value="{{ old('ugis') }}" min="0" step="any" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Skaičiuoti KMI</button>
    </form>
@endsection
