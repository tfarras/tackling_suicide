@extends('layouts.master')

@section('page-title',env('APP_NAME'))

@section('css')
    <style>
        #first_fade{
            display: none;
        }
        h1 {
            font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
            font-size: 350%;
            font-style: normal;
            font-variant: normal;

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
            left:29%;
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
        #shadow_text1,

        #shadow_text2,

        #shadow_text3,

        #shadow_text4,
        #shadow_per,
        #seeker1,
        #seeker2,
        #seeker3,
        #last1,
        #last2,
        #last3,
        #last_per,#black_person,#chat_person,#first_chat,#sec_chat
        ,#sec_chat2,#first_chat2,#purple_person,#yellow_person,#grad_person,
        #sec_chat3,#first_chat3,#red_person,#red_person2,#red_person3,#first_chat4,#sec_chat4,#orange_person,#blue_person,
        #black_person1,#black_person2,#black_person3,#black_person4,#first_chat5,#sec_chat5,#gold_person{
            display: none;
        }



    </style>


    @stop

@section('content')
<div class="section" data-anchor="first_page" style="text-align: center; background-color: black" >
    <h1 id="sec_fade"  style="color: white">You think you mean something?</h1>
    <img id="first_fade" style="position:fixed;top:30%; left: 44%; height: 40%" src="/assets/images/per.png">
    <h1 id="third_fade" style="color: white">You're right.</h1>
</div>
    <div class="section" data-anchor="sec_page" style="text-align: center; background-color: rgba(0,0,0,0.8)">
        <input class="btn btn-primary" type="button" style="position: absolute; left: 2%; top: 2%;" onclick="window.location.href='/choose';" value="Skip">
        <div class="shadow_text">
        <h1 id="shadow_text1" style="color: white">You</h1>
        <h1 id="shadow_text2" style="color: white">turn into a</h1>
        <h1 id="shadow_text3" style="color: white">shadow</h1>
        <h1 id="shadow_text4" style="color: white">...</h1>
        </div>
        <img id="shadow_per" STYLE="height: 50%; margin-top: 1%" src="/assets/images/Animation1.gif">
    </div>


    <div class="section" data-anchor="last_page"  style="text-align: center;background-color: rgb(183,184,185)">
        <input class="btn btn-primary" type="button" style="position: absolute; left: 2%; top: 2%;" onclick="window.location.href='/choose';" value="Skip">
        <h1 id="last1" style="color: black">You seek</h1>
        <h1 id="last2" style="color: black">a place</h1>
        <h1 id="last3" style="color: black">which defines</h1>
        <img id="last_per" STYLE="height: 50%; margin-top: 1%" src="/assets/images/last.png">
    </div>

<div class="section" data-anchor="char_person_page"  style="text-align: center;background-color: rgb(183,184,185)">
    <input class="btn btn-primary" type="button" style="position: absolute; left: 2%; top: 2%;" onclick="window.location.href='/choose';" value="Skip">
    <h1 id="first_chat" style="color: black; position: absolute; font-size: 300%; top:10%; left: 15%" align="center">You think there is no one who wants to talk with you?</h1>
    <img id="black_person" align="left" style="position: absolute; left:20%; height: 50%; bottom:2%" src="/assets/images/omb.png">
    <img id="chat_person" align="right" style=" position: absolute;right: 20%;height: 80%; bottom:1%" src="/assets/images/chat_person.png">
    <h1 id="sec_chat" style="color: black;position: absolute; font-size: 250%; bottom:10%;left:40%;" align="center" >There always is.</h1>
</div>

<div class="section" data-anchor="char_person_page2"  style="text-align: center;background-color: rgb(183,184,185)">
    <input class="btn btn-primary" type="button" style="position: absolute; left: 2%; top: 2%;" onclick="window.location.href='/choose';" value="Skip">
    <h1 id="first_chat2" style=" color: black;font-size: 300%; position: absolute; top:10%; left: 15%" align="center">You think there is no one who understands you?</h1>
    <img id="purple_person" align="left" style="position: absolute; left:20%; height: 50%; bottom:2%" src="/assets/images/purple.png">
    <img id="yellow_person" align="right" style=" position: absolute;right: 20%;height: 51%; bottom:2%" src="/assets/images/yellow.png">
    <img id="grad_person" align="right" style=" position: absolute;right: 20%;height: 51%; bottom:2%" src="/assets/images/omb.png">
    <h1 id="sec_chat2" style="font-size: 250%;color: black;position: absolute; bottom:10%;left:40%;" align="center" >There always is.</h1>
</div>

<div class="section" data-anchor="char_person_page3"  style="text-align: center;background-color: rgb(183,184,185)">
    <input class="btn btn-primary" type="button" style="position: absolute; left: 2%; top: 2%;" onclick="window.location.href='/choose';" value="Skip">
    <h1 id="first_chat3" style=" color: black;font-size: 300%; position: absolute; top:10%; left: 15%" align="center">You think there is no one who wants to support you?</h1>
    <img id="red_person" align="left" style="position: absolute; left:20%; height: 50%; bottom:2%" src="/assets/images/omr.png">
    <img id="red_person2" align="right" style="position: absolute;right: 20%;height: 51%; bottom:2%" src="/assets/images/omacoperit.png">
    <h1 id="sec_chat3" style="font-size: 250%;color: black;position: absolute; bottom:10%;left:40%;" align="center" >There always is.</h1>
</div>

