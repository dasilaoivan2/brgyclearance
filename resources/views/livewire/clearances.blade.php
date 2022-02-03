    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clearance') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
                @endif
                <div class="py-4">
                    <x-jet-button class="m-4" wire:click="create()">
                        {{ __('Create New Clearance') }}
                    </x-jet-button>

                    <input wire:model="searchToken" id="searchToken" class="border-2 rounded-lg border-yellow-900 text-black-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Search here...">

                </div>

                <!-- @include('livewire.clearances.addperson') -->
                @include('livewire.clearances.create')
                @include('livewire.clearances.confirmation')
                
                


                <table class="table-auto w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <!-- <th class="px-4 py-2 w-20">ID</th> -->
                            <th class="px-4 py-2 w-20">ID</th>
                            <th class="px-4 py-2">OR</th>
                            <th class="px-4 py-2">OR Date</th>
                            <th class="px-4 py-2">Client Name</th>
                            <th class="px-4 py-2">Brgy</th>
                            <th width="230px" class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?php $temp = 0; ?> -->

                        @foreach($clearances as $clearance)

                        <tr>
                            <!-- <?php $temp++; ?> -->
                            <!-- <td class="border px-4 py-2">{{$temp}}</td> -->
                            <td class="border px-4 py-2">{{$clearance->id}}</td>
                            <td class="border px-4 py-2">{{$clearance->or}}</td>
                            <td class="border px-4 py-2">{{$clearance->or_date}}</td>
                            <td class="border px-4 py-2">{{$clearance->person->lastname}}</td>
                            <td class="border px-4 py-2">{{$clearance->barangay->name}}</td>
                            <td class="border px-4 py-2 text-center">
                                <x-jet-button class="m-4" wire:click="edit({{$clearance->id}})">
                                    {{ __('Edit') }}
                                </x-jet-button>

                                <x-jet-secondary-button class="m-4" wire:click="confirmDelete({{$clearance->id}})">
                                    {{ __('Delete') }}
                                </x-jet-secondary-button>


                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
