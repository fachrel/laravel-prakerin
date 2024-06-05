<div>
    <main class="bg-gray-50 dark:bg-gray-900">

        <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
            <a href="https://flowbite-admin-dashboard.vercel.app/" class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10 dark:text-white">
                <span>Portal Prakerin</span>
            </a>
            <!-- Card -->
            <div class="w-full max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                    Login
                </h2>
                <form class="mt-8 space-y-6" wire:submit="login">
                    @csrf
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium
                            @if ($errors->has('username'))
                                text-red-700 dark:text-red-500
                            @else
                                text-gray-900 dark:text-white
                            @endif">
                            Your username
                        </label>
                        <input wire:model.live="username" type="username" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="username">
                        @error("username")
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{$message}}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium
                            @if ($errors->has('password'))
                                text-red-700 dark:text-red-500
                            @else
                                text-gray-900 dark:text-white
                            @endif">
                            Your password
                        </label>
                        <input wire:model.live="password" type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error("password")
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{$message}}</p>
                        @enderror
                    </div>

                    <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                    </div>
                </form>
            </div>
        </div>
        </main>
</div>
