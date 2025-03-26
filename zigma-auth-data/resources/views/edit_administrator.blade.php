<x-guest-layout>


    <form method="POST" action="{{ route('update_administrator') }}">
        @csrf

   <h1> Edit Admin Role </h1>

         <!-- Roles Dropdown -->
        <div class="mt-4">
            <x-input-label for="role" :value="__('Role')" />
            <select id="role" name="role" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                <option value="{{ $user->role_id}}" selected='selected'>{{ $user->role_name }}</option>
                @if($user->role_id != 1)<option value="1">Administrator</option>@endif
                @if($user->role_id != 2)<option value="2">Manager</option>@endif
                @if($user->role_id != 3)<option value="3">Guest</option>@endif
            </select>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

          <!-- Block Dropdown -->
        <div class="mt-4">
            <x-input-label for="block" :value="__('Block')" />
            <select id="block" name="block" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
               <option value="{{ $user->block}}" selected='selected'>
                @if($user->block == 0) No @endif
                @if($user->block == 1) Yes @endif
               </option>
                @if($user->block != 0)<option value="0">No</option>@endif
                @if($user->block != 1)<option value="1">Yes</option>@endif
            </select>
            <x-input-error :messages="$errors->get('block')" class="mt-2" />
        </div>

        <input type="hidden" value="{{ $user->id }}" name="user_id">

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-4">
                {{ __('Update') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
