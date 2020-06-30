<div class="col mt-5">
    {{--    @dump($producto)--}}
    <button class="btn btn-primary btn-block pl-3 rounded-pill badge_btn" wire:click="Pujar({{$pujar}})" wire:poll.400ms wire:model="$pujar">
        <i class="fas fa-gavel fa-rotate-270 pt-2 float-left "></i> $ {{$pujar}}
    </button>
</div>
