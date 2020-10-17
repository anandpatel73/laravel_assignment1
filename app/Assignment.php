<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function create_data($title,$info)
    {
        $this->title = $title;
        $this->info = $info;
        $this->save();
    }
}
