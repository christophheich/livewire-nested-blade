<div>
    <p>Passing Component</p>
    <x-passing-modal :check="$this->check">
        <p>Passing Modal Slot (Start)</p>
        @livewire('nested-component')
        <p>Passing Modal Slot (End)</p>
    </x-passing-modal>
</div>
