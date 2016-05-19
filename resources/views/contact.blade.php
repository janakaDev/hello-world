
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>About</title>

<!-- bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
    href="http://bootswatch.com/cosmo/bootstrap.min.css"
    integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
    crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
    integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r"
    crossorigin="anonymous">
<link
    href="http://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css"
    rel="stylesheet">

    


</head>
<body>
@extends('main')
@section('content')
@section('title','|Contact') 
    <div class="row">
        <h1>Contact Me</h1>
        <hr>
        <form>
            <div class="form-group">
                <label name="email">Email:</label>
                <input id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label name="subject">Subject:</label>
                <input id="subject" name="subject" class="form-control">
            </div>
            <div class="form-group">
                <label name="message">Message:</label>
                <textarea id="message" name="message" class="form-control"></textarea>
            </div>

            <input type="submit"values="send" class="btn btn-success">
        </form>

    </div>

@endsection     
