@extends('base')
@section('title','About us | ' . config('app.name'))

@section('content')
<img src="{{ asset('/images/france-flag.jpg') }}" alt="drapeau_reunion" style="width: 200px;">
<h2>Hello from Paris</h2>
<p>Built with &hearts; by Manfred Parbatia</p>

<p><a href="{{ route('app_home') }}">Revenir à la page d'accueil</a></p>
@endsection
