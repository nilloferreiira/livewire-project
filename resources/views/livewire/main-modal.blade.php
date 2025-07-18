<div>
    <h1>main modal</h1>
    <button wire:click="setState('um')">Show component 1</button>
    <button wire:click="setState('dois')">Show componet 2</button>

    <div>
        <h3>component {{ $state }}</h3>
        @switch($state)
            @case('um')
                @livewire('component1')
            @break

            @case('dois')
                @livewire('component2')
            @break

            @default
        @endswitch
    </div>
</div>
