@extends('master')

@section('title')
  Lorem Ipsum
@stop

    <h1>
LoremIpsum Text
    </h1>


<div>
  @foreach ($paragraphs as $value)
{{$value}}<br><br>
@endforeach
</div>
<form method='POST' action='/loremText'>
{{ csrf_field() }}
<input type='text' name='paragraphs'>
<input type='submit' value='Submit'>
</form>
<a href="/">Home</a>
