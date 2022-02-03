<?php

namespace App\Http\Livewire;

use App\Models\Barangay;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Barangays extends Component
{
    use WithPagination;

    use WithFileUploads;

    public $barangays, $barangay_id, $name, $pbname, $verified_name, $verified_position, $logo, $filename;

    public $user;

    public $confirming;

    public $isCreate = false;

    public function render()
    {
        $this->user = Auth::user();
        $brgy_id = $this->user->barangay_id;

        if($this->user->is_admin == 1){
            $this->barangays = Barangay::all();
        }
        else{
            $this->barangays = Barangay::where('id', $brgy_id)->get();
        }
       
        return view('livewire.barangays');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->pbname = '';
        $this->verified_name = '';
        $this->verified_position = '';
        $this->logo = '';
        $this->barangay_id = '';
        $this->filename = '';
        $this->confirming = '';
    }

    public function openCreate(){
        $this->isCreate = true;
    }

    public function closeCreate(){
        $this->isCreate = false;
    }
    

    public function store(){
        if($this->logo != null){
        $this->validate([
            'name' => 'required',
            'pbname' => 'required',
            'verified_name' => 'required',
            'verified_position' => 'required',
            'logo' => 'image|mimes:jpg,jpeg,png,svg,gif|max:8192'
        ],[
            'name.required' => 'Name field is required.',
            'pbname.required' => 'Punong Barangay field is required.',
            'verified_name.required' => 'Verified name field is required.',
            'verified_position.required' => 'Verified position field is required.'

            ]);

            $name = md5($this->logo . microtime()).'.'.$this->logo->extension();
            $oldfilename = $this->filename;
            Storage::delete('public/logo/'.$oldfilename);

    }
    else{
        $this->validate([
            'name' => 'required',
            'pbname' => 'required',
            'verified_name' => 'required',
            'verified_position' => 'required',
            // 'logo' => 'image|mimes:jpg,jpeg,png,svg,gif|max:2048'
        ],[
            'name.required' => 'Name field is required.',
            'pbname.required' => 'Punong Barangay field is required.',
            'verified_name.required' => 'Verified name field is required.',
            'verified_position.required' => 'Verified position field is required.'
            
        ]);
        $name = $this->filename;
    }

        Barangay::updateOrCreate(['id'=> $this->barangay_id],[
            'name' => $this->name,
            'pbname' => $this->pbname,
            'verified_name' => $this->verified_name,
            'verified_position' => $this->verified_position,
            'logo' => $name
        ]);

        if($this->logo != null) {
            $this->logo->storeAs('public/logo', $name);
        }

        session()->flash('message',
            $this->barangay_id ? 'Barangay Updated Successfully.' : 'Barangay Created Successfully.');
            $this->closeCreate();
            $this->resetInputFields();
            $this->barangays = Barangay::all();

    }

    public function edit($id){
        $barangay = Barangay::find($id);
        $this->barangay_id = $id;

        $this->name = $barangay->name;
        $this->pbname = $barangay->pbname;
        $this->verified_name = $barangay->verified_name;
        $this->verified_position = $barangay->verified_position;
        $this->logo = null;
        $this->filename = $barangay->logo;
        $this->confirming = '';
        $this->openCreate();
    }
}
