<!DOCTYPE Html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{Html::style('/css/gradient.css')}}
    <link rel="stylesheet" href="/assets/global/plugins/font-awesome/css/font-awesome.min.css">
    {{Html::script('/assets/global/plugins/jquery.min.js')}}
<style>
    html,body {
        height: 100%;

    }
    .main {
        height: 100%;
        width: 100%;
        display: table;
    }
    .wrapper {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
    }



    .ImgField img{
        display: block;
        position: absolute;
        margin: 0;
    }

    .second{
        left: +35%;
    }

    .first {
        left: +35%;
        z-index:9999;
        transition-duration:0.96s;
        -webkit-transition-duration:0.96s;
        -moz-transition-duration:0.96s;
        -o-transition-duration:0.96s;
    }

    .image.first:hover {
        opacity:0.00;
    }
    .fa:hover{
        color: rgba(0,0,0,0.6) !important;
    }
</style>
</head>
<body>

<div class="main" style="text-align: center" >

    <div class="wrapper">
        <a href="/forums" ><i class="fa fa-comments" style="position: fixed; color:whitesmoke; left: 2%; top:2%; font-size: 350%;" aria-hidden="true"></i></a>
        <a href="./stay"  id="name">
            <div  class="ImgField" >
                <img class="image first" width="30%" src="/assets/images/logo_white.png"/>
            </div>

            <img class="image second" width="30%" src="/assets/images/logo_black.png"/>
        </a>
    </div>


</div>
<script>
    </script>



</body>

</html>