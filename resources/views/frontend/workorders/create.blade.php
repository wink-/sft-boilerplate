@extends('frontend.layouts.master')

@section('content')
<div class="container-fluid">

    @include('common.errors')

    {!! Form::open(['route' => 'workorders.store']) !!}

        @include('frontend.workorders.fields')

    {!! Form::close() !!}
</div>
@endsection
