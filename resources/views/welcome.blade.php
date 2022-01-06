@include('layouts.client.header')


<body>
    <div class="container">
        <div class="text-center">
            <h1 class="text-4xl md:text-7xl mt-12">Selamat Datang</h1>
            <span>di layanan online kelurahan tanah tinggi</span>
        </div>
        <div class="py-12">
            @if ($message = Session::get('success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                <span class="font-medium">Success</span>{{$message}}
              </div>
            @endif
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <span style="font-size: 22px">pilih layanan</span>
                        <div class="row text-white">
                            <div class="col-4">
                                <div class="py-6">
                                    <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
                                        <div class="bg-blue-600 overflow-hidden shadow-sm rounded-lg">
                                            <a href="{{ url('ktp') }}">
                                                <div
                                                    class="p-6 h-28 hover:bg-blue-400 bg-blue-600 border-b border-gray-200">
                                                    Kartu Tanda Penduduk
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="py-6">
                                    <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
                                        <div class="bg-yellow-600 overflow-hidden shadow-sm rounded-lg">
                                            <a href="{{ url('kk') }}">
                                                <div
                                                    class="p-6 h-28 bg-yellow-600 hover:bg-yellow-400 border-b border-gray-200">
                                                    Kartu Keluarga
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="py-6">
                                    <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
                                        <div class="bg-green-600 overflow-hidden shadow-sm rounded-lg">
                                            <a href="{{ url('surat-pindah') }}">
                                                <div
                                                    class="p-6 h-28 bg-green-600 hover:bg-yellow-400 border-b border-gray-200">
                                                    Surat Pindah
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-white">
                            <div class="col-4">
                                <div class="py-6">
                                    <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
                                        <div class="bg-purple-400 overflow-hidden shadow-sm rounded-lg">
                                            <a href="{{ url('surat-kematian') }}">
                                                <div
                                                    class="p-6 h-28 bg-purple-400 hover:bg-purple-200 border-b border-gray-200">
                                                    Surat Kematian
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="py-6">
                                    <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
                                        <div class="bg-pink-500 overflow-hidden shadow-sm rounded-lg">
                                            <a href="{{ url('surat-keterangan-usaha') }}">
                                                <div
                                                    class="p-6 h-28 bg-pink-500 hover:bg-pink-300 border-b border-gray-200">
                                                    Surat Keterangan Usaha
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="py-6">
                                    <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
                                        <div class="bg-pink-600 overflow-hidden shadow-sm rounded-lg">
                                            <a href="{{ url('surat-domisili') }}">
                                                <div
                                                    class="p-6 h-28 bg-pink-600 hover:bg-pink-400 border-b border-gray-200">
                                                    Surat Domisili
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-white">
                            <div class="col-4">
                                <div class="py-6">
                                    <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
                                        <div class="bg-red-400 overflow-hidden shadow-sm rounded-lg">
                                            <a href="{{ url('surat-keterangan-tidak-mampu') }}">
                                                <div
                                                    class="p-6 h-28 bg-green-400 hover:bg-green-300 border-b border-gray-200">
                                                    Surat Keterangan Tidak Mampu
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
