<?php

namespace App\Traits;

trait MaskNumber
{
    public function fromMask($value)
    {
        if (!empty($value)) {
            return str_replace(['.', ',', '-', '(', ')', '\\', '/', '|', '_', ':', ';', ' '], '', $value);
        }
    }
    public function toMask($value, $mask, String $message = null)
    {
        if (!empty($value)) {
            $maskared = '';
            $k = 0;
            
            for ($i = 0; $i <= strlen($mask) - 1; $i++) {
                if ($mask[$i] == '#') {
                    if (isset($value[$k])) {
                        $maskared .= $value[$k++];
                    }
                } else {
                    if (isset($mask[$i])) {
                        $maskared .= $mask[$i];
                    }
                }
            }

            return $maskared;
        }

        return $message;
    }
}
