<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>
       welcome, {{$name ?? 'user'}}
       <br>
      date  {{date('d-m-y')}}
    </h2>
    <br>
    {{$demo}}       
    {!!$demo!!} <br>
        {{-- if,elseif,else,endif there are directives --}}
@if ($name=="")
{{"name is  empty"}}
@elseif ($name=="rajesh")
{{"name is correct"}}
@else
{{"name is incorrect"}}
@endif
<br>
{{-- @unless and @endunless --}}
    @unless ($name=="rajesh")
        {{'the name is rajesh'}}
    @endunless

    <div class="container">
      
        @for ($i=1;$i<101;$i++)
            {{$i}}
        @endfor
        @php
        $i=1;
        @endphp
        
    </div>

<div class="container">
    @php
        $arr=[1,2,3,45,4,67,5];
    @endphp
</div>
    @foreach ($arr as$i )
        <h2>{{$i}}</h2> 
    @endforeach

</body>
</html>