<?php

namespace Modules\SICA\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
use Modules\SICA\Entities\Program;
use Modules\SICA\Entities\Apprentice;

class Course extends Model implements Auditable
{

    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;
    protected $dates = ['deleted_at'];
    protected $hidden = ['created_at','updated_at'];
    protected $fillable = ['code','star_date','end_date','program_id','deschooling'];
    
    public function program(){
        return $this->belongsTo(Program::class);
    }

    public function apprentices(){
        return $this->hasMany(Apprentice::class);
    }

    public function getCodeNameAttribute()
    {
        return "{$this->code} {$this->program->name}";
    }   
}
