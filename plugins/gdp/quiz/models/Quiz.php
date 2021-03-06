<?php namespace Gdp\Quiz\Models;

use Model;

/**
 * Model
 */
class Quiz extends Model
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
    public $table = 'gdp_quiz_quiz';
    
    protected $fillable = ['description'];
    
    public $hasMany = [
            'questions' => ['Gdp\Quiz\Models\Question']
        ];

    /* public $belongsTo = [
            'score' => ['Acme\Profile\Models\Score']
        ];
        */
        
    /* public $hasManyThrough = [
            'answers' => [
                    'Gdp\Quiz\Models\Answer',
                    'through' => 'Gdp\Quiz\Models\Question'
                ],
        ]; */
}