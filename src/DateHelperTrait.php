<?php

declare(strict_types=1);

namespace AlexanderPogorelov\DateTimeHelper;

trait DateHelperTrait
{
    public function getCurrentDateMySQL(string $timezone = 'UTC'): string
    {
        return (new \DateTimeImmutable('now', new \DateTimeZone($timezone)))->format(DateHelperInterface::MYSQL_STRING_FORMAT);
    }

    public function createDateFromString(string $datetime, string $timezone = 'UTC'): ?\DateTimeImmutable
    {
        $date = \DateTimeImmutable::createFromFormat(
            DateHelperInterface::MYSQL_STRING_FORMAT,
            $datetime,
            new \DateTimeZone($timezone)
        );

        return false !== $date ? $date : null;
    }
}
