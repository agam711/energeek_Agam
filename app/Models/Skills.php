<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Skills extends Model
{
    use HasFactory;
    use Userstamps;
    use SoftDeletes;

    public $table = "skills";
    protected $fillable = [
        'name',
    ];

    public function Skill_Sets()
    {
        return $this->hasMany(Skill_Sets::class);
    }
}
