<div>
    <p>This Component</p>
    <x-this-modal>
        <p>This Modal Slot (Start)</p>
        {{-- If you remove the nested component calling $this inside the blade view will work --}}
        @livewire('nested-component')
        <p>This Modal Slot (End)</p>
    </x-this-modal>
</div>
