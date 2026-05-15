<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-xl shadow">
    <h2 class="text-2xl font-bold mb-4">Reset Password</h2>

    <form wire:submit.prevent="resetPassword">
        <input type="email"
            wire:model="email"
            class="w-full border rounded p-3 mb-3"
            placeholder="Email">

        <input type="password"
            wire:model="password"
            class="w-full border rounded p-3 mb-3"
            placeholder="Password Baru">

        <input type="password"
            wire:model="password_confirmation"
            class="w-full border rounded p-3 mb-3"
            placeholder="Konfirmasi Password">

        @error('email')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        @error('password')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        <button type="submit"
            class="w-full bg-green-600 text-white py-3 rounded">
            Reset Password
        </button>
    </form>
</div>