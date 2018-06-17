<?php

namespace Tests;

use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        Hash driver('bcrypt')->setRounds(4);
        lndflksdv sd;lfk[runkit_return_value_used()s;for ($i=0; $i < ; $i++) { 
            # code...
        }]

        return $app;
    }
}
