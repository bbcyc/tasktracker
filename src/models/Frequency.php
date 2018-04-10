<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'frequencies';

    const PERIOD_DAILY = 1;
    const PERIOD_WEEKLY = 2;
    const PERIOD_MONTHLY = 3;

    const WEEKDAY_MON = 1;
    const WEEKDAY_TUE = 2;
    const WEEKDAY_WED = 4;
    const WEEKDAY_THU = 8;
    const WEEKDAY_FRI = 16;
    const WEEKDAY_SAT = 32;
    const WEEKDAY_SUN = 64;

    /**
     * @param object $task
     *
     * @return User|null
     */
    public function create($frequency) {
        //\App\Utilities::pr($frequency);
		//exit;
        $success = $this->insert([
            'taskID' => "",
            'period' => "",
            'weekday' => "",
            'position' => "",
        ]);
        return $taskID;
    }
}
