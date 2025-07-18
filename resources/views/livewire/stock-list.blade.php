<div>
    <ul class="d-flex flex-col items-start justify-center gap-10 w-full">
        {{-- @dd($fruits) --}}
        @foreach ($fruits as $fruit)
            <li class="d-flex items-center justify-between w-4/5">
                <span>
                    {{ $fruit['name'] }}: {{ $fruit['quantity'] }}
                </span>
                <div class="d-flex items-center justify-center gap-4">
                    <button style="padding: 5px 10px !important" wire:click="increment({{ $fruit['id'] }})">+</button>
                    <button style="padding: 5px 10px !important" wire:click="decrement({{ $fruit['id'] }})">-</button>
                </div>
            </li>
        @endforeach
    </ul>
</div>
