# DateTimeHelper

Simple library which help:
- to obtain current time in MySQL string format
- to create DateTimeImmutable object from MySQL string

## Требования

- PHP 7.1

## Установка

```bash
composer require alexander-pogorelov/date-time-helper
```

## Использование

```php
<?php

$helper = new DateHelper();
$helper->getCurrentDateMySQL('Europe/Minsk') // 2024-02-16 15:36:45
$helper->getCurrentDateMySQL('2024-02-16 15:36:45', 'Europe/Minsk') // DateTimeImmutable object
```