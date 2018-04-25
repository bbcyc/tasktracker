<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frequency extends Model
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

    public static function convertDayToNumber ($weekday) {
        switch ($weekday) {
            case "Monday": 
                return self::WEEKDAY_MON;
            case "Tuesday":
                return self::WEEKDAY_TUE;
            case "Wednesday":
                return self::WEEKDAY_WED;
            case "Thursday":
                return self::WEEKDAY_THU;
            case "Friday":
                return self::WEEKDAY_FRI;
            case "Saturday":
                return self::WEEKDAY_SAT;
            case "Sunday":
                return self::WEEKDAY_SUN;
            default: 
                echo "Malformed weekday used";
                return 0;
        }
    }

    public static function convertWeekdaysToBitmask ($weekdays) {
        if (empty($weekdays)) {
            $weekdayBitMask = 0;
        }
        else if (is_array($weekdays)) {
            foreach ($weekdays as $day) {
                $weekdayBitMask += convertDayToNumber($day);
            }
        }
        else {
            $weekdayBitMask = convertDayToNumber($weekdays);
        }
    }
}
