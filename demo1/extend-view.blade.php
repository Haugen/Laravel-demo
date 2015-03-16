<!--
  Med blade-kommandot "extend" kan vi säga vilken vy vi vill utgå ifrån. I detta fallet
  "laddar vi in" master.blade.php-vyn. Vi har sedan möjlighet att göra förändringar i
  de sektioner som finns definerade.
-->
@extends('master')

<!--
  Skriver över det som finns i sektionen "title" från master.blade.php
-->
@section('title')
  My extended page
@endsection

<!--
  Skriver över det som finns i sektionen "body" från master.blade.php
-->
@section('body')
  This page has been extended from master. Awesome!
@endsection