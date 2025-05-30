@extends('layouts.app')

@section('content')
    @if (true)
        @include('Dashboard.adminDashboard')
    @else
        @include('Dashboard.studentDashboard')
    @endif
@endsection
