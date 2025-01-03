<?php

// app/Enums/StatusEnum.php
namespace App\Enums;

enum StatusEnum: string
{
    case PENDING = 'Chờ liên hệ';
    case COMPLETED = 'Đã liên hệ';
    case CANCELED = 'Đã hủy';
    
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
