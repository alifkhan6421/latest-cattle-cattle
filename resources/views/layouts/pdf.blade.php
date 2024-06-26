<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>{{ config('settings.SITE_NAME', 'Admin - Cattle Master') }}</title>

    <style>

        body {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 12px;
            line-height: 1.42857143;
            color: #333;
            background-color: #fff;
        }

        h1, h2, h3, h4, h5, h6 {
            padding: 0;
            margin: 0;
        }

        h3 {
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 5px;
        }

        .row {
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .row:before,
        .row:after {
            display: table;
            content: " ";
        }

        .row:after {
            clear: both;
        }

        .col-lg-6 {
            float: left;
            width: 45.7%;
        }

        .col-lg-12 {
            width: 100%;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right !important;
        }

        .pull-right {
            float: right !important;
        }

        .clearfix {
            clear: both;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 5px;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f6f6f6;
        }

        .pdf-title {
            text-align: center;
        }

        .thumbnail.medium {
            max-width: 200px;
        }

        .pdf-image{
            width: 128px; 
            height: 128px;
        }

        body{
           height: auto !important;       
        }

    </style>

    <!-- Custom Styles -->
@yield('css')

<!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

</head>

<body>
<div class="wrapper">
    <div class="row">
        <div class="col-lg-6">
            <h2>{{ config('settings.SITE_NAME') }}</h2>
        </div>
        <div class="col-lg-6 text-right">
            Date: {{ date('F j, Y') }}
        </div>
    </div>

    @yield('content')
</div>

</body>
</html>
