@extends('base')


@section('content')
<img src="{{ asset('/images/flag_reunion.png') }}" alt="drapeau_reunion" style="width: 200px;margin-top:25px; margin-bottom:40px;">
<h2>Hello from Réunion</h2>
<p>&copy; {{ date('2022')}}</p>

<p>It's currently {{ date('h:i A') }}.</p>
@endsection



