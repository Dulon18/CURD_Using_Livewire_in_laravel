<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;
class Index extends Component
{
    public $name, $email, $address, $phone,$image,$department,$salary;

    public function render()
    {
       $this->employees=Employee::all();
        return view('livewire.index');
    }

    public function saveData()
    {

        Employee::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'address'=>$this->address,
            'phone'=>$this->phone,
            'department'=>$this->department,
            'salary'=>$this->salary,

        ]);
        $this->resetInputFields();
    }

    function resetInputFields()
    {
        $this->reset(['name','email','address','phone','department','salary','image']);
    }
}
