<!-- Workorder Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('workorder', 'Workorder:') !!}
	{!! Form::number('workorder', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Of Discrepancy Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('date_of_discrepancy', 'Date Of Discrepancy:') !!}
	{!! Form::date('date_of_discrepancy', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Of Discrepancy Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('description_of_discrepancy', 'Description Of Discrepancy:') !!}
	{!! Form::textarea('description_of_discrepancy', null, ['class' => 'form-control']) !!}
</div>

<!-- Corrective Action Due Date Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('corrective_action_due_date', 'Corrective Action Due Date:') !!}
	{!! Form::date('corrective_action_due_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Rejection Type Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('rejection_type', 'Rejection Type:') !!}
	{!! Form::text('rejection_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Internal Comments Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('internal_comments', 'Internal Comments:') !!}
	{!! Form::textarea('internal_comments', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
