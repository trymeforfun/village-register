@include('layouts.client.header')
@include('layouts.client.navbar')
<body class="bg-blue-400" style="background-image: url('img/img2.jpeg')">
    <div class="container">
        <div class="text-center">
            <h1 class="text-3xl md:text-5xl mt-12 text-white ">Masukkan Data Anda</h1>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white opacity-90 overflow-hidden rounded-md shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form action="{{ url('ktp') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <input type="hidden" name="layanan" value="ktp">
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <div class="row d-flex">
                                <div class="col-12 col-md-4 m-2">
                                    <div class="">
                                        <select required onchange="pilihAlasan()" name="alasan" id="alasan"
                                            class="rounded py-1 w-full border-current text-center px-4 mt-1 text-sm">
                                            <option>-- Alasan pembuatan KTP --</option>
                                            <option value="baru">Buat KTP baru</option>
                                            <option value="perbarui">Perbarui KTP</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2 justify-content-center">
                                    <div class="form-floating">
                                        <input required type="text" id="name" name="nama" placeholder="masukkan nama"
                                            class="form-control rounded">
                                        <label for="name">Nama</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2" id="nik_selector">
                                    <div class="form-floating">
                                        <input type="text" id="nik" name="nik" placeholder="masukkan nik"
                                            class="form-control rounded">
                                        <label for="nik">NIK</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input required type="text" id="tempat lahir"
                                                    placeholder="masukkan tempat lahir" name="tempat_lahir" class="form-control rounded">
                                                <label for="tempat lahir">Tempat lahir</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input required type="date" id="tanggal lahir"
                                                    placeholder="masukkan tanggal lahir" name="tanggal_lahir" class="form-control rounded">
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
                                    <select required name="status" id="status"
                                        class="rounded py-1 w-full border-current text-center px-4 mt-1 text-sm">
                                        <option>-- Status perkawinan --</option>
                                        <option value="menikah">Menikah</option>
                                        <option value="belum menikah">Belum Menikah</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <div class="form-floating">
                                        <input required type="text" name="pekerjaan" id="pekerjaan" placeholder="masukkan pekerjaan"
                                            class="form-control rounded">
                                        <label for="pekerjaan">Pekerjaan</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <div class="form-floating">
                                        <input required type="text" name="agama" id="agama" placeholder="masukkan agama"
                                            class="form-control rounded">
                                        <label for="agama">Agama</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <input required type="file" name="poto" id="poto" placeholder="upload poto"
                                        class="form-control rounded">
                                    <label for="poto">upload poto anda</label>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <input required type="file" id="ttd" name="ttd" placeholder="upload ttd"
                                        class="form-control rounded">
                                    <label for="ttd">upload ttd anda</label>
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

<script>
    function pilihAlasan(params) {
        var x = document.getElementById("alasan").value;
        if (x == 'baru') {
            document.getElementById('nik_selector').style.display = 'none'
        } else {
            document.getElementById('nik_selector').style.display = 'block'
        }
    }
</script>

</html>
