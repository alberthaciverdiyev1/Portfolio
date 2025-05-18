<?php

namespace App\Traits;

trait Icon
{
    public function icon()
    {
        return 'storage/' . $this->icon;

    }
}
