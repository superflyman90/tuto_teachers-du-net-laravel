@extends('base')
@section('title','About us | ' . config('app.name'))

@section('content')
<p>Built with &hearts; by Manfred Parbatia</p>

<p><a href="{{ route('app_home') }}">Revenir à la page d'accueil</a></p>
@endsection
