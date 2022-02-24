@include('layouts.client.header')


<body style="background-image: url('img/img2.jpeg'); object-fit: cover">
    <div class="container">
        <div class="text-center">
            <h1 class="text-4xl md:text-7xl mt-12 text-white">Selamat Datang</h1>
            <h3 class="text-2xl md:text-5xl text-white">di layanan online kelurahan tanah tinggi</h3>
            <img src="{{ url('img/logo.png') }}" class="mx-auto" alt="" style="width: 6rem">
        </div>
        <div class="py-12">
            @if ($message = Session::get('success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                <span class="font-medium">Success</span>{{$message}}
              </div>
            @endif
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden opacity-90 shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="row">
                            <div class="col">
                                <span style="font-size: 22px">pilih layanan</span>
                            </div>
                            <div class="col text-center">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
            
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </div>
                        </div>
                        <div class="row text-white">
                            <div class="col-4">
                                <div class="py-6">
                                    <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
                                        <div class="bg-blue-600 overflow-hidden shadow-sm rounded-lg">
                                            <a href="{{ url('ktp') }}">
                                                <div
                                                    class="text-xl p-6 h-28 hover:bg-blue-400 bg-blue-600 border-b border-gray-200">
                                                    <h3> Kartu Tanda Penduduk</h3>
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
                                                    class="text-xl p-6 h-28 bg-yellow-600 hover:bg-yellow-400 border-b border-gray-200">
                                                   <h3> Kartu Keluarga</h3>
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
                                                    class="text-xl p-6 h-28 bg-green-600 hover:bg-yellow-400 border-b border-gray-200">
                                                    <h3>Surat Pindah</h3>
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
                                                    class="text-xl p-6 h-28 bg-purple-400 hover:bg-purple-200 border-b border-gray-200">
                                                   <h3> Surat Kematian</h3>
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
                                                    class="text-xl p-6 h-28 bg-pink-500 hover:bg-pink-300 border-b border-gray-200">
                                                   <h3> Surat Keterangan Usaha</h3>
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
                                                    class="text-xl p-6 h-28 bg-pink-600 hover:bg-pink-400 border-b border-gray-200">
                                                    <h3>Surat Domisili</h3>
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
                                                    class="text-xl p-6 h-28 bg-green-400 hover:bg-green-300 border-b border-gray-200">
                                                    <h3>Surat Keterangan Tidak Mampu</h3>
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
