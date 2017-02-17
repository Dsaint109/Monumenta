@extends('layouts.master')

@section('title')
    Monumenta
@endsection

@section('keywords')
    iskjd
@endsection

@section('banner')
    @include('includes.search-banner')
@endsection

@section('content')
    @include('includes.categories')
    @include('includes.appDownload')
@endsection

@section('footer')
    @include('includes.footer')
@endsection