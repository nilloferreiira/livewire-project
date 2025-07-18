<div>
    <ul>
        {{-- @dd($fruits) --}}
        @foreach ($fruits as $fruit)
            <li>
                <span>
                    {{ $fruit['name'] }}: {{ $fruit['quantity'] }}
                </span>
                <button wire:click="increment({{ $fruit['id'] }})">+</button>
                <button wire:click="decrement({{ $fruit['id'] }})">-</button>
            </li>
        @endforeach
    </ul>
</div>
