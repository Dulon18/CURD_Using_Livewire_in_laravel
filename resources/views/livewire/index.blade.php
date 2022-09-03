<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <form class="mt-4" wire:submit.prevent="saveData">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" wire:model="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" wire:model="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input type="text" wire:model="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone</label>
    <input type="text"  wire:model="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Department</label>
    <input type="text" wire:model="department" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Salary</label>
    <input type="text" wire:model="salary" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image</label>
    <input type="file" wire:model="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
<h1 class="text-center fw-bold">Employee List</h1>
<table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Department</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->address}}</td>
                <td>{{ $employee->department}}</td>
                <td>
                <button wire:click="#" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="#" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
