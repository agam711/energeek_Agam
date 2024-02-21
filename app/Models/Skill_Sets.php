<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill_Sets extends Model
{
    use HasFactory;
    public $table = "skill_sets";
    protected $fillable = [
        'skill_id',
        'candidate_id',
    ];
    public function Candidates()
    {
        return $this->belongsTo(Candidates::class);
    }
    public function Skills()
    {
        return $this->belongsTo(Skills::class);
    }
}
