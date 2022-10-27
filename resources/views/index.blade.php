<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <title>Document</title>
</head>
<body>
    
</body>
</html>
<style>
    body{
        background-color:white; 
    }
</style>

<a href="add">ajouter</a>


<input type="text" name="search" id="search" placeholder="search">


<div id="data">

    @foreach ($data as $row)
        <div>
            Id : {{ $row->id }} 
            Name : {{ $row->name }}
            <a href="/deletepromo?id={{ $row->id }}">Delete </a> 
            <a href="/update_promotion/{{ $row->id }}">/ Edit </a> 
            <br>
        </div>
    @endforeach
    
</div>

<script src="{{ URL::asset('js/search.js') }}"></script>