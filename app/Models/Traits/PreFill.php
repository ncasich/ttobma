<?php

namespace App\Models\Traits;

trait PreFill
{
    public function preFill(array $params = [])
    {
        $filllable = $this->getFillable();
        $default = array_combine($filllable, array_fill(0, count($filllable), null));
        return $this->fill(array_merge($default, $params));
    }
}
