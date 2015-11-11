<table class="table">
    <thead>
    <th>Id</th>
			<th>Workorder</th>
			<th>Date Of Discrepancy</th>
			<th>Description Of Discrepancy</th>
			<th>Corrective Action Due Date</th>
			<th>Rejection Type</th>
			<th>Internal Comments</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($dmrs as $dmr)
        <tr>
            <td>{!! $dmr->id !!}</td>
			<td>{!! $dmr->workorder !!}</td>
			<td>{!! $dmr->date_of_discrepancy !!}</td>
			<td>{!! $dmr->description_of_discrepancy !!}</td>
			<td>{!! $dmr->corrective_action_due_date !!}</td>
			<td>{!! $dmr->rejection_type !!}</td>
			<td>{!! $dmr->internal_comments !!}</td>
			<td>{!! $dmr->created_at !!}</td>
			<td>{!! $dmr->updated_at !!}</td>
            <td>
                <a href="{!! route('dmrs.edit', [$dmr->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('dmrs.delete', [$dmr->id]) !!}" onclick="return confirm('Are you sure wants to delete this Dmr?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
