@extends('frontend.layouts.master')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($dmr, ['route' => ['dmrs.update', $dmr->id], 'method' => 'patch']) !!}

        @include('frontend.dmrs.fields')

    {!! Form::close() !!}
</div>
@endsection
