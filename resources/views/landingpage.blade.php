@extends('layouts.application')

@section('title', 'Bootstrap learn')

@section('content')
    @include('sections.landing')
    @include('sections.features')
    @include('sections.our-work')
    @include('sections.stuff')
    @include('sections.team')
    @include('sections.techs')
    @include('sections.project')
    @include('sections.blog')
@endsection