<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>
    <form method="POST" action="/login">
        @csrf

        <div class="space-y-12">


            <div class="sm:col-span-4">
                <x-form-label for='email'>Email</x-form-label>
                <x-form-input value="old('email')" type='email' name='email' id='email' placeholder='email' required />
            </div>

            <x-form-error name='email' />

            <div class="sm:col-span-4">
                <x-form-label for='password'>Password</x-form-label>
                <x-form-input type='password' name='password' id='password' placeholder='password' required />
            </div>

            <x-form-error name='password' />
        </div>
        </div>



        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2
                 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
        </div>
    </form>
</x-layout>
