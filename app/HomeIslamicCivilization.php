<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class HomeIslamicCivilization extends Model
{
    use Translatable;
    protected $translatable = ['main_title', 'sub_title','content','aya_quran','referance'];
}
