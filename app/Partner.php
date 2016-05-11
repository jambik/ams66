<?php

namespace App;

use App\Traits\ImageableTrait;
use App\Traits\ResourceableTrait;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use ImageableTrait, ResourceableTrait;

    protected $table = 'partners';

    protected $fillable = ['title', 'image'];

    protected $appends = ['img_url'];
}
