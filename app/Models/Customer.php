<?php namespace App\Models;

use Sofa\Eloquence\Mappable; // extension trait
use Sofa\Eloquence\Eloquence; // base trait
use Illuminate\Database\Eloquent\Model as Model;

class Customer extends Model
{
    use Eloquence, Mappable;

	public $table = "Customer";
    public $primaryKey = 'ID';

	protected $maps=[
		'id' => 'ID'
	];
	public $fillable = [

		"CUSTCODE",
		"CUSTNAME",
		"ADDRESS1",
		"ADDRESS2",
		"ADDRESS3",
		"CITY",
		"STATE",
		"ZIP",
		"SHIPTO",
		"destination_id",
		"SHIPVIA",
		"carrier_id",
		"DEFFREIGHT",
		"CONTACT1",
		"PHONE1",
		"EXTENSION1",
		"CONTACT2",
		"PHONE2",
		"EXTENSION2",
		"FAX",
		"EMAIL",
		"COD",
		"TAXIDEN",
		"REMARKS"

	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "ID" => "integer",
		"CUSTCODE" => "string",
		"CUSTNAME" => "string",
		"ADDRESS1" => "string",
		"ADDRESS2" => "string",
		"ADDRESS3" => "string",
		"CITY" => "string",
		"STATE" => "string",
		"ZIP" => "string",
		"SHIPTO" => "string",
		"destination_id" => "integer",
		"SHIPVIA" => "string",
		"carrier_id" => "integer",
		"DEFFREIGHT" => "string",
		"CONTACT1" => "string",
		"PHONE1" => "string",
		"EXTENSION1" => "string",
		"CONTACT2" => "string",
		"PHONE2" => "string",
		"EXTENSION2" => "string",
		"FAX" => "string",
		"EMAIL" => "string",
		"COD" => "boolean",
		"TAXIDEN" => "string",
		"REMARKS" => "string",
        "TimeStamp" => "timestamp",
        "updated_at" => "timestamp",
        "created_at" => "timestamp",
    ];

	public static $rules = [
	    
	];

}
