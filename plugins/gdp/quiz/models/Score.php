<?php namespace Gdp\Quiz\Models;

use Model;

/**
 * Model
 */
class Score extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gdp_quiz_score';
    
    protected $fillable = ['total_score'];
    
    public $belongsTo = [
        'profile' => ['Acme\Profile\Models\Profile']
        ];
        
    /* public $hasMany = [
        'quizzes' => ['Gdp\Quiz\Models\Quiz']
        ];
        */
}