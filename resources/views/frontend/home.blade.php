@extends('frontend.layouts.app', [
    "useDarkLinks" => true,
    "useOnlyDarkLogo" => true
])

@section('content')
@include ("frontend.sections.heading")
@include ("frontend.sections.ico")
@include ("frontend.sections.invest")

@if($sections->secs != null)
  @foreach(json_decode($sections->secs) as $sec)
      @include("frontend.sections.$sec")
  @endforeach
@endif


@endsection







