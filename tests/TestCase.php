<?php

namespace Tests;

use App\Providers\AppServiceProvider;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

covers(AppServiceProvider::class);

abstract class TestCase extends BaseTestCase
{
    //
}
