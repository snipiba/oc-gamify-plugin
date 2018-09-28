<?php namespace Octobro\Gamify\Models;

use Model;

/**
 * Mission Model
 */
class Mission extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'name'                  => 'required|between:4,30',
        'points'                => 'required|integer',
        'class'                 => 'required',
        'type'                  => 'required|string:daily|weekly|one-time|always',
        'target'                => 'required'
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'octobro_gamify_missions';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function achieve($user, $amount = 1)
    {
        // Create achievement

        // Update points

        // Fire event
    }
}