<div class="section" data-anchor="char_person_page4"  style="text-align: center;background-color: rgb(183,184,185)">
    <input class="btn btn-primary" type="button" style="position: absolute; left: 2%; top: 2%;" onclick="window.location.href='/choose';" value="Skip">
    <h1 id="first_chat4" style=" color: black;font-size: 300%; position: absolute; top:10%; left: 30%" align="center">You think there is no one to love you?</h1>
    <img id="red_person3" align="left" style="position: absolute; left:20%; height: 50%; bottom:10%" src="/assets/images/omr.png">
    <img id="orange_person" align="right" style="position: absolute;right: 43%;height: 51%; bottom:10%" src="/assets/images/omorange.png">
    <img id="blue_person" align="right" style="position: absolute;right: 20%;height: 51%; bottom:10%" src="/assets/images/omalbastru.png">
    <h1 id="sec_chat4" style="font-size: 250%;color: black;position: absolute; bottom:2%;left:45%;" align="center" >There always is.</h1>
</div>

<div class="section" data-anchor="char_person_page5"  style="text-align: center;background-color: whitesmoke;">
    <h1 id="first_chat5" style=" color: black;font-size: 300%; position: absolute; top:10%; left: 40%" align="center">You are not alone.</h1>

    <img id="black_person3" align="right" style="position: absolute;right: 5%;height: 51%; bottom:10%" src="/assets/images/omb.png">
    <img id="black_person1" align="right" style="position: absolute;right: 25%;height: 51%; bottom:10%" src="/assets/images/omb.png">
    <img id="gold_person" align="left" style="position: absolute; left:44%; height: 55%; bottom:10%" src="/assets/images/yellow.png">
    <img id="black_person2" align="right" style="position: absolute;left: 25%;height: 51%; bottom:10%" src="/assets/images/omb.png">
    <img id="black_person4" align="right" style="position: absolute;left: 5%;height: 51%; bottom:10%" src="/assets/images/omb.png">
    <h1 id="sec_chat5" style="font-size: 250%;color: black;position: absolute; bottom:2%;left: 47%;" align="center" >Always.</h1>
</div>



    @stop

@section('js')
    <script>
    $(document).ready(function () {
    $('#fullpage').fullpage({
    anchors: ['first_page','sec_page','third_page','last_page','chat_person_page','char_person_page2','char_person_page3','char_person_page4'],
    menu: '#menu',


    });
        $.fn.fullpage.setScrollingSpeed(1500);
        $.fn.fullpage.setMouseWheelScrolling(false);
        $.fn.fullpage.setAllowScrolling(false);
    });

    </script>
    <script>
        $(document).ready(function() {
            $('#first_fade').fadeIn(4000);
            $('#sec_fade').fadeIn(4000);
            $('#third_fade').delay(2000).fadeIn(4000);
            setTimeout(function(){$.fn.fullpage.moveSectionDown();},6000);
            $('#shadow_per').delay(6000).fadeIn(2000);
            $('#shadow_text1').delay(6100).fadeIn(2000);
            $('#shadow_text2').delay(7600).fadeIn(2000);
            $('#shadow_text3').delay(9100).fadeIn(2000);
            $('#shadow_text4').delay(10600).fadeIn(2000);
            setTimeout(function(){$.fn.fullpage.moveSectionDown();},13000);

            $('#last1').delay(13200).fadeIn(2000);
            $('#last2').delay(14700).fadeIn(2000);
            $('#last3').delay(16200).fadeIn(2000);
            $('#last_per').delay(17700).fadeIn(2000);
            setTimeout(function(){$.fn.fullpage.moveSectionDown();},19000);
            $('#black_person').delay(19200).fadeIn(2000,function(){
                $('#chat_person').fadeIn(2000,function(){
                    $('#first_chat').fadeIn(2000,function(){
                        $('#sec_chat').fadeIn(2000);
                    });
                });
            });
            setTimeout(function(){$.fn.fullpage.moveSectionDown();},29000);
            $('#purple_person').delay(29200).fadeIn(2000,function(){
                $('#yellow_person').fadeIn(2000,function(){
                    $('#first_chat2').fadeIn(2000,function(){
                        $('#yellow_person').fadeOut(500,function(){
                            $('#grad_person').fadeIn(1500,function(){
                                $('#sec_chat2').fadeIn(2000);
                            })
                        })
                    })
                })
            });
            setTimeout(function(){$.fn.fullpage.moveSectionDown();},41000);
            $('#red_person').delay(41200).fadeIn(2000,function(){
                $('#first_chat3').fadeIn(2000,function(){
                    $('#red_person').fadeOut(500,function(){
                        $('#red_person2').fadeIn(2000,function(){
                            $('#sec_chat3').fadeIn(2000);
                        })
                    })
                })
            });
            setTimeout(function(){$.fn.fullpage.moveSectionDown();},54000);
            $('#orange_person').delay(54200).fadeIn(2000,function(){
                $('#first_chat4').fadeIn(2000,function(){
                    $('#red_person3').fadeIn(2000);
                    $('#blue_person').fadeIn(2000,function(){
                        $('#sec_chat4').fadeIn(2000);
                    })
                })
            })
            setTimeout(function(){$.fn.fullpage.moveSectionDown();},66000);
            $('#gold_person').delay(66200).fadeIn(2000,function(){
                $('#black_person1').fadeIn(2000);
                $('#black_person2').fadeIn(2000);
                $('#first_chat5').fadeIn(2000,function(){
                    $('#black_person3').fadeIn(2000);
                    $('#black_person4').fadeIn(2000);
                    $('#sec_chat5').delay(500).fadeIn(2000,function(){
                        setTimeout(function(){
                            window.location.href = "/choose";
                        },2000);
                    });
                });
            });


        });
            </script>

@stop

