<?php

namespace App\Models\salary;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Chart extends Model
{
    use HasFactory;
    protected $fillable =['name','code','nature'];

    public function structures():belongsToMany
    {
        $this->belongsToMany(Structure::class);
    }
}
