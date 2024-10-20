<?php

use App\Models\User;

$test = User::where('name', 'User X')->first();
?>

<h1>Chattings</h1>

<h2>{{ $test->name }}</h2>
<h3>{{ $test->email }}</h3>
<h4>{{ $test->bio }}</h4>
