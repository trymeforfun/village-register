@include('layouts.client.header')
@include('layouts.client.navbar')

<body class="bg-blue-400">
    <div class="container">
        <div class="text-center">
            <h1 class="text-3xl md:text-5xl mt-12 text-white">Masukkan Data Anda</h1>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden rounded-md shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form action="{{ url('surat-keterangan-usaha') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="layanan" value="surat keterangan usaha">
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <div class="row d-flex">
                                <div class="col-12 col-md-4 m-2 justify-content-center">
                                    <div class="form-floating">
                                        <input required type="text" name="nama" id="name" placeholder="masukkan nama"
                                            class="form-control rounded">
                                        <label for="name">Nama</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2" id="nik_selector">
                                    <div class="form-floating">
                                        <input required type="text" name="nik" id="nik" placeholder="masukkan nik"
                                            class="form-control rounded">
                                        <label for="nik">NIK</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2" id="jenis_usaha_selector">
                                    <div class="form-floating">
                                        <input required type="text" name="jenis_usaha" id="jenis_usaha" placeholder="masukkan jenis usaha"
                                            class="form-control rounded">
                                        <label for="jenis_usaha">Jenis Usaha</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input required type="text" name="tempat_lahir" id="tempat lahir"
                                                    placeholder="masukkan tempat lahir" class="form-control rounded">
                                                <label for="tempat lahir">Tempat lahir</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input required type="date" name="tanggal_lahir" id="tanggal lahir"
                                                    placeholder="masukkan tanggal lahir" class="form-control rounded">
                                                <label for="tanggal lahir">Tanggal lahir</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <div class="form-floating">
                                        <textarea required name="alamat" id="address" class="w-full rounded" rows="3"
                                            placeholder="Alamat lengkap"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input required type="text" name="rt" id="rt" placeholder="masukkan nik"
                                                    class="form-control rounded">
                                                <label for="rt"> RT</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input required type="text" name="rw" id="rw" placeholder="masukkan nik"
                                                    class="form-control rounded">
                                                <label for="rw"> RW</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <div class="form-floating">
                                        <input required type="text" id="agama" name="agama" placeholder="masukkan agama"
                                            class="form-control rounded">
                                        <label for="agama">Agama</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <input required type="file" id="poto_usaha" name="usaha_img" placeholder="upload poto usaha anda"
                                        class="form-control rounded">
                                    <label for="poto">upload poto usaha anda</label>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <input required type="file" id="ktp upload" name="ktp_img" placeholder="upload ktp"
                                        class="form-control rounded">
                                    <label for="ktp upload">upload KTP</label>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <input required type="file" id="kk upload" name="kk_img" placeholder="upload kk"
                                        class="form-control rounded">
                                    <label for="kk upload">upload Kartu Keluarga</label>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <input required type="file" id="poto" name="pengantar_rt_img" placeholder="upload poto"
                                        class="form-control rounded">
                                    <label for="poto">upload surat pengantar RT</label>
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

</html>
