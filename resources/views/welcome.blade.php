@extends('layouts.app')

@section('page-title',env('APP_NAME'))

@section('css')
    <style>.section{
    text-align: center;
            vertical-align: middle;
    }

ul{
    text-align: center;
}
        #menu li {
            display:inline-block;
            margin: 10px;
            color: #000;
            background:#fff;
            background: rgba(255, 255, 255, 0.5);
            -webkit-border-radius: 4px;
            border-radius: 4px;
        }
        #menu li.active{
            background:#666;
            background: rgba(255,255,255,0.9);
            color: #fff;
        }
        #menu li a{
            text-decoration:none;
            color: #000;
        }
        #menu li.active a:hover{
            color: #000;
        }
        #menu li:hover{
            background: rgba(255,255,255, 0.8);
        }
        #menu li a,
        #menu li.active a{
            padding: 8px;
            display:block;
        }
        #menu li.active a{
            color: #fff;
        }
        #menu{
            position:fixed;
            top:0;
            left:0;
            height: 40px;
            z-index: 70;
            width: 100%;
            padding: 0;
            margin:0;
        }

    </style>
@stop

@section('content')
    <ul id="menu">

        <li data-menuanchor="first"><a href="#first"></a> </li>
        <li data-menuanchor="second"><a href="#second"></a> </li>
    </ul>

    <div class="section" style="background-color: black" data-anchor="first">
<h2>1</h2>
    </div>


    <div class="section" style="background-color: black" data-anchor="second">
            <h2>2</h2>
    </div>

    @stop

@section('js')
    <script type="text/javascript">

        jQuery(document).ready(function() {
            jQuery('#fullpage').fullpage({
                anchors: ['first','second'],
                menu:'#menu'
            });
        });
    </script>
    @stop