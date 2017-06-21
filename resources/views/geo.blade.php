@extends('layouts.app')
    
    @section('content')
    
    <h1>    Popularity Chart </h1>

    <div id="pop_div"></div>
    @geochart('Popularity', 'pop_div');
    
    @endsection
