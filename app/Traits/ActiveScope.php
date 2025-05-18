<?php

namespace App\Traits;

trait ActiveScope
{
    public function active(){
        return $this->where('is_active',1);
    }
}
