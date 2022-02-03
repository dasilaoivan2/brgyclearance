<?php

namespace App\Http\Livewire;

use App\Models\Barangay;
use App\Models\Barangaymember;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Barangaymembers extends Component
{

    use WithPagination;

    public $name, $barangay_id, $position, $designation, $order_no, $barangaymember_id;

    public $searchToken;

    public $barangaymembers, $barangays;

    public $isCreate = false;

    public $confirmingDeletion = false;

    public $user;

    public function render()
    {

        $this->user = Auth::user();
        $brgy_id = $this->user->barangay_id;
        $this->barangays = Barangay::all();

        if($this->user->is_admin == 1){
        $this->barangaymembers = Barangaymember::all();

        return view('livewire.barangaymembers', ['barangaymembers' => Barangaymember::select('barangaymembers.*')->where('barangaymembers.name', 'LIKE', '%'.$this->searchToken.'%')
            ->paginate(20)]);
        }
        else{
            $this->barangaymembers = Barangaymember::where('barangay_id', $brgy_id)->orderBy('order_no', 'ASC')->get();
            $this->barangay_id = $brgy_id;

            return view('livewire.barangaymembers', ['barangaymembers' => Barangaymember::select('barangaymembers.*')->where('barangaymembers.name', 'LIKE', '%'.$this->searchToken.'%')
            ->where('barangaymembers.barangay_id', $brgy_id)
            ->orderBy('order_no', 'ASC')
            ->paginate(20)]);
        }

       
        

        
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openCreate();
    }

    private function resetInputFields(){
        $this->name = '';
        $this->barangay_id = '';
        $this->position = '';
        $this->designation = '';
        $this->order_no = '';
        $this->barangaymember_id = '';
        $this->confirming = '';
    }

    public function openCreate(){
        $this->isCreate = true;
    }

    public function closeCreate(){
        $this->isCreate = false;
    }

    public function store(){
        $this->validate([
            'name' => 'required',
            'barangay_id' => 'required',
            'position' => 'required',
            'designation' => 'required',
            'order_no' => 'required'
        ],[
            'name.required' => 'Name field is required.',
            'barangay_id.required' => 'Please select barangay.',
            'position.required' => 'Position field is required.',
            'designation.required' => 'Designation field is required.',
            'order_no.required' => 'Order No. field is required.'
        ]);


        Barangaymember::updateOrCreate(['id'=> $this->barangaymember_id], [
            'name' => $this->name,
            'barangay_id' => $this->barangay_id,
            'position' => $this->position,
            'designation' => $this->designation,
            'order_no' => $this->order_no
        ]);

        session()->flash('message',
            $this->barangaymember_id ? 'Member Updated Successfully.' : 'Member Created Successfully.');
            $this->closeCreate();
            $this->resetInputFields();
            $this->barangaymembers = Barangaymember::all();
    }

    public function edit($id){

        $barangaymember = Barangaymember::find($id);
        $this->barangaymember_id = $id;

        $this->name = $barangaymember->name;
        $this->barangay_id = $barangaymember->barangay_id;
        $this->position = $barangaymember->position;
        $this->designation = $barangaymember->designation;
        $this->order_no = $barangaymember->order_no;
        $this->confirming = '';
        $this->openCreate();
    }

    public function cancelDelete()
    {
        $this->barangaymember_id = '';
        $this->confirmingDeletion = false;
    }


    public function confirmDelete($id)
    {
        $this->barangaymember_id = $id;
        $this->confirmingDeletion = true;
    }

    public function delete()
    {
        Barangaymember::find($this->barangaymember_id)->delete();
        session()->flash('message', 'Member deleted successfully.');
        $this->barangaymembers = Barangaymember::all();
        $this->confirmingDeletion = false;
    }
}
