@extends('layouts.app')

@section('page-title',env('APP_NAME'))

@section('css')
<style>
    .main {
        text-align: center;
        width: 40%;
        height: 100%;
        margin: auto;
        display: table;

    }
    .wrapper {
        position: fixed;
        left: 50%;
        transform: translateX(-50%);
        align-items: center;
        display: block;
        padding: 25px;
        width: 40%;
        background-color: whitesmoke;
        border: 1px solid   white;
        border-radius: 30px;
        vertical-align: middle;
        color: white;
    }
    @media screen and (max-width: 1024px) {
        .main,.wrapper {
            position: relative;
            width: 100% !important;
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

    }
</style>
@stop

@section('content')
    @if ( session()->has('error') )
        <div class="alert alert-danger alert-dismissable">{{ session()->get('error') }}</div>
    @endif
    @if ( session()->has('message') )
        <div class="alert alert-success alert-dismissable">{{ session()->get('message') }}</div>
    @endif
    <div class="main">
        <div class="wrapper" style="margin-top: 5%">
            <h1 style="color:black">Change background:</h1>
            <form action="/changeBG" role="form" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div>
                                                        <span class="btn default btn-file">
                                                            <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
                                                            <span><input type="file"  required name="background"></span>
                                                        </span>
                        </div>
                    </div>

                </div>
                <div class="margin-top-10">
                    <input type="submit" class="btn btn-success" value="Submit">
                    <input type="reset" class="btn btn-danger" value="Cancel">
                </div>
            </form>
            <h1 style="color:black">Reset background:</h1>
            <form action="/resetBG" method="post">
                {{ csrf_field() }}
                <input type="submit" class="btn btn-success" value="Reset">
            </form>
        </div>
        <div class="wrapper" style="margin-top: 30%">
            <h1 style="color:black">Change avatar:</h1>
            <form action="/changeAvatar" role="form" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div>
                                                        <span class="btn default btn-file">
                                                            <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
                                                            <span><input type="file"  required name="avatar"></span>
                                                        </span>
                        </div>
                    </div>

                </div>
                <div class="margin-top-10">
                    <input type="submit" class="btn btn-success" value="Submit">
                    <input type="reset" class="btn btn-danger" value="Cancel">
                </div>
            </form>
        </div>
    </div>
@stop

@section('js')

@stop