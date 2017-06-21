@extends('layouts.app')

@section('content')
    <h1>    Population Chart </h1>

    <div id="pop_div"></div>
    @areachart('Population', 'pop_div');

@endsection
