<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($data->layanan == 'ktp')
                        @include('client.detail.ktp')
                    @elseif($data->layanan == 'kk')
                        @include('client.detail.kk')
                    @elseif($data->layanan == 'surat domisili')
                        @include('client.detail.surat-domisili')
                    @elseif($data->layanan == 'surat pindah')
                        @include('client.detail.surat-pindah')
                    @elseif($data->layanan == 'surat keterangan tidak mampu')
                        @include('client.detail.surat-keterangan-tidak-mampu')
                    @elseif($data->layanan == 'surat keterangan usaha')
                        @include('client.detail.surat-keterangan-usaha')
                    @elseif($data->layanan == 'surat kematian')
                        @include('client.detail.surat-kematian')
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
