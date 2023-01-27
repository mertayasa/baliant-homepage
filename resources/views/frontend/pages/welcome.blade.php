@extends('layouts.app')
@section('title', 'Baliant Projects | Jasa Pengembangan Web Di Bali')

@section('content')
    <!-- hero -->
    @include('frontend.components.hero')
    <!-- end hero -->

    <div class="bg-white">
        <!-- proccess -->
        @include('frontend.components.proccess')
        <!-- end proccess -->

        <!-- advantage -->
        @include('frontend.components.advantage')
        <!-- end advantage -->
    </div>
    
    <!-- advantage -->
    @include('frontend.components.portofolio')
    <!-- end advantage -->
@endsection