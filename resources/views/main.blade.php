@extends('master')

@section('title')
  Homepage
@stop


<body>

    <h1>
Developer's Best Friend
    </h1>
<h2>
<img src="/img/LoremIpsum.png" alt="Smiley face">
</h2>
<p>
  This is a tool that allows you to generate lorem ipsum text as well as random users.
                      Feel free to use this as a way to make development easier.
</p>
<br>
  <div class="forms">

    <form method='POST' action='/loremText' >
    {{ csrf_field() }}
    No. Of Paragraphs (Max. 88)<br><input type='text' name='paragraphs'><br>
    <input type='submit' value='Submit'>
  </form>

<br>

        <form method='POST' action='/user' >
        {{ csrf_field() }}
        No. users with Profiles (Max. 88) <br>
        <input type='text' name='numusers'><br>
        <input type='submit' value='Submit'>
        </form>

        <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
        </ul>
</div>
    
