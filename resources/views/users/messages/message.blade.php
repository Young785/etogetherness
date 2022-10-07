<div class="p-3">
    <div class="justify-content-center d-flex">
        <img src="https://static.vecteezy.com/packs/media/vectors/term-bg-1-666de2d9.jpg" class="text-center rounded-circle" width="50">
    </div>
    <div class="text-center">
        <b class="m-1 text-grey h6 font-weight-bold">{{ $receiver->name }}</b>
        <p class="m-1 text-muted">Lives in {{ $receiver->city }}, {{ $receiver->country }}</p>
        <p class="m-0 text-muted">7/20/20, 4:26 PM</p>
    </div>
</div>
@foreach ($messages as $message)
    @if ($message->receiver_id != $receiver->id)
        <div class="incoming">
            <div class="incoming-bubble">
                @if ($message->file_uploaded != null)
                    @foreach (array_slice(json_decode($message->file_uploaded), 0,1) as $image)
                        <img src="/messages/files/{{ $image }}" data-toggle="modal" 
                            data-target="#showImage" data-id="{{ $message->id }}" class="chat-uploaded-img mb-1 showMoreimages">
                    @endforeach
                @endif
                {{ $message->messages }}
            </div>
        </div>
    @else
        <div class="outgoing">
            <div class="bubble">
                @if ($message->file_uploaded != null)
                    @foreach (array_slice(json_decode($message->file_uploaded), 0,1) as $image)
                        <img src="/messages/files/{{ $image }}" data-toggle="modal" 
                            data-target="#showImage" data-id="{{ $message->id }}" class="chat-uploaded-img mb-1 showMoreimages">
                    @endforeach
                @endif
                {{ $message->messages }}
            </div>
            </div>
    @endif
@endforeach
{{-- <div class="typing">
    <div class="bubble">
    <div class="ellipsis one"></div>
    <div class="ellipsis two"></div>
    <div class="ellipsis three"></div>
    </div>
</div> --}}