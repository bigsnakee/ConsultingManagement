<?php

// app/Enums/MethodEnum.php
namespace App\Enums;

enum MethodEnum: string
{
    case EMAIL = 'Email';
    case PHONE = 'Số điện thoại';
    case IN_PERSON = 'Trực tiếp';
    case Zalo = 'Zalo';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
