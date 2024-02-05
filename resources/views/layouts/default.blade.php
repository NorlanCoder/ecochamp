@extends('app')
@section('content')

    <div id="wrapper">

        <!-- header -->
        @include('navigations.navigation')
        
        <!-- sidebar -->
        @include('navigations.menu')

        <!-- main contents -->
        @yield('index')

    </div>


    <!-- open chat box -->
    {{-- @include('navigations.chat') --}}


    <!-- post preview modal --> 
    {{-- @include('navigations.post_create') --}}

    <!-- create status -->
    {{-- @include('navigations.status_create') --}}


    <!-- create story -->
    {{-- @include('navigations.story_create') --}}


@endsection