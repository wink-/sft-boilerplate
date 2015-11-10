@extends('frontend.layouts.master')

@section('content')
<div class="container-fluid">

    @include('common.errors')

    {!! Form::open(['route' => 'customers.store']) !!}

        @include('frontend.customers.fields')

    {!! Form::close() !!}
</div>
@endsection
