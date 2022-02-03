<x-jet-dialog-modal maxWidth="2xl" wire:model="isCreate">
    <x-slot name="title">Add Clearance</x-slot>

    <x-slot name="content">
        <form>
            <x-jet-label for="" value="{{ __('CLIENT INFORMATION') }}" />

            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-2 py-2 bg-white sm:p-6">

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="mb-4">
                            <x-jet-label for="lastname" value="{{ __('Lastname') }}" />

                            <x-jet-input id="lastname" type="text" class="mt-1 block w-full" wire:model="lastname" />
                            <x-jet-input-error for="lastname" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-jet-label for="firstname" value="{{ __('Firstname') }}" />

                            <x-jet-input id="firstname" type="text" class="mt-1 block w-full" wire:model="firstname" />
                            <x-jet-input-error for="firstname" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-jet-label for="middlename" value="{{ __('Middlename') }}" />

                            <x-jet-input id="middlename" type="text" class="mt-1 block w-full" wire:model="middlename" />
                            <x-jet-input-error for="middlename" class="mt-2" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                        <div class="mb-4">
                            <x-jet-label for="address" value="{{ __('Address') }}" />

                            <x-jet-input id="address" type="text" class="mt-1 block w-full" wire:model="address" />
                            <x-jet-input-error for="address" class="mt-2" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="mb-4">
                            <x-jet-label for="civilstatus" value="{{ __('Civil Status') }}" />

                            <select id="civilstatus" wire:model="civilstatus" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Select...</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Divorced">Divorced</option>
                            </select>
                            <x-jet-input-error for="civilstatus" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-jet-label for="gender" value="{{ __('Gender') }}" />

                            <select id="gender" wire:model="gender" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Select...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <x-jet-input-error for="gender" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-jet-label for="citizenship" value="{{ __('Citizenship') }}" />

                            <x-jet-input id="citizenship" type="text" class="mt-1 block w-full" wire:model="citizenship" />
                            <x-jet-input-error for="citizenship" class="mt-2" />
                        </div>

                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <x-jet-label for="dateofbirth" value="{{ __('Date of Birth') }}" />

                            <x-jet-input id="dateofbirth" type="date" class="mt-1 block w-full" wire:model="dateofbirth" />
                            <x-jet-input-error for="dateofbirth" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-jet-label for="placeofbirth" value="{{ __('Place of Birth') }}" />

                            <x-jet-input id="placeofbirth" type="text" class="mt-1 block w-full" wire:model="placeofbirth" />
                            <x-jet-input-error for="placeofbirth" class="mt-2" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                        <div class="mb-4">
                            <x-jet-label for="photo" value="{{ __('Photo') }}" />


                            <x-jet-input id="photo" type="file" class="mt-1 block w-full" wire:model="photo" />
                            <x-jet-input-error for="photo" class="mt-2" />
                        </div>

                    </div>

                    



                    <!-- <div class="m-2">
                        <x-jet-button class="m-4" wire:click="addPerson()">
                            {{ __('SAVE') }}
                        </x-jet-button>
                    </div> -->
                </div>
            </div>

            <x-jet-label for="" value="{{ __('CLEARANCE INFORMATION') }}" />

            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-2 py-2 bg-white sm:p-6">
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

                            <x-jet-input id="ctc_issued" type="date" class="mt-1 block w-full" wire:model="ctc_issued" />
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


                            <select id="barangay_id" wire:model="barangay_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" @if($user->is_admin != 1) disabled @endif>
                                <option value="">Select...</option>

                                @foreach($barangays as $barangay)

                                <option value="{{$barangay->id}}">{{$barangay->name}}</option>

                                @endforeach

                            </select>
                            <x-jet-input-error for="barangay_id" class="mt-2" />
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