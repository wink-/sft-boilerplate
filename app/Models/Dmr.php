<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Dmr extends Model
{
    
	public $table = "discrepant_materials";
    

	public $fillable = [
		"workorder",
		"date_of_discrepancy",
		"description_of_discrepancy",
		"corrective_action_due_date",
		"rejection_type",
		"internal_comments",

	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "id" => "integer",
		"workorder" => "integer",
		"description_of_discrepancy" => "string",
		"rejection_type" => "string",
		"internal_comments" => "string"
    ];

	public static $rules = [
	    
	];

}
