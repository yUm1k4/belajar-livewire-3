<div>
    <form class="p-5" wire:submit="createNewUser">
        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" wire:model="name" type="text" placeholder="name">
        @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" wire:model="email" type="email" placeholder="email">
        @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" wire:model="password" type="password" placeholder="password">
        @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

        <button class="block rounded bg-blue-500 text-white px-3 py-1">
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
