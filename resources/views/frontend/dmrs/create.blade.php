@extends('frontend.layouts.master')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'dmrs.store']) !!}

        @include('frontend.dmrs.fields')

    {!! Form::close() !!}
</div>
@endsection
