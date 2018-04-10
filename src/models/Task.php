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
    public $userID = null;
    public $name = null;
    public $repeatable = null;

    /**
     * @param object $task
     *
     * @return User|null
     */
    public function create($task) {
        $this->userID = $task['userID'];
        $this->name = $task['name'];
        $this->repeatable = $task['isRepeatable'];
        //\App\Utilities::pr($task);
		//exit;
        $taskID = $this->insertGetId([
            'userID' => $this->userID,
            'name' => $this->name,
            'isRepeatable' => (bool)$this->repeatable
        ]);
        return $taskID;
    }
}
