<?php namespace App\Models;
use Sofa\Eloquence\Mappable; // extension trait
use Sofa\Eloquence\Eloquence; // base trait
use Illuminate\Database\Eloquent\Model as Model;

class Workorder extends Model
{
    
	protected $maps=[
		'id' => 'WORKORDR'
	];
	public $table = "Workorder";
    protected $primaryKey = "WORKORDR";

	public $fillable = [

		"PartID",
		"WORKORDR",
		"CUSTCODE",
		"PARTNUM",
		"PROCNAME",
		"PRICE",
		"PRICECODE",
		"REWORK",
		"DATERECV",
		"DATEREQD",
		"SHIPPED",
		"CUSTPO",
		"CUSTPL",
		"QTY",
		"QTYTYPE",
		"QTYSHIP",
		"QTYNOTSHIP",
		"SFTPL",
		"SHIPTO",
		"SHIPVIA",
		"FREIGHT",
		"COD",
		"STARTED",
		"COMPLETE",
		"DATESHIP",
		"INVOICED",
		"INVNUMBER",
		"DATEINV",
		"COST",
		"WONOTE",
		"STEPNAME1",
		"TMANHRS1",
		"TOTHOURS1",
		"STEPNAME2",
		"TMANHRS2",
		"TOTHOURS2",
		"STEPNAME3",
		"TMANHRS3",
		"TOTHOURS3",
		"ImageID",
		"HOT",
		"Priority",
		"CustID",

	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "ID" => "integer",
		"PartID" => "integer",
		"WORKORDR" => "integer",
		"CUSTCODE" => "string",
		"PARTNUM" => "string",
		"PROCNAME" => "string",
		"PRICE" => "float",
		"PRICECODE" => "string",
		"REWORK" => "boolean",
		"SHIPPED" => "boolean",
		"CUSTPO" => "string",
		"CUSTPL" => "string",
		"QTY" => "float",
		"QTYTYPE" => "string",
		"QTYSHIP" => "float",
		"QTYNOTSHIP" => "float",
		"SFTPL" => "string",
		"SHIPTO" => "string",
		"SHIPVIA" => "string",
		"FREIGHT" => "string",
		"COD" => "boolean",
		"STARTED" => "boolean",
		"COMPLETE" => "boolean",
		"INVOICED" => "boolean",
		"INVNUMBER" => "integer",
		"COST" => "float",
		"WONOTE" => "string",
		"STEPNAME1" => "string",
		"TMANHRS1" => "float",
		"TOTHOURS1" => "float",
		"STEPNAME2" => "string",
		"TMANHRS2" => "float",
		"TOTHOURS2" => "float",
		"STEPNAME3" => "string",
		"TMANHRS3" => "float",
		"TOTHOURS3" => "float",
		"ImageID" => "integer",
		"LastEdit" => "string",
		"HOT" => "boolean",
		"Priority" => "integer",
		"CustID" => "integer"
    ];

	public static $rules = [
	    
	];

}
