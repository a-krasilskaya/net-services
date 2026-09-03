<?php

namespace App\Helpers;

class Typography
{
    protected static array $shortWords = [
        'в', 'во', 'к', 'ко', 'с', 'со', 'у', 'о', 'об', 'обо',
        'от', 'ото', 'до', 'из', 'изо', 'на', 'по', 'под', 'подо',
        'над', 'надо', 'за', 'при', 'для', 'без', 'безо', 'через',
        'про', 'между', 'среди', 'а', 'и', 'но', 'да', 'или',
        'что', 'чтобы', 'как', 'так', 'же', 'ли', 'бы', 'не', 'ни',
    ];

    public static function fixOrphans(string $text): string
    {
        $words = implode('|', self::$shortWords);

        return preg_replace(
            '/\b(' . $words . ')\s+/iu',
            '$1&nbsp;',
            $text
        );
    }
}