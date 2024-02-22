<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Candidates extends Model
{
    use HasFactory;
    use Userstamps;
    use SoftDeletes;

    public $table = "candidates";
    protected $fillable = [
        'job_id',
        'name',
        'email',
        'phone',
        'year',
    ];

    public function Jobs()
    {
        return $this->belongsTo(Jobs::class);
    }

    public function skill_sets()
    {
        return $this->belongsToMany(Skills::class, 'skill_sets');
    }

}
