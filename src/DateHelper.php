<?php

declare(strict_types=1);

namespace AlexanderPogorelov\DateTimeHelper;

class DateHelper
{
    public const MYSQL_STRING_FORMAT = 'Y-m-d H:i:s';

    /**
     * @throws \Exception
     */
    public function getCurrentDateMySQL(string $timezone = 'UTC'): string
    {
        return (new \DateTimeImmutable('now', new \DateTimeZone($timezone)))->format(self::MYSQL_STRING_FORMAT);
    }

    /**
     * @throws \Exception
     */
    public function createDateFromString(string $datetime, string $timezone = 'UTC'): \DateTimeImmutable
    {
        $date = \DateTimeImmutable::createFromFormat(
            self::MYSQL_STRING_FORMAT,
            $datetime,
            new \DateTimeZone($timezone)
        );

        if (!$date instanceof \DateTimeImmutable) {
            throw new \Exception(sprintf('Unable to create date from string %s with timezone %s.', $datetime, $timezone));
        }

        return $date;
    }
}
