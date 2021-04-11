<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  @extends('layout')
  @section('content')
    <div>
       <h1>{{__("lang.home")}}</h1>
       <h3>{{__("lang.about")}}</h3>
       <h4>{{__("lang.contact")}}</h4>
    </div>
   @endsection
</body>
</html>