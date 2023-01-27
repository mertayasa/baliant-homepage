@extends('layouts.app')
@section('title', $title ?? 'Baliant Projects | Portofolio')

@section('content')
    <!-- hero -->
    @include('frontend.components.portofolio.hero')
    <!-- end hero -->
    
    <div class="bg-white">
        @include('frontend.components.portofolio.brief')
    </div>
@endsection