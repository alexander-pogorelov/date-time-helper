<?php

declare(strict_types=1);

namespace AlexanderPogorelov\DateTimeHelper;

interface DateHelperInterface
{
    public const MYSQL_STRING_FORMAT = 'Y-m-d H:i:s';

    /**
     * @throws \Exception
     */
    public function getCurrentDateMySQL(string $timezone = 'UTC'): string;

    /**
     * @throws \Exception
     */
    public function createDateFromString(string $date, string $timezone = 'UTC'): ?\DateTimeImmutable;
}
