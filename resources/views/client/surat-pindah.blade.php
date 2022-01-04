@include('layouts.client.header')
@include('layouts.client.navbar')

<body class="bg-blue-400">
    <div class="container">
        <div class="text-center">
            <h1 class="text-3xl md:text-5xl mt-12 text-white">Masukkan Data Anda</h1>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Modal form -->

                <button
                    class="mb-2 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button" data-modal-toggle="default-modal">
                    + Anggota Keluarga yang Pindah
                </button>


                <div class="bg-white overflow-hidden rounded-md shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form action="{{ url('surat-pindah') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="layanan" value="surat pindah">
                            <input type="hidden" name="user_id" value="{{ auth()->user->id }}">
                            <!-- Modal -->
                            <div id="default-modal" aria-hidden="true"
                                class="fixed left-0 right-0 z-50 items-center justify-center hidden h-modal md:h-full top-4 md:inset-0"
                                style="overflow-y: auto !important">
                                <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <div
                                            class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600 ">
                                            <h6 class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
                                                Tambah daftar anggota keluarga yang pindah
                                            </h6>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-toggle="default-modal">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>



                                        <div class="p-4 space-y-6" id="parent_data_keluarga" style="margin-top: -3em">
                                            <button onclick="addChildRow()"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">tambah
                                                data</button>
                                            <div class="row">
                                                <!-- Daftar nama anggota keluarga -->
                                                <div class="col-12 mb-4">
                                                    <div class="row mb-2">
                                                        <div class="col-12 mb-1">
                                                            <div class="form-floating">
                                                                <input required type="text" name="nama_anggota_keluarga[]" id="rw"
                                                                    placeholder="masukkan nik"
                                                                    class="form-control rounded">
                                                                <label for="rw">Masukkan Nama</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Daftar nama anggota keluarga -->
                                            </div>
                                        </div>

                                        <div
                                            class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                            <button data-modal-toggle="default-modal" type="button"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                accept</button>
                                            <button data-modal-toggle="default-modal" type="button"
                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Decline</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="row d-flex">
                                <div class="col-12 col-md-4 mb-2">
                                    <div class="form-floating">
                                        <input required type="text" id="name" name="nama" placeholder="masukkan kterangan"
                                            class="form-control rounded">
                                        <label for="name">Nama Lengkap Pemohon</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-2 justify-content-center">
                                    <div class="form-floating">
                                        <input required type="text" name="nama_kepala_keluarga" id="nama_kepala_keluarga"
                                            placeholder="masukkan kterangan" class="form-control rounded">
                                        <label for="nama_kepala_keluarga">Nama Kepala Keluarga</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-2" id="nik_selector">
                                    <div class="form-floating">
                                        <input required type="text" id="nik" name="nik" placeholder="masukkan nik pemohon"
                                            class="form-control rounded">
                                        <label for="nik">NIK Pemohon</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-2" id="nik_selector">
                                    <div class="form-floating">
                                        <input required type="text" id="nik" name="nik_kepala_keluarga" placeholder="masukkan nik kepala keluarga"
                                            class="form-control rounded">
                                        <label for="nik">NIK Kepala Keluarga</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-2">
                                    <div class="form-floating">
                                        <textarea required name="alamat" id="address" class="w-full rounded" rows="3"
                                            placeholder="Alamat Sebelumnya"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-2">
                                    <div class="form-floating">
                                        <textarea required name="alamat_tujuan" id="address" class="w-full rounded" rows="3"
                                            placeholder="Alamat Yang dituju"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-2">
                                    <div class="">
                                        <input required type="file" id="poto" name="pengantar_rt_img" placeholder="upload poto"
                                            class="form-control rounded">
                                        <label for="poto">upload surat pengantar RT</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-2">
                                    <div class="">
                                        <input required type="file" id="poto" name="ktp_img" placeholder="upload poto"
                                            class="form-control rounded">
                                        <label for="poto">upload KTP pemohon</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-2">
                                    <div class="">
                                        <input required type="file" id="poto" name="kk_img" placeholder="upload poto"
                                            class="form-control rounded">
                                        <label for="poto">upload KK pemohon</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="bg-blue-800 hover:bg-blue-600 p-3 w-full text-white mt-2 rounded ">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
</body>

<script>
    let i = 2;

    function addChildRow() {
        let row = `<div class="row" style="margin-top: -1.5em">
                        <div class="col-12 mb-4">
                            <div class="row mb-2">
                                <div class="col-12 mb-1">
                                    <div class="form-floating">
                                        <input required type="text" id="rw" name="nama_anggota_keluarga[]" placeholder="masukkan nik"
                                            class="form-control rounded">
                                        <label for="rw">Masukkan Nama</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`
        $('#parent_data_keluarga').append(row);
    }
</script>


</html>
