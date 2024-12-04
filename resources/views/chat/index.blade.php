<?php

use App\Models\Roles;
use Illuminate\Support\Facades\Auth;

$user = Auth::user();
$userId = $user->id;
$userIsConsultant = Roles::role_is($user, 'Consultant');

?>

<!DOCTYPE html>
<html lang="en">
@include('header')
<head>
    <title>Chat Interface</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        background: #464646;
        height: 100vh;
        overflow: hidden;
    }

    .main-container {
        display: flex;
        height: 90%;
    }

    .sidebar {
        width: 300px;
        background: #fff;
        border-right: 1px solid #ddd;
        display: flex;
        flex-direction: column;
    }

    .sidebar-header {
        padding: 15px;
        background: #fff;
        border-bottom: 1px solid #ddd;
    }

    .search-box {
        padding: 10px 15px;
        background: #f9f9f9;
        border-bottom: 1px solid #ddd;
    }

    .search-box input {
        width: 100%;
        padding: 8px 15px;
        border: 1px solid #ddd;
        border-radius: 20px;
        background: #fff;
        color: #333;
        outline: none;
    }

    .search-box input::placeholder {
        color: #999;
    }

    .contacts-list {
        flex: 1;
        overflow-y: auto;
    }

    .contact-item {
        padding: 15px;
        display: flex;
        align-items: center;
        border-bottom: 1px solid #f0f0f0;
        cursor: pointer;
        transition: background 0.3s;
    }

    .contact-item:hover {
        background: #f9f9f9;
    }

    .contact-item img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        margin-right: 15px;
    }

    .contact-info h3 {
        font-size: 15px;
        margin-bottom: 5px;
    }

    .contact-info p {
        font-size: 13px;
        color: #999;
    }

    .chat-container {
        flex: 1;
        display: flex;
        flex-direction: column;
        background: #fff;
    }

    .chat-header {
        background: #fff;
        color: #333;
        padding: 12px 12px 10px 12px;
        display: flex;
        align-items: center;
        border-bottom: 1px solid #ddd;
    }

    .chat-header img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 15px;
    }

    .contact-info h2 {
        font-size: 16px;
        margin-bottom: 2px;
    }

    .contact-info p {
        font-size: 13px;
        color: #999;
    }

    .chat-messages {
        flex: 1;
        padding: 20px;
        overflow-y: auto;
        background: #f0f0f0;
    }

    .message {
        max-width: 65%;
        margin-bottom: 12px;
        clear: both;
    }

    .message-content {
        padding: 8px 12px;
        border-radius: 7.5px;
        position: relative;
        display: inline-block;
    }

    .message.received .message-content {
        background: #e0e0e0;
        color: #333;
        float: left;
        border-top-left-radius: 0;
    }

    .message.sent .message-content {
        background: #007bff;
        color: white;
        float: right;
        border-top-right-radius: 0;
    }

    .message-time {
        font-size: 11px;
        color: #999;
        margin-top: 4px;
        display: inline-block;
    }

    .message.sent {
        float: right;
    }

    .chat-input {
        padding: 15px;
        background: #fff;
        display: flex;
        align-items: center;
        gap: 10px;
        border-top: 1px solid #ddd;
    }

    .chat-input input {
        flex: 1;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 20px;
        outline: none;
        font-size: 15px;
        background: #f9f9f9;
        color: #333;
    }

    .chat-input input::placeholder {
        color: #999;
    }

    .chat-input button {
        background: #007bff;
        color: white;
        border: none;
        padding: 12px 25px;
        border-radius: 20px;
        cursor: pointer;
        font-size: 15px;
        transition: background 0.3s;
    }

    .chat-input button:hover {
        background: #0056b3;
    }

    /* Scrollbar Styling */
    ::-webkit-scrollbar {
        width: 6px;
        background: #323860;
        border-radius: 3px;

    }
    ::-webkit-scrollbar-thumb:hover {
        background: #3f4675;
    }
    </style>
</head>

<body>
    @include('navbar')
    <div class="main-container">
        <div class="sidebar">
            <div class="sidebar-header">
                <h2>Consultation Chats</h2>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search name...">
            </div>
            <div class="contacts-list">
                @foreach ($consultationdatalist as $datalist)
                <div class="contact-item" onclick="window.location='/chat/<?= $datalist->id ?>'">
                    <img src="/api/placeholder/45/45" alt="Contact 1">
                    <div class="contact-info">
                        @if($userIsConsultant)
                        <h3>{{ $datalist->id }} {{ $datalist->user_name }}</h3>
                        @else
                        <h3>{{ $datalist->id }} {{ $datalist->consultant_name }}</h3>
                        @endif
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</body>

</html>