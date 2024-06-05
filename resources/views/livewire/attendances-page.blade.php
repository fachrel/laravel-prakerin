<div class="p-4">
    <main class="mb-1 mt-1.5 w-full">
        <div class="col-span-full mb-4 xl:mb-2">
            <nav class="mb-5 flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="hover:text-primary-600 inline-flex items-center text-gray-700 dark:text-gray-300 dark:hover:text-white">
                            <svg class="mr-2.5 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="h-6 w-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <a href="#"
                                class="hover:text-primary-600 ml-1 text-gray-700 dark:text-gray-300 dark:hover:text-white md:ml-2">Absensi</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <h1 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl mb-6">Absensi</h1>
        </div>
        @hasrole('student')
            @if (!empty(Auth::user()->requests->first()))
                @if (!Auth::user()->requests->first()->status == 'rejected' || Auth::user()->requests->first()->status == 'accepted')
                    <div class="max-full rounded-lg border border-gray-200 bg-white p-6 shadow dark:border-gray-700 dark:bg-gray-800">
                        <p class="font-semibold text-gray-900 dark:text-white pr-10">Nama Siswa : <span class="font-normal">{{ $student->user->name }}</span> </p>
                        <p class="font-semibold text-gray-900 dark:text-white pr-10">Nama Industri : <span class="font-normal">{{ $student->user->requests->first()->industry->name }}</span> </p>
                        <p class="font-semibold text-gray-900 dark:text-white pr-10">Jam Kerja : <span class="font-normal">{{ \Carbon\Carbon::parse($student->user->requests->first()->industry->entry_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($student->user->requests->first()->industry->exit_time)->format('H:i') }}</span> </p>
                        <p class="font-semibold text-gray-900 dark:text-white pr-10 mt-2">Absen Masuk : <span class="font-normal">
                            @if (!$attendance->isEmpty())
                                @if ($attendance->first()->entry_time == null)
                                    @if ($attendance->first()->status == 'sick' || $attendance->first()->status == 'leave')
                                        @if ($attendance->first()->status == 'sick')
                                            Sakit
                                        @elseif ($attendance->first()->status == 'leave')
                                            Izin
                                        @elseif ($attendance->first()->status == 'Absent')
                                            Alpha
                                        @endif
                                    @else
                                        Belum Absen Masuk
                                    @endif
                                @else
                                    {{ $attendance->first()->entry_time }}
                                @endif
                            @else
                                Belum Absen Masuk
                            @endif

                        </span></p>
                        <p class="font-semibold text-gray-900 dark:text-white pr-10">Absen Keluar : <span class="font-normal">
                            @if (!$attendance->isEmpty())
                                @if ($attendance->first()->exit_time == null)
                                    @if ($attendance->first()->status == 'sick' || $attendance->first()->status == 'leave')
                                        @if ($attendance->first()->status == 'sick')
                                            Sakit
                                        @elseif ($attendance->first()->status == 'leave')
                                            Izin
                                        @elseif ($attendance->first()->status == 'Absent')
                                            Alpha
                                        @endif
                                    @else
                                        Belum Absen Keluar
                                    @endif
                                @else
                                    {{ $attendance->first()->exit_time }}
                                @endif
                            @else
                                Belum Absen Keluar
                            @endif
                        </span></p>
                        @if (!$attendance->isEmpty())
                            @if ($attendance->first()->entry_time !== null && $attendance->first()->exit_time !== null)

                            @else
                                @if ($attendance->first()->status == 'sick' || $attendance->first()->status == 'leave')

                                @else
                                    <button wire:click="take_attendance" class="mt-3 text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                        Absen
                                        @if ($attendance->first()->exit_time == null)
                                            keluar
                                        @else
                                            masuk
                                        @endif
                                    </button>
                                @endif

                            @endif
                        @else
                            <div class="w-32">
                                <label for="status" class="block mb-2 text-sm font-medium
                                    @if ($errors->has('status'))
                                        text-red-700 dark:text-red-500
                                    @else
                                        text-gray-900 dark:text-white
                                    @endif">
                                    Jenis Kelamin
                                </label>
                                <select id="status" wire:model.live="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Status</option>
                                    <option value="sick">Sakit</option>
                                    <option value="leave">Izin</option>
                                </select>
                                @error("status")
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{$message}}</p>
                                @enderror
                            </div>
                            <button wire:click="take_attendance" class="mt-3 text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Absen Masuk
                            </button>
                        @endif
                    </div>
                    <div class="mt-4 flex flex-col">
                        <div class="overflow-x-auto">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden shadow">
                                    <table class="min-w-full table-fixed divide-y divide-gray-200 dark:divide-gray-600">
                                        <thead class="bg-gray-100 dark:bg-gray-700">
                                            <tr>

                                                <th scope="col"
                                                    class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                                                    Hari
                                                </th>
                                                <th scope="col"
                                                    class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                                                    Absen Masuk
                                                </th>
                                                <th scope="col"
                                                    class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                                                    Absen Keluar
                                                </th>
                                                <th scope="col"
                                                    class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                                                    Keterangan
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-gray-800">
                                            @foreach ($myAttendances as $myAttendance)
                                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                    {{-- <td class="w-4 p-4">
                                                        <div class="flex items-center">
                                                            <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                                            <label for="checkbox-1" class="sr-only">checkbox</label>
                                                        </div>
                                                    </td> --}}
                                                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">{{ \Carbon\Carbon::parse($myAttendance->created_at)->translatedFormat('l d F Y') }}</td>
                                                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                                                        @if ($myAttendance->entry_time == null)
                                                            -
                                                        @else
                                                            {{ \Carbon\Carbon::parse($myAttendance->entry_time)->format('H:i') }}
                                                        @endif
                                                    </td>
                                                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                                                        @if ($myAttendance->exit_time == null)
                                                            -
                                                        @else
                                                            {{ \Carbon\Carbon::parse($myAttendance->exit_time)->format('H:i') }}
                                                        @endif
                                                    </td>
                                                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                                                        @if ($myAttendance->status == 'sick')
                                                            Sakit
                                                        @elseif ($myAttendance->status == 'leave')
                                                            Izin
                                                        @elseif ($myAttendance->status == 'Absent')
                                                            Alpha
                                                        @else
                                                            -
                                                        @endif
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @if ($myAttendances->lastPage() > 1)
                        {{ $myAttendances->links('vendor.livewire.custom') }}
                    @else
                        <div
                            class="sticky bottom-0 right-0 w-full items-center border-t border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800 sm:flex sm:justify-between">
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Memperlihatkan
                                <span class="font-semibold text-gray-900 dark:text-white">
                                    @if ($myAttendances->total() == 0)
                                        0
                                    @else
                                        {{ $myAttendances->firstItem() }}-{{ $myAttendances->lastItem() }}
                                    @endif
                                </span> dari <span class="font-semibold text-gray-900 dark:text-white">
                                    {{ $myAttendances->total() }}
                                </span>
                            </span>
                            <div class="flex items-center space-x-3">
                                <button
                                    class="flex cursor-not-allowed rounded-lg bg-blue-400 px-3 py-2 text-center text-sm font-medium text-white dark:bg-blue-500"
                                    disabled>
                                    <svg class="-ml-1 mr-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Sebelumnya
                                </button>
                                <button
                                    class="flex cursor-not-allowed rounded-lg bg-blue-400 px-3 py-2 text-center text-sm font-medium text-white dark:bg-blue-500"
                                    disabled>
                                    Selanjutnya
                                    <svg class="-mr-1 ml-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @endif --}}
                </div>
                @else
                    <div class="max-full rounded-lg border border-gray-200 bg-white p-6 shadow dark:border-gray-700 dark:bg-gray-800">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Silahkan lakukan pengajuan terlebih dahulu.</h5>
                        </a>
                    </div>
                @endif
            @else
                <div class="max-full rounded-lg border border-gray-200 bg-white p-6 shadow dark:border-gray-700 dark:bg-gray-800">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Silahkan lakukan pengajuan terlebih dahulu.</h5>
                    </a>
                </div>
            @endif

        @endhasrole

        @hasrole('teacher')
            <div class="mt-4 flex flex-col">
                <div class="overflow-x-auto">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden shadow">
                            <table class="min-w-full table-fixed divide-y divide-gray-200 dark:divide-gray-600">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>

                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                                            Hari
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                                            Nama
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                                            Absen Masuk
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                                            Absen Keluar
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                                            Keterangan
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-gray-800">
                                    {{$teacherAttendances}}
                                    @foreach ($teacherAttendances as $teacherAttendance)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                            <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">{{ \Carbon\Carbon::parse($teacherAttendance->created_at)->translatedFormat('l d F Y') }}</td>
                                            <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">{{ $teacherAttendance->user->name}}</td>
                                            <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                                                @if ($teacherAttendance->entry_time == null)
                                                    -
                                                @else
                                                    {{ \Carbon\Carbon::parse($teacherAttendance->entry_time)->format('H:i') }}
                                                @endif
                                            </td>
                                            <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                                                @if ($teacherAttendance->exit_time == null)
                                                    -
                                                @else
                                                    {{ \Carbon\Carbon::parse($teacherAttendance->exit_time)->format('H:i') }}
                                                @endif
                                            </td>
                                            <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                                                @if ($teacherAttendance->status == 'sick')
                                                    Sakit
                                                @elseif ($teacherAttendance->status == 'leave')
                                                    Izin
                                                @elseif ($teacherAttendance->status == 'Absent')
                                                    Alpha
                                                @else
                                                    -
                                                @endif
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endhasrole

    </main>
</div>
