{{-- <div  wire:poll.3s="reloadServersState"> --}}
<div>

    @if ($serverStatus === 'loading')
        <img src="/img/resources/loading-gif.gif" alt="Cargando" wire:loading.class='hidden' class="w-11">
    @else
        <div class="col-span-1 {{ $serverStatus ? 'color-cSecondary animate-ping rounded-full opacity-95 absolute' : 'color-cBackground' }}"
            wire:loading.class='hidden'>
            <i class="fa-solid fa-circle text-4xl"></i>
        </div>
        @if ($serverStatus)
            <div class="col-span-1 color-cSecondary" wire:loading.class='hidden'>
                <i class="fa-solid fa-circle text-4xl"></i>
            </div>
        @endif
    @endif

    <x-loading-loop>w-11 inline</x-loading-loop>
</div>
