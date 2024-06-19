<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8  shadow sm:rounded-lg" style="background-color: rgb(25, 25, 25)">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 shadow sm:rounded-lg" style="background-color: rgb(25, 25, 25)">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8shadow sm:rounded-lg" style="background-color: rgb(25, 25, 25)">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
            <div class="p-4 sm:p-8shadow sm:rounded-lg" style="background-color: rgb(25, 25, 25)">
                <div class="max-w-xl">
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Back To Dashboard') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Once your save all change, You can back to Dashboard by pressing this button') }}
                </p>
                <a href="{{ route('dashboard') }}" class="btn mt-3" style="color: white; background-color: magenta"> Back To Dashboard</a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
