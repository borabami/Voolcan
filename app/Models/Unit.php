<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use SoftDeletes, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['workspace_id','title','description'];

    /**
     * Get the workspace associated with the unit.
     */
    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }
}
