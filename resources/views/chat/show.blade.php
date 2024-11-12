<?php

use App\Models\Roles;
use Illuminate\Support\Facades\Auth;
$user = Auth::user();
$userId = $user->id;
$userIsConsultant = Roles::role_is($user, 'Consultant');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chat Interface</title>
    @include('header')
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
            background: #29304D;
            color: white;
            display: flex;
            flex-direction: column;
        }

        .sidebar-header {
            padding: 15px;
            background: #222841;
        }

        .search-box {
            padding: 10px 15px;
            background: #323860;
        }

        .search-box input {
            width: 100%;
            padding: 8px 15px;
            border: none;
            border-radius: 20px;
            background: #29304D;
            color: white;
            outline: none;
        }

        .search-box input::placeholder {
            color: #777777;
        }

        .contacts-list {
            flex: 1;
            overflow-y: auto;
        }

        .contact-item {
            padding: 15px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #323860;
            cursor: pointer;
            transition: background 0.3s;
        }

        .contact-item:hover {
            background: #323860;
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
            color: #777777;
        }

        .chat-container {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .chat-header {
            background: #29304D;
            color: white;
            padding: 12px 12px 10px 12px;
            display: flex;
            align-items: center;
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
            color: #777777;
        }

        .chat-messages {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background: #464646;
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
            background: #1F85E0;
            color: white;
            float: left;
            border-top-left-radius: 0;
        }

        .message.sent .message-content {
            background: #777777;
            color: white;
            float: right;
            border-top-right-radius: 0;
        }

        .message-time {
            font-size: 11px;
            color: white;
            margin-top: 4px;
            display: inline-block;
        }

        .message.sent {
            float: right;
        }

        .chat-input {
            padding: 15px;
            background: #29304D;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .chat-input input {
            flex: 1;
            padding: 12px 15px;
            border: none;
            border-radius: 20px;
            outline: none;
            font-size: 15px;
            background: #323860;
            color: white;
        }

        .chat-input input::placeholder {
            color: #777777;
        }

        .chat-input button {
            background: #323860;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 15px;
            transition: background 0.3s;
        }

        .chat-input button:hover {
            background: #3f4675;
        }

        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #29304D;
        }

        ::-webkit-scrollbar-thumb {
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
                <div class="contact-item" onclick="window.location='/chat/<?=$datalist->id?>'">
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

        <div class="chat-container">
            <div class="chat-header">
                <img src="/api/placeholder/40/40" alt="Contact Avatar">
                    <div class="contact-info">
                        @if($userIsConsultant)
                            <h2>{{ $consultationdata->user_name }}</h2>
                        @else
                            <h2>{{ $consultationdata->consultant_name }}</h2>
                        @endif
                    </div>
            </div>
            <div class="chat-messages">

                @foreach ($messages as $message)
                @if($message->consultation_id == $consultation_id)

                    @if($message->sender_id != $userId)
                    <div class="message received">
                        <div class="message-content">
                            {{ $message->consultation_id }}
                            {{ $message->message }}
                            <div class="message-time">{{ $message->sent_at }}</div>
                        </div>
                    </div>

                    @elseif($message->sender_id == $userId)
                    <div class="message sent">
                        <div class="message-content">
                            {{ $message->consultation_id }}
                            {{ $message->message }}
                            <div class="message-time">{{ $message->sent_at }}</div>
                        </div>
                    </div>
                    @endif
                @endif
                @endforeach

            </div>
            <div class="chat-input">
                <form id="chat-form" style="display: flex; width: 100%;">
                    @csrf
                    @method('PUT')
                    <input type="text" id="message-input" name="message" placeholder="Type a message..." required>
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        const chatForm = document.getElementById('chat-form');
        const messageInput = document.getElementById('message-input');
        const chatMessages = document.querySelector('.chat-messages');
        const consultationId = {{ $consultation_id }};

        chatForm.addEventListener('submit', function(e) {
            e.preventDefault();

            let message = messageInput.value.trim();
            if (message === '') return;

            fetch(`/chat/${consultationId}`, {
                method: 'PUT',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ message: message }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Add the message to the chat bubbles
                    const messageDiv = document.createElement('div');
                    messageDiv.classList.add('message', 'sent');
                    messageDiv.innerHTML = `
                        <div class="message-content">
                            ${message}
                            <div class="message-time">${new Date().toLocaleTimeString()}</div>
                        </div>
                    `;
                    chatMessages.appendChild(messageDiv);
                    // Clear the input
                    messageInput.value = '';
                    // Scroll to the bottom
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                }
            });
        });
    </script>
</body>
</html>