<!DOCTYPE html>
<Html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/Html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title') | {{env('APP_NAME')}} </title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">


    <meta name="application-name" content="{{env('APP_NAME')}}"/>
    <link rel="shortcut icon" href="{{{ asset('./assets/favicon.png') }}}">

    {{-- For production, it is recommended to combine following styles into one. --}}
    {{Html::style('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}
    {{Html::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}
    {{Html::style('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}
{{-- {{Html::style('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}} --}}
    {{Html::style('assets/global/css/components.min.css')}}
    {{Html::style('assets/global/css/plugins.min.css')}}
    {{Html::style('assets/layouts/layout2/css/layout.min.css')}}
    {{Html::style('assets/layouts/layout2/css/themes/blue.min.css')}}
    {{Html::style('assets/layouts/layout2/css/custom.min.css')}}
    {{Html::style('assets/pages/css/login.min.css')}}

    @yield('styles')
</head>
<body class="login" style="background-image: url('/assets/images/bg2.jpg') !important;">
<div class="logo">

</div>
<div class="content">
    @yield('content')
</div>

<div class="copyright"> {{date('Y')}} © {{env('APP_NAME')}} </div>

<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="." type="text/javascript"></script>
<script src="." type="text/javascript"></script>
<script src="." type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="." type="text/javascript"></script>

{{Html::script('assets/global/plugins/jquery.min.js')}}
{{Html::script('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}


{{Html::script('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}
{{Html::script('assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}
{{Html::script('assets/pages/scripts/login.min.js')}}
<script type="text/javascript">
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

</script>
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>
@yield('scripts')
</body>
</Html>