
<div class="card-body chat-box">
    @forelse($conversations as $chat)
        <div class="msg-container">
            @if($chat->from_user_id == auth()->user()->id)
                <div class="row justify-content-end">
                    <div class="col-md-6 col-xs-6">
                        <div class="messages sent-msg mb-2">
                            <span>{{ $chat->from_user_message }}</span><br>
                            <time class="mb-3" datetime="{{ $chat->created_at }}">{{ $chat->created_at->diffForHumans() }}</time>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-6 col-xs-6">
                        <div class="messages received-msg mb-2">
                            <span>{{ $chat->from_user_message }}</span><br>
                            <time class="mb-3" datetime="{{ $chat->created_at }}">{{ $chat->created_at->diffForHumans() }}</time>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    @empty
        <p>No messages available.</p>
    @endforelse
</div>
<div class="card-footer">
    <form action="{{ route('send-chat-message') }}" id="chatForm" method="POST">
        @csrf
        <div class="input-group">
            <input type="hidden" name="booking_id" value="{{ $id ?? null }}">
            <input type="text" class="form-control" name="message" placeholder="Type your message...">
            <button class="btn btn-primary" type="submit">Send</button>
        </div>
    </form>
</div>