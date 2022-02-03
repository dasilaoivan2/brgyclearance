<x-jet-confirmation-modal wire:model.defer="confirmingClearanceDeletion">
    <x-slot name="title">
        Delete Clearance
    </x-slot>

    <x-slot name="content">
        Are you sure you want to delete this clearance? Once your clearance is deleted, all of its resources and data will be permanently deleted.
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('confirmingClearanceDeletion')" wire:loading.attr="disabled">
            Nevermind
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-2" wire:click="delete" wire:loading.attr="disabled">
            Delete Clearance
        </x-jet-danger-button>
    </x-slot>
</x-jet-confirmation-modal>