<x-jet-dialog-modal maxWidth="2xl" wire:model="isCreate">
    <x-slot name="title">Add Member</x-slot>

    <x-slot name="content">
        <form>
            <x-jet-label for="" value="{{ __('Barangay Member Information') }}" />

            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-2 py-2 bg-white sm:p-6">

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                        <div class="mb-2">
                            <x-jet-label for="name" value="{{ __('Complete Name') }}" />

                            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model="name" />
                            <x-jet-input-error for="name" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-jet-label for="pbname" value="{{ __('Name of Punong Barangay') }}" />

                            <x-jet-input id="pbname" type="text" class="mt-1 block w-full" wire:model="pbname" />
                            <x-jet-input-error for="pbname" class="mt-2" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <x-jet-label for="verified_name" value="{{ __('Verified Name') }}" />

                            <x-jet-input id="verified_name" type="text" class="mt-1 block w-full" wire:model="verified_name" />
                            <x-jet-input-error for="verified_name" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-jet-label for="verified_position" value="{{ __('Verified Position') }}"/>

                            <x-jet-input id="verified_position" type="text" class="mt-1 block w-full" wire:model="verified_position" />
                            <x-jet-input-error for="verified_position" class="mt-2" />
                        </div>
                    </div>



                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                        <div class="mb-4">
                            <x-jet-label for="logo" value="{{ __('Barangay Logo') }}" />


                            <x-jet-input id="logo" type="file" class="mt-1 block w-full" wire:model="logo" />
                            <x-jet-input-error for="logo" class="mt-2" />
                        </div>

                    </div>
                </div>
            </div>



        </form>
    </x-slot>

    <x-slot name="footer">
        <div class="">

            <x-jet-button wire:click="store()">
                {{ __('Save') }}
            </x-jet-button>



            <x-jet-secondary-button wire:click="closeCreate()">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

        </div>
    </x-slot>

</x-jet-dialog-modal>