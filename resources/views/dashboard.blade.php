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
                                            @forelse ($users as $user)
                                                @foreach ($user->services as $service)
                                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $user->name }}
                                                        </td>
                                                        <td
                                                            class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            {{ $user->email }}
                                                        </td>
                                                        <td
                                                            class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            {{ $user->phone_number }}
                                                        </td>
                                                        <td
                                                            class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            {{ $service->layanan }}
                                                        </td>
                                                        <td
                                                            class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            <form action="{{ route('detail-pasien') }}" method="get">
                                                                <input type="hidden" name="user_id"
                                                                    value="{{ $user->id }}">
                                                                <input type="hidden" name="id"
                                                                    value="{{ $service->id }}">
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
                                                                    value="{{ $user->id }}">
                                                                <input type="hidden" name="layanan"
                                                                    value="{{ $service->layanan }}">
                                                                <button
                                                                    class="text-blue-600 hover:text-blue-900 dark:text-blue-500 dark:hover:underline"
                                                                    type="submit">kirim email</button>
                                                            </form>
                                                        </td>

                                                    </tr>
                                                @endforeach
                                            @empty
                                                <tr>
                                                    <td colspan="5">data tidak ditemukan</td>
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
</x-app-layout>
