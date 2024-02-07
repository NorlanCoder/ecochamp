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


    {{-- <!-- post preview modal --> 
    @include('navigations.post_create') --}}

    <!-- create post -->
    @include('navigations.post_create')


    <!-- create activity -->
    @include('navigations.activity_create')

    <!-- create alert -->
    @include('navigations.alert_create')

    <!-- show post -->
    @include('navigations.post_show')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

@endsection