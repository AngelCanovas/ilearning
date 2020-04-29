<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Goals
 *
 * @property int $id
 * @property int $course_id
 * @property string $goal
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goals newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goals newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goals query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goals whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goals whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goals whereGoal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goals whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goals whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Goals extends Model
{
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
