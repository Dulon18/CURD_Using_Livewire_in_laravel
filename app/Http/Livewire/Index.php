<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;
    public $name, $email, $address, $phone,$department,$salary;
    public $image,$employee_id;
    public $images;
    public $update=false;

    public function render()
    {
       $this->employees=Employee::all();
        return view('livewire.index');
    }

    public function saveData()
    {      

     // $filename= $this->images->store('photos','public');
       
        Employee::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'address'=>$this->address,
            'phone'=>$this->phone,
            'department'=>$this->department,
            'salary'=>$this->salary,
            //'image'=>$filename
       
        ]);
  
        $this->resetInputFields();
    }

  

    public function deleteEmployee($id)
    {
        Employee::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }

    // edit.......................
    public function updateEmployee($id)
    {
        $employee=Employee::find($id);

        $this->employee_id = $id;
        $this->name = $employee->name;
        $this->email = $employee->email;
        $this->address = $employee->address;
        $this->phone = $employee->phone;
        $this->department = $employee->department;
        $this->salary = $employee->salary;
        $this->update=true;

        return view('livewire.index');
    }

    public function updateInfo()
    {
        $employee=Employee::find($this->employee_id);
        $employee->name=$this->name;
        $employee->email=$this->email;
        $employee->address=$this->address;
        $employee->phone=$this->phone;
        $employee->department=$this->department;
        $employee->salary=$this->salary;
          // 'image'=>$file
        $employee->save();       
        $this->resetInputFields();
    }

    function resetInputFields()
    {
        $this->reset(['name','email','address','phone','department','salary','image']);
    }
}
