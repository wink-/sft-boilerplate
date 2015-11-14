<!-- Workorder Field -->

{!! Form::hidden('workorder', $workorder->WORKORDR, ['class' => 'form-control']) !!}

<div class="row">
    <div class="form-group-sm">
        <!-- Date Of Discrepancy Field -->
        <div class="col-sm-2">
            {!! Form::label('date_of_discrepancy', 'Date Of Discrepancy:') !!}
        	{!! Form::date('date_of_discrepancy', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Rejection Type Field -->
        <div class="col-sm-2">
            {!! Form::label('rejection_type', 'Rejection Type:') !!}
            {!! Form::select('size', array('internal' => 'SFT Found', 'external' => 'Customer Found'), 'internal') !!}
        </div>

    </div>
</div>

<div class="row">
    <div class="form-group-sm">
        <!-- Corrective Action Due Date Field -->
        <div class="col-sm-2">
            {!! Form::label('corrective_action_due_date', 'Corrective Action Due Date:') !!}
            {!! Form::date('corrective_action_due_date', null, ['class' => 'form-control']) !!}
        </div>    

    </div>
</div>

<div class="row">
    <div class="form-group-sm">
        <!-- Description Of Discrepancy Field -->
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('description_of_discrepancy', 'Description Of Discrepancy:') !!}
            {!! Form::textarea('description_of_discrepancy', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="form-group-sm">
        <!-- Internal Comments Field -->
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('internal_comments', 'Internal Comments:') !!}
        	{!! Form::textarea('internal_comments', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
