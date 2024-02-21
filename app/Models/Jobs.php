<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Jobs extends Model
{
    use HasFactory;
    use Userstamps;
    use SoftDeletes;

    public $table = "jobs";
    protected $fillable = [
        'name',
    ];

    public function Candidates()
    {
        return $this->hasMany(Candidates::class);
    }

}
