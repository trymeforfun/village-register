<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if ($message = Session::get('success'))
                    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                        role="alert">
                        <span class="font-medium">Success</span>{{ $message }}
                    </div>
                @endif
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">

                            
                            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                <form action="" method="get">
                                    <div class="flex space-x-4">
                                        <select name="layanan" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">-- pilih layanan --</option>
                                            <option value="ktp">KTP</option>
                                            <option value="kk">KK</option>
                                            <option value="surat pindah">Surat Pindah</option>
                                            <option value="surat kematian">Surat Kematian</option>
                                            <option value="surat domisili">Surat Domisili</option>
                                            <option value="surat keterangan usaha">Surat Keterangan Usaha</option>
                                            <option value="surat keterangan tidak mampu">Surat Keterangan Tidak Mampu</option>
                                        </select>
                                        <button class="bg-blue-50 border border-blue-300 text-blue-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-8 p-2 dark:bg-blue-700 dark:border-blue-600 dark:placeholder-blue-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="submit">filter</button>
                                    </div>
                                </form> <br>
                                <div class="overflow-hidden shadow-md sm:rounded-lg">
                                    <table class="min-w-full">
                                        <thead class="bg-gray-50 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Name
                                                </th>
                                                <th scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Email
                                                </th>
                                                <th scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Phone Number
                                                </th>
                                                <th scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Service
                                                </th>
                                                <th scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Detail
                                                </th>
                                                <th scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($users as $service)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $service->user->name }}
                                                        </td>
                                                        <td
                                                            class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            {{ $service->user->email }}
                                                        </td>
                                                        <td
                                                            class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            {{ $service->user->phone_number }}
                                                        </td>
                                                        <td
                                                            class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            {{ $service->layanan }}
                                                        </td>
                                                        <td
                                                            class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            <form action="{{ route('detail-pasien') }}" method="get">
                                                                <input type="hidden" name="user_id"
                                                                    value="{{ $service->user->id }}">
                                                                <input type="hidden" name="id"
                                                                    value="{{ $service->layanan_id }}">
                                                                <input type="hidden" name="layanan"
                                                                    value="{{ $service->layanan }}">
                                                                <button
                                                                    class="text-blue-600 hover:text-blue-900 dark:text-blue-500 dark:hover:underline"
                                                                    type="submit">detail</button>
                                                            </form>
                                                        </td>
                                                        <td
                                                            class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            <form action="{{ route('send-email') }}" method="get">
                                                                <input type="hidden" name="user_id"
                                                                    value="{{ $service->user->id }}">
                                                                <input type="hidden" name="layanan"
                                                                    value="{{ $service->layanan }}">
                                                                <button
                                                                    class="text-blue-600 hover:text-blue-900 dark:text-blue-500 dark:hover:underline"
                                                                    type="submit">kirim email</button>
                                                            </form>
                                                            <form action="{{ route('delete-service') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="service_id"
                                                                    value="{{ $service->id }}">
                                                                <button
                                                                    class="text-blue-600 hover:text-blue-900 dark:text-blue-500 dark:hover:underline"
                                                                    type="submit">delete</button>
                                                            </form>
                                                        </td>

                                                    </tr>
                                            @empty
                                                <tr class="text-center">
                                                    <td colspan="6">data tidak ditemukan</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
</x-app-layout>
