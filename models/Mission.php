<?php namespace Octobro\Gamify\Models;

use Model;

/**
 * Mission Model
 */
class Mission extends Model
{
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
}