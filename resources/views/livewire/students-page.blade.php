<div>
    <main>
        <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full mb-1">
                <div class="mb-4">
                    <nav class="flex mb-5" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                          <li class="inline-flex items-center">
                            <a href="#" class="inline-flex items-center text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-white">
                              <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                              Home
                            </a>
                          </li>
                          <li>
                            <div class="flex items-center">
                              <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                              <a href="#" class="ml-1 text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Users</a>
                            </div>
                          </li>
                          <li>
                            <div class="flex items-center">
                              <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                              <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">List</span>
                            </div>
                          </li>
                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Semua siswa</h1>
                </div>
                <div class="sm:flex">
                    <div class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                        <label for="users-search" class="sr-only">Search</label>
                        <div class="relative mt-1 lg:w-64 xl:w-96">
                            <input type="text" wire:model.live.debounce.300ms="search" name="search" id="users-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
                        </div>
                        </form>
                        <div class="flex pl-0 mt-3 space-x-1 sm:pl-2 sm:mt-0">
                            <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                            </a>
                            <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                            </a>
                            <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                            </a>
                            <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                        <button type="button" x-data @click="$dispatch('open-modal',{name:'student'})" class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                            Tambah siswa
                        </button>

                        {{-- <button wire:click="$dispatch('openModal', { component: 'modals.user-modal' })">add User</button> --}}

                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden shadow">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-all" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-all" class="sr-only">checkbox</label>
                                        </div>
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Name
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Username
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Gender
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        NISN
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        NIS
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Jurusan
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Kelas
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Status
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                @foreach ($students as $student)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <td class="flex items-center p-4 mr-12 space-x-6 whitespace-nowrap">
                                            <img class="w-10 h-10 rounded-full" src="https://static.vecteezy.com/system/resources/thumbnails/009/292/244/small/default-avatar-icon-of-social-media-user-vector.jpg" alt="Neil Sims avatar">
                                            <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                                <div class="text-base font-semibold text-gray-900 dark:text-white">{{ $student->user->name }}</div>
                                                <div class="text-sm font-normal text-gray-500 dark:text-gray-400">{{ $student->user->email }}</div>
                                            </div>
                                        </td>
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $student->user->username }}</td>
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            @if ($student->gender == 'male')
                                                Laki-laki
                                            @else
                                                Perempuan
                                            @endif
                                        </td>
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $student->NISN }}</td>
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $student->NIS }}</td>
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $student->major->name }}</td>
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $student->group }}</td>
                                        <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>  Active
                                            </div>
                                        </td>
                                        <td class="p-4 space-x-2 whitespace-nowrap">
                                            <button x-data @click="$dispatch('open-modal',{name:'student'})" wire:click="$dispatch('edit-student', { id: {{ $student->id }} })" type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                                Edit user
                                            </button>
                                            <button type="button" @click="$dispatch('delete-modal',{ name:'delete-user'})" wire:click="$dispatch('delete', { id: {{ $student->id }} })" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                                Delete user
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @if ($students->lastPage() > 1)
            {{ $students->links('vendor.livewire.custom') }}
        @else
            <div class="sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 sm:flex sm:justify-between dark:bg-gray-800 dark:border-gray-700">
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Memperlihatkan
                    <span class="font-semibold text-gray-900 dark:text-white">
                        @if ($students->total() == 0)
                            0
                        @else
                            {{ $students->firstItem() }}-{{ $students->lastItem() }}
                        @endif
                    </span> dari <span class="font-semibold text-gray-900 dark:text-white">
                        {{ $students->total() }}
                    </span>
                </span>
                <div class="flex items-center space-x-3">
                    <button class="flex text-white bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-3 py-2 text-center" disabled>
                        <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        Sebelumnya
                    </button>
                    <button class="flex text-white bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-3 py-2 text-center" disabled>
                        Selanjutnya
                        <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            </div>
        @endif



        {{-- Add and Edit User Modal --}}
        <x-modal name="student" title="Siswa" height="h-[560px]">
            <x-slot:body>
                @if ($currentPage === 1)
                    <div class="p-4 md:p-5">
                        <ol class="flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-600 dark:border-gray-500 sm:p-4 sm:space-x-4 rtl:space-x-reverse mb-2">
                            <li class="flex items-center text-blue-600 dark:text-blue-500">
                                <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                                    1
                                </span>
                                Informasi<span class="hidden sm:inline-flex sm:ms-2">Akun</span>
                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                </svg>
                            </li>
                            <li class="flex items-center">
                                <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                    2
                                </span>
                                    Informasi <span class="hidden sm:inline-flex sm:ms-2">Siswa</span>
                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                </svg>
                            </li>
                            <li class="cursor-pointer flex items-center">
                                <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                    3
                                </span>
                                Konfirmasi
                            </li>
                        </ol>


                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium
                                    @if ($errors->has('form.name'))
                                        text-red-700 dark:text-red-500
                                    @else
                                        text-gray-900 dark:text-white
                                    @endif">
                                    Nama
                                </label>
                                <input wire:model.live="form.name" type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama">
                                @error("form.name")
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label for="username" class="block mb-2 text-sm font-medium
                                    @if ($errors->has('form.username'))
                                        text-red-700 dark:text-red-500
                                    @else
                                        text-gray-900 dark:text-white
                                    @endif">
                                    Username
                                </label>
                                <input wire:model.live="form.username" type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username">
                                @error("form.username")
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label for="email" class="block mb-2 text-sm font-medium
                                    @if ($errors->has('form.email'))
                                        text-red-700 dark:text-red-500
                                    @else
                                        text-gray-900 dark:text-white
                                    @endif">
                                    Email
                                </label>
                                <input wire:model.live="form.email" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email">
                                @error("form.email")
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{$message}}</p>
                                @enderror
                            </div>
                            @if ($studentId)
                                <div class="col-span-2">
                                    <label for="oldPassword" class="block mb-2 text-sm font-medium
                                        @if ($errors->has('oldPassword'))
                                            text-red-700 dark:text-red-500
                                        @else
                                            text-gray-900 dark:text-white
                                        @endif">
                                        Password lama
                                    </label>
                                    <input wire:model.live="oldPassword" type="password" name="oldPassword" id="oldPassword" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @error("oldPassword")
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-span-2">
                                    <label for="newPassword" class="block mb-2 text-sm font-medium
                                        @if ($errors->has('newPassword'))
                                            text-red-700 dark:text-red-500
                                        @else
                                            text-gray-900 dark:text-white
                                        @endif">
                                        Password
                                    </label>
                                    <input wire:model.live="newPassword" type="password" name="newPassword" id="oldPassword" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @error("newPassword")
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{$message}}</p>
                                    @enderror
                                </div>
                            @else
                                <div class="col-span-2">
                                    <label for="password" class="block mb-2 text-sm font-medium
                                        @if ($errors->has('form.password'))
                                            text-red-700 dark:text-red-500
                                        @else
                                            text-gray-900 dark:text-white
                                        @endif">
                                        Password
                                    </label>
                                    <input wire:model.live="form.password" type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @error("form.password")
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-span-2">
                                    <label for="confirmPassword" class="block mb-2 text-sm font-medium
                                        @if ($errors->has('confirmPassword'))
                                            text-red-700 dark:text-red-500
                                        @else
                                            text-gray-900 dark:text-white
                                        @endif">
                                        Konfirmasi Password
                                    </label>
                                    <input wire:model.live="confirmPassword" type="password" name="confirmPassword" id="confirmPassword" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @error("confirmPassword")
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{$message}}</p>
                                    @enderror
                                </div>
                            @endif
                        </div>
                        <div class="flex items-center justify-end">
                            <a wire:click="increment" class=" cursor-pointer inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Selanjutnya
                                <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @elseif ($currentPage === 2)
                    <div class="p-4 md:p-5">
                        <ol class="flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-600 dark:border-gray-500 sm:p-4 sm:space-x-4 rtl:space-x-reverse mb-2">
                            <li class="flex items-center">
                                <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                    1
                                </span>
                                Informasi<span class="hidden sm:inline-flex sm:ms-2">Akun</span>
                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                </svg>
                            </li>
                            <li class="flex items-center text-blue-600 dark:text-blue-500">
                                <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                                    2
                                </span>
                                    Informasi <span class="hidden sm:inline-flex sm:ms-2">Siswa</span>
                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                </svg>
                            </li>
                            <li class="flex items-center">
                                <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                    3
                                </span>
                                Konfirmasi
                            </li>
                        </ol>


                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="nis" class="block mb-2 text-sm font-medium
                                    @if ($errors->has('studentForm.NIS'))
                                        text-red-700 dark:text-red-500
                                    @else
                                        text-gray-900 dark:text-white
                                    @endif">
                                    NIS
                                </label>
                                <input wire:model.live="studentForm.NIS" type="text" name="nis" id="nis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="9817">
                                @error("studentForm.NIS")
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-2">
                                <label for="NISN" class="block mb-2 text-sm font-medium
                                    @if ($errors->has('studentForm.NISN'))
                                        text-red-700 dark:text-red-500
                                    @else
                                        text-gray-900 dark:text-white
                                    @endif">
                                    NISN
                                </label>
                                <input wire:model.live="studentForm.NISN" type="text" name="NISN" id="NISN" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0100100010">
                                @error("studentForm.NISN")
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label for="gender" class="block mb-2 text-sm font-medium
                                    @if ($errors->has('studentForm.gender'))
                                        text-red-700 dark:text-red-500
                                    @else
                                        text-gray-900 dark:text-white
                                    @endif">
                                    Jenis Kelamin
                                </label>
                                <select id="gender" wire:model.live="studentForm.gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="male">Laki-laki</option>
                                    <option value="female">perempuan</option>
                                </select>
                                @error("studentForm.gender")
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label for="major" class="block mb-2 text-sm font-medium
                                    @if ($errors->has('studentForm.major_id'))
                                        text-red-700 dark:text-red-500
                                    @else
                                        text-gray-900 dark:text-white
                                    @endif">
                                    Jurusan
                                </label>
                                <select id="major" wire:model.live="studentForm.major_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @if (!$studentId)
                                        <option selected>Pilih Jurusan</option>
                                    @endif
                                    @foreach ($majors as $major)
                                        <option value="{{ $major->id }}"
                                            @if ($major->id == $studentForm->major_id)
                                                selected
                                            @endif>
                                            {{ $major->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error("studentForm.major_id")
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label for="enrollment_year" class="block mb-2 text-sm font-medium
                                    @if ($errors->has('studentForm.enrollment_year'))
                                        text-red-700 dark:text-red-500
                                    @else
                                        text-gray-900 dark:text-white
                                    @endif">
                                    Tahun masuk
                                </label>
                                <select id="enrollment_year" wire:model.live="studentForm.enrollment_year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Pilih Tahun Masuk</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                </select>
                                @error("studentForm.enrollment_year")
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label for="group" class="block mb-2 text-sm font-medium
                                    @if ($errors->has('studentForm.group'))
                                        text-red-700 dark:text-red-500
                                    @else
                                        text-gray-900 dark:text-white
                                    @endif">
                                    Kelas
                                </label>
                                <select id="group" wire:model.live="studentForm.group" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @if (!$studentId)
                                        <option selected>Pilih Kelas</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    @else
                                        <option>Pilih Kelas</option>
                                        <option @if ($studentForm->group == "A") selected @endif value="A">A</option>
                                        <option @if ($studentForm->group == "B") selected @endif value="B">B</option>
                                        <option @if ($studentForm->group == "C") selected @endif value="C">C</option>
                                    @endif
                                </select>
                                {{-- <input wire:model.live="studentForm.group" type="group" name="group" id="group" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="D"> --}}
                                @error("studentForm.group")
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{$message}}</p>
                                @enderror
                            </div>



                        </div>
                        <div class="flex items-center justify-between">
                            <a wire:click="decrement" class="cursor-pointer	 inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Sebelumnya
                            </a>
                            <a wire:click="increment" class="cursor-pointer	 inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Selanjutnya
                                <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>



                    </div>
                @elseif ($currentPage === 3)
                    <div class="p-4 md:p-5">
                        <ol class="flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-600 dark:border-gray-500 sm:p-4 sm:space-x-4 rtl:space-x-reverse mb-2">
                            <li class="flex items-center">
                                <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                    1
                                </span>
                                Informasi<span class="hidden sm:inline-flex sm:ms-2">Akun</span>
                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                </svg>
                            </li>
                            <li class="flex items-center">
                                <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                    2
                                </span>
                                    Informasi <span class="hidden sm:inline-flex sm:ms-2">Siswa</span>
                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                </svg>
                            </li>
                            <li class="flex items-center text-blue-600 dark:text-blue-500">
                                <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                                    3
                                </span>
                                Konfirmasi
                            </li>
                        </ol>


                        <div class="">
                            <p class="font-semibold text-gray-900 dark:text-white">Nama : <span class="font-normal">{{ $form->name }}</span> </p>
                            <p class="font-semibold text-gray-900 dark:text-white">Username : <span class="font-normal">{{ $form->username }}</span> </p>
                            <p class="font-semibold text-gray-900 dark:text-white">Email : <span class="font-normal">{{ $form->email }}</span> </p>
                            <p class="font-semibold text-gray-900 dark:text-white">NIS : <span class="font-normal">{{ $studentForm->NIS }}</span> </p>
                            <p class="font-semibold text-gray-900 dark:text-white">NISN : <span class="font-normal">{{ $studentForm->NISN }}</span> </p>
                            <p class="font-semibold text-gray-900 dark:text-white">Jenis Kelamin : <span class="font-normal">{{ $studentForm->gender }}</span> </p>
                            <p class="font-semibold text-gray-900 dark:text-white">Jurusan : <span class="font-normal">{{ $studentForm->major_id }}</span> </p>
                            <p class="font-semibold text-gray-900 dark:text-white">Tahun Masuk : <span class="font-normal">{{ $studentForm->enrollment_year }}</span> </p>
                            <p class="font-semibold text-gray-900 dark:text-white">Kelas : <span class="font-normal">{{ $studentForm->group }}</span> </p>
                        </div>
                        <div class="flex items-center justify-between mt-[128px]">
                            <a wire:click="decrement" class="cursor-pointer	 inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Sebelumnya
                            </a>
                            <form wire:submit.prevent="save">
                                <button type="submit" class="cursor-pointer inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Konfirmasi
                                    <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>


                    </div>
                @endif

            </x-slot>
        </x-modal>

        {{-- Delete User Modal --}}
        <x-delete-modal name="delete-user" />

    </main>
</div>
