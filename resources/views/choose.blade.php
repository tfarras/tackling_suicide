@extends('layouts.app')

@section('page-title',env('APP_NAME'))

@section('css')
<style>
    .semi-transparent-button {
        display: block;
        box-sizing: border-box;
        margin: 0 auto;
        width: 30%;
        min-width: 30%;
        background: #fff; /* запасной цвет для старых браузеров */
        background: rgba(255, 255, 255, 0.2);
        border-radius: 8px;
        color: #fff;
        text-align: center;
        text-decoration: none;
        letter-spacing: 1px;
        transition: all 0.3s ease-out;
        border: 1px solid #fff;
    }
    .semi-transparent-button:hover,
    .semi-transparent-button:focus,
    .semi-transparent-button:active {
        background: rgba(255,255,255,0.1);
        color: #000;
        transition: all 0.5s ease-in;
    }
    #text h1 {

        color: rgba(0,0,0,0.6);

        text-shadow: 2px 2px 3px rgba(255,255,255,0.1);

    }
    a{
        text-decoration: none;
    }
    @media screen and (max-width: 1024px) {
        .semi-transparent-button {
            display: block !important;
            width: 100%;
            margin-right: 0 !important;
            margin-left: 0 !important;
        }
    }

</style>
    @stop

@section('content')
    <div style="text-align: center;">
    <a href="/quiz">
    <div class="semi-transparent-button" style="display: inline-block; margin-right: 5%; margin-top: 15%">
<h1>Complete a quiz about your moral state.</h1>
    </div></a>
    <a href="/forums">
        <div class="semi-transparent-button" style="display: inline-block;margin-left: 5%; margin-top: 15%">
            <h1>Need help or communication? <br>Come to forum !</h1>
        </div></a>
    </div>
@stop

@section('js')

    @stop