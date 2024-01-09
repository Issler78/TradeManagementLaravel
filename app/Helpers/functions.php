<?php

use App\Enums\Store\StoreEnum;

if (!function_exists('getStatusValue'))
{
    function getStatusValue(string $name): string
    {
        return StoreEnum::fromValue($name);
    }
}