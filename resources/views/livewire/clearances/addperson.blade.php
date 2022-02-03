<x-jet-dialog-modal maxWidth="2xl" wire:model="isAddPerson">
    <x-slot name="title">Add Person</x-slot>

    <x-slot name="content">
        <form>
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-2 py-2 bg-white sm:p-6">

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                        <div class="mb-4 inline-block">

                            <x-jet-label for="person_id" value="{{ __('Person Name') }}" />

                            <select id="person_id" wire:model="person_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Select...</option>


                            </select>

                            <x-jet-button wire:click="addPerson()">
                                {{ __('Add') }}
                            </x-jet-button>

                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-2">
                            <x-jet-label for="or" value="{{ __('O.R.') }}" />

                            <x-jet-input id="or" type="text" class="mt-1 block w-full" wire:model="or" />
                            <x-jet-input-error for="or" class="mt-2" />
                        </div>

                        <div class="mb-2">
                            <x-jet-label for="or_date" value="{{ __('O.R. Date') }}" />


                            <x-jet-input id="or_date" type="date" class="mt-1 block w-full" wire:model="or_date" />
                            <x-jet-input-error for="or_date" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-jet-label for="ctc_no" value="{{ __('CTC No.') }}" />

                            <x-jet-input id="ctc_no" type="text" class="mt-1 block w-full" wire:model="ctc_no" />
                            <x-jet-input-error for="ctc_no" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-jet-label for="ctc_issued" value="{{ __('CTC Issued') }}" />

                            <x-jet-input id="ctc_issued" type="text" class="mt-1 block w-full" wire:model="ctc_issued" />
                            <x-jet-input-error for="ctc_issued" class="mt-2" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                        <div class="mb-2">
                            <x-jet-label for="ctc_place_issued" value="{{ __('CTC Place Issued') }}" />

                            <x-jet-input id="ctc_place_issued" type="text" class="mt-1 block w-full" wire:model="ctc_place_issued" />
                            <x-jet-input-error for="ctc_place_issued" class="mt-2" />
                        </div>

                        <div class="mb-2">
                            <x-jet-label for="purpose" value="{{ __('Purpose') }}" />

                            <x-jet-input id="purpose" type="text" class="mt-1 block w-full" wire:model="purpose" />
                            <x-jet-input-error for="purpose" class="mt-2" />
                        </div>

                        <div class="mb-2">
                            <x-jet-label for="barangay_id" value="{{ __('Barangay') }}" />


                            <select id="barangay_id" wire:model="barangay_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Select...</option>

                                @foreach($barangays as $barangay)

                                <option value="{{$barangay->id}}">{{$barangay->name}}</option>

                                @endforeach

                            </select>
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