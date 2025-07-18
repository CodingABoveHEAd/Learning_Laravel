
<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>
    <form method="POST" action="/register">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for='first_name'>First Name</x-form-label>
                        <x-form-input type='text' name='first_name' id='first_name' placeholder='first name' />
                    </div>

                    <x-form-error name='first_name' />


                     <div class="sm:col-span-4">
                        <x-form-label for='last_name'>Last Name</x-form-label>
                        <x-form-input type='text' name='last_name' id='last_name' placeholder='last name' />
                    </div>

                    <x-form-error name='last_name' />


                     <div class="sm:col-span-4">
                        <x-form-label for='email'>Email</x-form-label>
                        <x-form-input type='email' name='email' id='email' placeholder='email' />
                    </div>

                    <x-form-error name='email' />

                    <div class="sm:col-span-4">
                        <x-form-label for='password'>Password</x-form-label>
                        <x-form-input type='password' name='password' id='password' placeholder='password' />
                    </div>

                    <x-form-error name='password' />

                    <div class="sm:col-span-4">
                        <x-form-label for='password_confirmation'>Password Confirmation</x-form-label>
                        <x-form-input type='password' name='password_confirmation' id='password_confirmation' placeholder='password_confirmation' />
                    </div>

                    <x-form-error name='password_confirmation' />

                    {{-- @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 italic">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif --}}


                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
        </div>
    </form>
</x-layout>
