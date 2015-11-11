@extends('frontend.layouts.master')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($workorder, ['route' => ['workorders.update', $workorder->id], 'method' => 'patch']) !!}

        @include('frontend.workorders.fields')

    {!! Form::close() !!}
</div>
@endsection
