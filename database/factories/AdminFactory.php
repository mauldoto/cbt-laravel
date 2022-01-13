<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

$factory->define(\App\Models\User::class, function (Faker $faker) {
	$password = 'password';

    return [
		'name'              => $faker->name,
		'email'             => $faker->unique()->safeEmail,
		'email_verified_at' => now(),
		'username'          => $faker->unique()->userName,
		'password'          => Hash::make($password),
		'remember_token'    => Str::random(60),
    ];
});

/*
 User Type
 enum('superadmin','companyadmin')
*/
$factory->state(\App\Models\User::class, 'superadmin', [
    'user_type' => 'superadmin',
]);

$factory->state(\App\Models\User::class, 'companyadmin', [
    'user_type' => 'companyadmin',
]);


// Data for production env
$factory->state(\App\Models\User::class, 'demo-admin', [
	'name'              => 'Demo Admin',
	'email'             => 'admin@cbt.test',
	'username'          => 'admindemo',
	'password'          => Hash::make('admindemo123'),
	'user_type'         => 'superadmin',
]);