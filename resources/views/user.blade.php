
@extends('master')

@section('title')
  User Generator
@stop



   <h1>
Users profiles
   </h1>

<div>
@foreach($profiles as $profiless)
{{$profiless['name']}}
{{$profiless['email']}}
{{$profiless['address']}}
<br> <br>

@endforeach
</div>
<form method='POST' action='/user'>
{{ csrf_field() }}
<input type='text' name='numusers'>
<input type='submit' value='Submit'>
</form>



<a href="/">Home</a>
