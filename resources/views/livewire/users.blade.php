<div>
    @include('livewire.update')
    @include('livewire.create')
    @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">
            {{ session('message') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-8">
            <h1>Users CRUD</h1>
        </div>
        <div class="col-md-4 justify-content-center align-self-center text-right">
            <a href="#" class="btn btn-sm btn-primary" type="button" data-toggle="modal"
                data-target="#exampleModal">New</a>
        </div>
    </div>
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->username }}</td>
                    <td>{{ $value->email }}</td>
                    <td>
                        <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $value->id }})"
                            class="btn btn-primary btn-sm">Edit</button>
                        <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
