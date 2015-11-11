<table class="table">
    <thead>
    <th>Id</th>
			<th>Partid</th>
			<th>Workordr</th>
			<th>Custcode</th>
			<th>Partnum</th>
			<th>Procname</th>
			<th>Price</th>
			<th>Pricecode</th>
			<th>Rework</th>
			<th>Daterecv</th>
			<th>Datereqd</th>
			<th>Shipped</th>
			<th>Custpo</th>
			<th>Custpl</th>
			<th>Qty</th>
			<th>Qtytype</th>
			<th>Qtyship</th>
			<th>Qtynotship</th>
			<th>Sftpl</th>
			<th>Shipto</th>
			<th>Shipvia</th>
			<th>Freight</th>
			<th>Cod</th>
			<th>Started</th>
			<th>Complete</th>
			<th>Dateship</th>
			<th>Invoiced</th>
			<th>Invnumber</th>
			<th>Dateinv</th>
			<th>Cost</th>
			<th>Wonote</th>
			<th>Stepname1</th>
			<th>Tmanhrs1</th>
			<th>Tothours1</th>
			<th>Stepname2</th>
			<th>Tmanhrs2</th>
			<th>Tothours2</th>
			<th>Stepname3</th>
			<th>Tmanhrs3</th>
			<th>Tothours3</th>
			<th>Timestamp</th>
			<th>Imageid</th>
			<th>Lastedit</th>
			<th>Hot</th>
			<th>Priority</th>
			<th>Custid</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($workorders as $workorder)
        <tr>
            <td>{!! $workorder->ID !!}</td>
			<td>{!! $workorder->PartID !!}</td>
			<td>{!! $workorder->WORKORDR !!}</td>
			<td>{!! $workorder->CUSTCODE !!}</td>
			<td>{!! $workorder->PARTNUM !!}</td>
			<td>{!! $workorder->PROCNAME !!}</td>
			<td>{!! $workorder->PRICE !!}</td>
			<td>{!! $workorder->PRICECODE !!}</td>
			<td>{!! $workorder->REWORK !!}</td>
			<td>{!! $workorder->DATERECV !!}</td>
			<td>{!! $workorder->DATEREQD !!}</td>
			<td>{!! $workorder->SHIPPED !!}</td>
			<td>{!! $workorder->CUSTPO !!}</td>
			<td>{!! $workorder->CUSTPL !!}</td>
			<td>{!! $workorder->QTY !!}</td>
			<td>{!! $workorder->QTYTYPE !!}</td>
			<td>{!! $workorder->QTYSHIP !!}</td>
			<td>{!! $workorder->QTYNOTSHIP !!}</td>
			<td>{!! $workorder->SFTPL !!}</td>
			<td>{!! $workorder->SHIPTO !!}</td>
			<td>{!! $workorder->SHIPVIA !!}</td>
			<td>{!! $workorder->FREIGHT !!}</td>
			<td>{!! $workorder->COD !!}</td>
			<td>{!! $workorder->STARTED !!}</td>
			<td>{!! $workorder->COMPLETE !!}</td>
			<td>{!! $workorder->DATESHIP !!}</td>
			<td>{!! $workorder->INVOICED !!}</td>
			<td>{!! $workorder->INVNUMBER !!}</td>
			<td>{!! $workorder->DATEINV !!}</td>
			<td>{!! $workorder->COST !!}</td>
			<td>{!! $workorder->WONOTE !!}</td>
			<td>{!! $workorder->STEPNAME1 !!}</td>
			<td>{!! $workorder->TMANHRS1 !!}</td>
			<td>{!! $workorder->TOTHOURS1 !!}</td>
			<td>{!! $workorder->STEPNAME2 !!}</td>
			<td>{!! $workorder->TMANHRS2 !!}</td>
			<td>{!! $workorder->TOTHOURS2 !!}</td>
			<td>{!! $workorder->STEPNAME3 !!}</td>
			<td>{!! $workorder->TMANHRS3 !!}</td>
			<td>{!! $workorder->TOTHOURS3 !!}</td>
			<td>{!! $workorder->TimeStamp !!}</td>
			<td>{!! $workorder->ImageID !!}</td>
			<td>{!! $workorder->LastEdit !!}</td>
			<td>{!! $workorder->HOT !!}</td>
			<td>{!! $workorder->Priority !!}</td>
			<td>{!! $workorder->CustID !!}</td>
			<td>{!! $workorder->created_at !!}</td>
			<td>{!! $workorder->updated_at !!}</td>
            <td>
                <a href="{!! route('workorders.edit', [$workorder->WORKORDR]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('workorders.delete', [$workorder->WORKORDR]) !!}" onclick="return confirm('Are you sure wants to delete this Workorder?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
