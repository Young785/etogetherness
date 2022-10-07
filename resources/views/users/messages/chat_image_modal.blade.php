<style>
    .item {
        position: relative;
        display: block;
        float: left;
        width: 100%;
        margin-right: -100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        transition: transform .6s ease-in-out;
    }
</style>
@foreach (json_decode($message->file_uploaded) as $key => $image)
    <div class="item {{ $key == 0 ? 'active' : ''}}">
        <img class="d-block w-100 carousel-img" src="/messages/files/{{ $image }}">
    </div>
@endforeach