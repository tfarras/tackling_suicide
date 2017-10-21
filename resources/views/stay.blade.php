@extends('layouts.master')

@section('page-title',env('APP_NAME'))

@section('css')
    <style>
        #first_fade{
            display: none;
        }
        h1 {
            font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
            font-size: 48px;
            font-style: normal;
            font-variant: normal;
            line-height: 26.4px;

        }
        h3 {
            font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
            font-size: 14px;
            font-style: normal;
            font-variant: normal;
            font-weight: 500;
            line-height: 15.4px;
        }
        .border{
            border: 1px solid white;
        }
        #sec_fade{
            display: none;
            position: fixed;
            top:5%;
            left:31%;
        }
        #third_fade {
            position: fixed;
            top: 80%;
            left: 41%;
            font-size: 64px;
            display: none;
        }
        ul{
        color:white;
        }
        #shadow_text1{
            display: none;
        }

        #shadow_text2{
            display: none;
        }

        #shadow_text3{
            display: none;
        }

        #shadow_text4{
            display: none;
        }
        #shadow_per{
            display: none;
        }
        #seeker1{
            display: none;
        }

        #seeker2{
            display: none;
        }

        #seeker3{
            display: none;
        }

        #last1{
            display: none;
        }

        #last2{
            display: none;
        }

        #last3{
            display: none;
        }

        #last_per{
            display: none;
        }



    </style>


    @stop

@section('content')
<div class="section" data-anchor="first_page" style="text-align: center; background-color: black" >
    <h1 id="sec_fade"  style="color: white">You think you mean something?</h1>
    <img id="first_fade" style="position:fixed;top:30%; left: 43%" src="/assets/images/per.png">
    <h1 id="third_fade" style="color: white">You're right.</h1>
</div>
    <div class="section" data-anchor="sec_page" style="text-align: center; background-color: rgba(0,0,0,0.8)">
        <div class="shadow_text">
        <h1 id="shadow_text1" style="color: white">You</h1>
        <h1 id="shadow_text2" style="color: white">turn into a</h1>
        <h1 id="shadow_text3" style="color: white">shadow</h1>
        <h1 id="shadow_text4" style="color: white">...</h1>
        </div>
        <img id="shadow_per" STYLE="height: 50%; margin-top: 1%" src="/assets/images/Animation1.gif">
    </div>
<div class="section" data-anchor="third_page" style=" background-color: rgba(0,0,0,0.6)">
    <h1 id="seeker1" style="color: rgba(98,99,100,0.6); font-size: 100px; position: absolute;-webkit-text-stroke: 0.5px white; top:5%; left:42%;">lonely</h1>
    <h1 id="seeker2" style="color: white; font-size: 60px; position: absolute; left:5%; top:10%;">You are a </h1>
    <h1 id="seeker3" style="color: white; font-size: 60px; position: absolute; right:5%; top:10%;">seeker </h1>
<img style="height: 100%; width: 100%; position: absolute; top:5%" src="/assets/images/seeker.png">
</div>

    <div class="section" data-anchor="last_page"  style="text-align: center;background-color: rgb(183,184,185)">
        <h1 id="last1" style="color: black">A place</h1>
        <h1 id="last2" style="color: black">which</h1>
        <h1 id="last3" style="color: black">defines</h1>
        <img id="last_per" STYLE="height: 50%; margin-top: 1%" src="/assets/images/last.png">
    </div>


    @stop

@section('js')
    <script>
    $(document).ready(function () {
    $('#fullpage').fullpage({
    anchors: ['first_page','sec_page','third_page','last_page'],
    menu: '#menu'

    });
    });

    </script>
    <script>
        $(document).ready(function() {
            $('#first_fade').fadeIn(4000);
            $('#sec_fade').fadeIn(4000);
            $('#third_fade').delay(2000).fadeIn(4000);
            setInterval(function(){$.fn.fullpage.moveSectionDown();},6000);
            $('#shadow_per').delay(6000).fadeIn(2000);
            $('#shadow_text1').delay(6100).fadeIn(2000);
            $('#shadow_text2').delay(7600).fadeIn(2000);
            $('#shadow_text3').delay(9100).fadeIn(2000);
            $('#shadow_text4').delay(10600).fadeIn(2000);
            setInterval(function(){$.fn.fullpage.moveSectionDown();},20000);
            $('#seeker2').delay(13200).fadeIn(2000);
            $('#seeker1').delay(14700).fadeIn(2000);
            $('#seeker3').delay(16200).fadeIn(2000);
            $('#last1').delay(17000).fadeIn(2000);
            $('#last2').delay(18500).fadeIn(2000);
            $('#last3').delay(20000).fadeIn(2000);
            $('#last_per').delay(21500).fadeIn(2000);
        });
            </script>

@stop

