<x-jet-confirmation-modal wire:model.defer="confirmingDeletion">
    <x-slot name="title">
        Delete Member
    </x-slot>

    <x-slot name="content">
        Are you sure you want to delete this member? Once you delete it, all of its resources and data will be permanently deleted.
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('confirmingDeletion')" wire:loading.attr="disabled">
            Nevermind
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-2" wire:click="delete" wire:loading.attr="disabled">
            Delete Member
        </x-jet-danger-button>
    </x-slot>
</x-jet-confirmation-modal>