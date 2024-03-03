<div>
    <form wire:submit="createNewUser">
        <input wire:model="name" type="text" placeholder="name">
        <input wire:model="email" type="email" placeholder="email">
        <input wire:model="password" type="password" placeholder="password">

        <button>
            Create
        </button>
    </form>

    <hr>

    @foreach($users as $user)
        <div>
            <p>{{ $user->name }}</p>
        </div>
    @endforeach
</div>
