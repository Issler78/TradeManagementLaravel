<?php

namespace App\Enums\Store;

enum StoreEnum: string
{
    case A = 'Active';
    case I = 'Inactive';

    public static function fromValue (string $name)
    {
        foreach (self::cases() as $status)
        {
            if ($name === $status->name)
            {
                return $status->value;
            }
        }

        throw new \ValueError("$name is a invalid case.");
    } 
}
