<div>
    <h1>Subscribers </h1>
    <table class="table">
        <tr>
            <th wire:click="sort('id')">id  @include('livewire.subscriber.sort',['column'=>'id']) </th>
            <th wire:click="sort('first_name')">First Name   @include('livewire.subscriber.sort',['column'=>'first_name'])</th>
            <th wire:click="sort('last_name')">Last Name  @include('livewire.subscriber.sort',['column'=>'last_name'])</th>
            <th wire:click="sort('email')">Email  @include('livewire.subscriber.sort',['column'=>'email'])</th>
            <th wire:click="sort('gender')">Gender  @include('livewire.subscriber.sort',['column'=>'gender'])</th>
        </tr>
        @foreach ($subscribers as $subscriber)
        <tr>
            <td>{{ $subscriber->id }}</td>
            <td>{{ $subscriber->first_name }}</td>
            <td>{{ $subscriber->last_name }}</td>
            <td>{{ $subscriber->email }}</td>
            <td>{{ $subscriber->gender ==0 ? 'Male' : 'Female'}}</td>
        </tr>
    @endforeach
    </table>
    {{ $subscribers->links() }}
</div>
