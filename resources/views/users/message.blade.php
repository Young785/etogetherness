<div class="p-3">
    <div class="justify-content-center d-flex">
        <img src="https://static.vecteezy.com/packs/media/vectors/term-bg-1-666de2d9.jpg" class="text-center rounded-circle" width="50">
    </div>
    <div class="text-center">
        <b class="m-1 text-grey h6 font-weight-bold">Ayomikun</b>
        <p class="m-1 text-muted">Lives in {{ $receiver->city }}, {{ $receiver->country }}</p>
        <p class="m-0 text-muted">7/20/20, 4:26 PM</p>
    </div>
</div>
@foreach ($messages as $message)
    @if ($message->receiver_id != $receiver->id)
        <div class="incoming">
            <div class="bubble">{{ $message->messages }}</div>
        </div>
    @else
        <div class="outgoing">
            <div class="bubble">{{ $message->messages }}</div>
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