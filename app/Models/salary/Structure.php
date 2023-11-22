<?php

namespace App\Models\salary;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Structure extends Model
{
    use HasFactory;
    protected $fillable =['name','description','status'];

    public function charts(): BelongsToMany
    {
        $this->belongsToMany(Chart::class);
    }
}
