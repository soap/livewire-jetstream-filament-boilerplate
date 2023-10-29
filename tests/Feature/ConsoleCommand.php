<?php

use function Pest\Laravel\artisan;

it('asks for first name and last name', function () {
    artisan('shield:super-admin')
        ->expectsQuestion('First Name', 'Taylor')
        ->expectsQuestion('Last Name', 'Otwell')
        ->expectsQuestion('Email address', 'taylor.o@laravel.com')
        ->expectsQuestion('Password', 'secret')
        ->expectsOutput('Success!');
});
