<?php

use Ksoft\Kseed\Faker;

/** @return \Faker\Generator|Ksoft\Kseed\Faker */
function faker(): Faker
{
    return app(Faker::class);
}
