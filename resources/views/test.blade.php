<?php

use App\Models\User;

$test = User::where('name', 'User X')->first();
?>

<h1>User Data</h1>
<h2>{{ $test->name }}</h2>
<h3>{{ $test->email }}</h3>
<h4>{{ $test->bio }}</h4>

<?php

use App\Models\Products;

$test = Products::all();
?>

<h1>Products Data</h1>
@foreach ($test as $item)
    <h2>{{ $item->name }}</h2>
    <h3>{{ $item->description }}</h3>
    <img src="{{ $item->image_url }}" alt="{{ $item->name }}">
@endforeach

<?php

use Illuminate\Support\Facades\DB;

$test = DB::table('consultations')
    ->join('users as u', 'consultations.user_id', '=', 'u.id')
    ->join('users as c', 'consultations.consultant_id', '=', 'c.id')
    ->select('consultations.id', 'u.name as user_name', 'c.name as consultant_name')
    ->get();
?>

<h1>Consultations Data</h1>
@foreach ($test as $item)
    <h2>Consultation ID: {{ $item->id }}</h2>
    <h3>User: {{ $item->user_name }}</h3>
    <h3>Consultant: {{ $item->consultant_name }}</h3>
@endforeach

<?php
use App\Models\ChatMessages;

$test = ChatMessages::all();
?>

<h1>Chat Messages Data</h1>
@foreach ($test as $item)
    <h2>Consultation ID: {{ $item->consultation_id }}</h2>
    <h3>Sender ID: {{ $item->sender_id }}</h3>
    <h4>Message: {{ $item->message }}</h4>
    <h5>Sent At: {{ $item->sent_at }}</h5>
@endforeach