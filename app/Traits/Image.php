<?php

namespace App\Traits;

trait Image
{
    public function image()
    {
        return 'storage/' . $this->image;
    }
}
