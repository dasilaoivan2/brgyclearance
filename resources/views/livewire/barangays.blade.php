<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Barangay Set-up') }}
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


            @include('livewire.barangays.create')
            @include('livewire.barangays.confirmation')



            <div class="mt-4">
                <table class="table-auto w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 w-20">No.</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">PB Name</th>
                            <th class="px-4 py-2">Verified Name</th>
                            <th class="px-4 py-2">Verified Position</th>
                            <th class="px-4 py-2">Logo</th>
                            <th width="230px" class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $temp = 0; ?>

                        @foreach($barangays as $barangay)

                        <tr>
                            <?php $temp++; ?>
                            <td class="border px-4 py-2">{{$temp}}</td>
                            <td class="border px-4 py-2">{{$barangay->name}}</td>
                            <td class="border px-4 py-2">{{$barangay->pbname}}</td>
                            <td class="border px-4 py-2">{{$barangay->verified_name}}</td>
                            <td class="border px-4 py-2">{{$barangay->verified_position}}</td>
                            <td class="border px-4 py-2 text-center">
                                @if($barangay->logo != NULL)
                                <a target="_blank" href="{{asset('storage/logo/'.$barangay->logo)}}"><img width="75" src="{{asset('storage/logo/'.$barangay->logo)}}"></a>
                                @else
                                <span class="text-sm">NO IMAGE UPLOADED</span>
                                @endif
                            </td>
                            <td class="border px-4 py-2 text-center">
                                <x-jet-button class="m-4" wire:click="edit({{$barangay->id}})">
                                    {{ __('Edit') }}
                                </x-jet-button>




                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>