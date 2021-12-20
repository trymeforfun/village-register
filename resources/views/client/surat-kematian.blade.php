@include('layouts.client.header')


<body class="bg-blue-400">
    <div class="container">
        <div class="text-center">
            <h1 class="text-3xl md:text-5xl mt-12 text-white">Masukkan Data Anda</h1>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden rounded-md shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form action="" method="post">
                            @csrf
                            <div class="row d-flex">
                                <div class="col-12 col-md-4 m-2 justify-content-center">
                                    <div class="form-floating">
                                        <input required type="text" id="name" placeholder="masukkan nama"
                                            class="form-control rounded">
                                        <label for="name">Nama</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2" id="nik_selector">
                                    <div class="form-floating">
                                        <input required type="text" id="nik" placeholder="masukkan nik"
                                            class="form-control rounded">
                                        <label for="nik">NIK</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input required type="text" id="tempat lahir"
                                                    placeholder="masukkan tempat lahir" class="form-control rounded">
                                                <label for="tempat lahir">Tempat lahir</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input required type="date" id="tanggal lahir"
                                                    placeholder="masukkan tanggal lahir" class="form-control rounded">
                                                <label for="tanggal lahir">Tanggal lahir</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2" id="nik_selector">
                                    <div class="form-floating">
                                        <input required type="datetimelocal" id="tanggal meninggal"
                                            placeholder="masukkan tanggal meninggal" class="form-control rounded">
                                        <label for="tanggal meninggal">Tanggal meninggal</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <div class="form-floating">
                                        <textarea required name="address" id="address" class="w-full rounded" rows="3"
                                            placeholder="Alamat lengkap"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input required type="text" id="rt" placeholder="masukkan nik"
                                                    class="form-control rounded">
                                                <label for="rt"> RT</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input required type="text" id="rw" placeholder="masukkan nik"
                                                    class="form-control rounded">
                                                <label for="rw"> RW</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <div class="form-floating">
                                        <input required type="text" id="agama" placeholder="masukkan agama"
                                            class="form-control rounded">
                                        <label for="agama">Agama</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <div class="form-floating">
                                        <input required type="text" id="pemohon" placeholder="masukkan nama pemohon"
                                            class="form-control rounded">
                                        <label for="pemohon">Nama Pemohon</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <div class="form-floating">
                                        <input required type="text" id="saksi" placeholder="masukkan nama saksi"
                                            class="form-control rounded">
                                        <label for="saksi">Nama Saksi</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <div class="form-floating">
                                        <input required type="file" id="poto" placeholder="upload poto"
                                            class="form-control rounded">
                                        <label for="poto">upload KTP mayit</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <div class="form-floating">
                                        <input required type="file" id="kk upload" placeholder="upload kk"
                                            class="form-control rounded">
                                        <label for="kk upload">upload Kartu Keluarga mayit</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <div class="form-floating">
                                        <input required type="file" id="ttd_pemohon" placeholder="upload ttd pemohon"
                                            class="form-control rounded">
                                        <label for="ttd_pemohon">upload TTD pemohon</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <div class="form-floating">
                                        <input required type="file" id="ttd_saksi" placeholder="upload ttd saksi"
                                            class="form-control rounded">
                                        <label for="ttd_saksi">upload TTD saksi</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-2">
                                    <div class="form-floating">
                                        <input required type="file" id="poto" placeholder="upload poto"
                                            class="form-control rounded">
                                        <label for="poto">upload surat pengantar RT</label>
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
