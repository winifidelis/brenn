<?php

namespace App\Traits;

trait FormatsNumber
{
    public function fromFloatNumber(Float $value)
    {
        return number_format($value, 2, ',', '.');
    }

    protected function toFloat(String $value)
    {
        return floatval(str_replace(',', '.', str_replace('.', '', $value)));
    }

    private function toMonetary(Float $value)
    {
        return 'R$ '. $this->fromFloatNumber($value);
    }
}
