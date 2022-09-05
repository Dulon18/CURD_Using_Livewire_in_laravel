<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;
    public $name, $email, $address, $phone,$department,$salary;
    public $image;

    public function render()
    {
       $this->employees=Employee::all();
        return view('livewire.index');
    }

    public function saveData()
    {      

       $file= $this->image->store('photos','public');
       
        Employee::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'address'=>$this->address,
            'phone'=>$this->phone,
            'department'=>$this->department,
            'salary'=>$this->salary,
            'image'=>$file
       
        ]);
  
        $this->resetInputFields();
    }

    function resetInputFields()
    {
        $this->reset(['name','email','address','phone','department','salary','image']);
    }

    public function deleteEmployee($id)
    {
        Employee::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
