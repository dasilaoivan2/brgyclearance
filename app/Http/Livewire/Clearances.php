<?php

namespace App\Http\Livewire;

use App\Models\Barangay;
use App\Models\Clearance;
use App\Models\Person;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Clearances extends Component
{
    use WithPagination;

    use WithFileUploads;

    public $person_id, $or, $or_date, $ctc_no, $ctc_issued, $ctc_place_issued, $purpose, $barangay_id, $clearance_id;

    public $photo, $filename;

    public $lastname, $firstname, $middlename, $address, $civilstatus, $gender, $citizenship = 'Filipino', $dateofbirth, $placeofbirth;

    public $barangays;

    public $searchToken;

    public $confirmingClearanceDeletion = false;

    public $isCreate = false;

    public $isAddPerson = false;

    public $user;

    public function render()
    {
        $this->user = Auth::user();
        $brgy_id = $this->user->barangay_id;

        if($this->user->is_admin == 1){
            $this->barangays = Barangay::all();

            return view('livewire.clearances', ['clearances' => Clearance::select('clearances.*')->where('clearances.or', 'LIKE', '%' . $this->searchToken . '%')
            ->orderBy('id', 'DESC')
            ->paginate(10)]);
            
        }

        else{
            $this->barangays = Barangay::all();
            $this->barangay_id = $brgy_id;

            return view('livewire.clearances', ['clearances' => Clearance::select('clearances.*')->where('clearances.or', 'LIKE', '%' . $this->searchToken . '%')
            ->where('clearances.barangay_id', $brgy_id)
            ->orderBy('id', 'DESC')
            ->paginate(10)]);
            
        }

        

        
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openCreate();
    }

    // public function addPerson()
    // {
    //     $this->openAddPerson();
    //     $this->closeCreate();
    // }

    private function resetInputFields()
    {
        $this->lastname = '';
        $this->firstname = '';
        $this->middlename = '';
        $this->address = '';
        $this->civilstatus = '';
        $this->gender = '';
        $this->citizenship = 'Filipino';
        $this->dateofbirth = '';
        $this->placeofbirth = '';
        $this->clearance_id = '';
        $this->person_id = '';
        $this->or = '';
        $this->or_date = '';
        $this->ctc_no = '';
        $this->ctc_issued = '';
        $this->ctc_place_issued = '';
        $this->purpose = '';
        $this->barangay_id = '';
        $this->confirming = '';
    }

    public function openCreate()
    {
        $this->isCreate = true;
    }

    public function closeCreate()
    {
        $this->isCreate = false;
    }

    // public function openAddPerson()
    // {
    //     $this->isAddPerson = true;

    // }

    // public function closeAddPerson()
    // {
    //     $this->isAddPerson = false;
    //     $this->isCreate = true;
    // }

    public function store()
    {
        if ($this->photo != null) {
            $this->validate(
                [
                    'lastname' => 'required',
                    'firstname' => 'required',
                    'address' => 'required',
                    'civilstatus' => 'required',
                    'gender' => 'required',
                    'citizenship' => 'required',
                    'dateofbirth' => 'required',
                    'placeofbirth' => 'required',
                    'or' => 'required',
                    'or_date' => 'required',
                    'ctc_no' => 'required',
                    'ctc_issued' => 'required',
                    'ctc_place_issued' => 'required',
                    'purpose' => 'required',
                    'barangay_id' => 'required'
                ],
                [
                    'lastname.required' => 'The Lastname field is required.',
                    'firstname.required' => 'The Firstname field is required.',
                    'address.required' => 'The Address field is required.',
                    'civilstatus.required' => 'Please select civil status.',
                    'gender.required' => 'Please select gender.',
                    'citizenship.required' => 'The citizenship field is required.',
                    'dateofbirth.required' => 'The date of birth field is required.',
                    'placeofbirth.required' => 'The place of birth field is required.',
                    'or.required' => 'The O.R. field is required.',
                    'or_date.required' => 'The date of O.R. field is required.',
                    'ctc_no.required' => 'The CTC No. field is required.',
                    'ctc_issued.required' => 'The CTC issued field is required.',
                    'ctc_place_issued.required' => 'Please input field.',
                    'purpose.required' => 'Please input field.',
                    'barangay_id.required' => 'Please select barangay.'
                ]
            );

            $name = md5($this->photo . microtime()) . '.' . $this->photo->extension();
            $oldfilename = $this->filename;
            Storage::delete('public/photo/' . $oldfilename);
        } else {
            $this->validate(
                [
                    'lastname' => 'required',
                    'firstname' => 'required',
                    'address' => 'required',
                    'civilstatus' => 'required',
                    'gender' => 'required',
                    'citizenship' => 'required',
                    'dateofbirth' => 'required',
                    'placeofbirth' => 'required',
                    'or' => 'required',
                    'or_date' => 'required',
                    'ctc_no' => 'required',
                    'ctc_issued' => 'required',
                    'ctc_place_issued' => 'required',
                    'purpose' => 'required',
                    'barangay_id' => 'required'
                ],
                [
                    'lastname.required' => 'The Lastname field is required.',
                    'firstname.required' => 'The Firstname field is required.',
                    'address.required' => 'The Address field is required.',
                    'civilstatus.required' => 'Please select civil status.',
                    'gender.required' => 'Please select gender.',
                    'citizenship.required' => 'The citizenship field is required.',
                    'dateofbirth.required' => 'The date of birth field is required.',
                    'placeofbirth.required' => 'The place of birth field is required.',
                    'or.required' => 'The O.R. field is required.',
                    'or_date.required' => 'The date of O.R. field is required.',
                    'ctc_no.required' => 'The CTC No. field is required.',
                    'ctc_issued.required' => 'The CTC issued field is required.',
                    'ctc_place_issued.required' => 'Please input field.',
                    'purpose.required' => 'Please input field.',
                    'barangay_id.required' => 'Please select barangay.'
                ]
            );
            $name = $this->filename;
        }

        $person = Person::updateOrCreate(['id' => $this->person_id], [
            'lastname' => $this->lastname,
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'address' => $this->address,
            'civilstatus' => $this->civilstatus,
            'gender' => $this->gender,
            'citizenship' => $this->citizenship,
            'dateofbirth' => $this->dateofbirth,
            'placeofbirth' => $this->placeofbirth
        ]);

        $clearance = Clearance::updateOrCreate(['id' => $this->clearance_id], [
            'person_id' => $person->id,
            'or' => $this->or,
            'or_date' => $this->or_date,
            'ctc_no' => $this->ctc_no,
            'ctc_issued' => $this->ctc_issued,
            'ctc_place_issued' => $this->ctc_place_issued,
            'purpose' => $this->purpose,
            'barangay_id' => $this->barangay_id,
            'photo' => $name
        ]);

        if($this->photo != null) {
            $this->photo->storeAs('public/photo', $name);
        }

        session()->flash(
            'message',
            $this->clearance_id ? 'Clearance Updated Successfully.' : 'Clearance Created Successfully.'
        );

        $this->closeCreate();
        $this->clearances = Clearance::all();
        $this->resetInputFields();
        redirect()->route('reports', ['id' => $clearance->id]);
    }

    public function edit($id)
    {
        $clearance = Clearance::findOrFail($id);
        $person = Person::findOrFail($clearance->person_id);
        $this->clearance_id = $id;
        $this->person_id = $clearance->person_id;

        $this->lastname = $person->lastname;
        $this->firstname = $person->firstname;
        $this->middlename = $person->middlename;
        $this->address = $person->address;
        $this->civilstatus = $person->civilstatus;
        $this->gender = $person->gender;
        $this->citizenship = $person->citizenship;
        $this->dateofbirth = $person->dateofbirth;
        $this->placeofbirth = $person->placeofbirth;


        $this->or = $clearance->or;
        $this->or_date = $clearance->or_date;
        $this->ctc_no = $clearance->ctc_no;
        $this->ctc_issued = $clearance->ctc_issued;
        $this->ctc_place_issued = $clearance->ctc_place_issued;
        $this->purpose = $clearance->purpose;
        $this->barangay_id = $clearance->barangay_id;
        $this->photo = null;
        $this->filename = $clearance->photo;
        $this->confirming = '';
        $this->openCreate();
    }

    public function cancelDelete()
    {
        $this->clearance_id = '';
        $this->confirmingClearanceDeletion = false;
    }


    public function confirmDelete($id)
    {
        $this->clearance_id = $id;
        $this->confirmingClearanceDeletion = true;
    }

    public function delete()
    {
        Clearance::find($this->clearance_id)->delete();
        session()->flash('message', 'Clearance deleted successfully.');
        $this->clearances = Clearance::all();
        $this->confirmingClearanceDeletion = false;
    }
}
