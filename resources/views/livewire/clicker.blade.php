<div>
    <h1>{{ $title }}</h1>

    {{ count($users) }}

    <button wire:click="createNewUser">
        Create User
    </button>
</div>
