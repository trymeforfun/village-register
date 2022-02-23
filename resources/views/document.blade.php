<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        padding-top: 10px;
    }

    .container {
        margin-left: 2rem;
        /* margin-top: 20%;  */
        margin-right: 2rem;
    }

    .container .header {
        margin-top: 2rem;
    }

    .container .header #wrapper {
        position: relative;
    }

    .container .header #wrapper img {
        width: 6rem;
        margin-left: 21%;
        margin-top: -0.7rem;
        /* display: inline-block; */
        position: absolute;
    }

    .container .header .tag {
        margin-bottom: 2rem;
        line-height: 0.2rem;
        margin-left: 2rem;
        text-align: center;
    }

    .container .sign {
        display: flex;
        margin-top: 12rem
    }

    .sign1,
    .sign2 {
        position: relative;
    }

    .container .sign .sign1 img {
        width: 12rem;
        position: absolute
    }

    .container .sign .sign2 img {
        width: 12rem;
        position: absolute;
        margin-left: 80%
    }

</style>

<body>
    <div class="container">
        <div class="header">
            {{-- @dd(url('logo.png')) --}}
            <div id="wrapper">
                <img src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('img/logo.png'))) }}"
                    alt="">
            </div>
            <div class="tag">
                <h4>PEMERINTAH KOTA TANGERANG</h4>
                <h3>KECAMATAN TANGERANG</h3>
                <h2>KELURAHAN TANAH TINGGI</h2>
                <p>Jl. Meteorologi No. 26 Telp. (021) 9204975, Tangerang</p>
            </div>
        </div>
        <hr>
        <hr>
        <center>
            <h1>Surat Pembuatan {{ strtoupper($data->layanan) }}</h1>
        </center>
        @if ($data->layanan == 'ktp')
            <h3>Nama : {{ $data->nama }}</h3>
            <h3>Alasan : {{ $data->alasan }}</h3>
            <h3>NIK : {{ $data->nik }}</h3>
            <h3>Ttl : {{ $data->tempat_lahir . ' ' . $data->tanggal_lahir }}</h3>
            <h3>Alamat : {{ $data->alamat }}</h3>
            <h3>Pekerjaan : {{ $data->pekerjaan }}</h3>
            <h3>Agama : {{ $data->agama }}</h3>
            <h3>Status : {{ $data->status }}</h3>
            <br><br><br>
        @elseif($data->layanan == 'kk')
            <h3>Nama : {{ $data->nama }}</h3>
            <h3>Nama Kepala Keluarga : {{ $data->nama_kepala_keluarga }}</h3>
            <h3>No KK Lama : {{ $data->no_kk_lama }}</h3>
            <h3>NIK : {{ $data->nik }}</h3>
            <h3>TTL : {{ $data->tempat_lahir . ' ' . $data->tanggal_lahir }}</h3>
            <h3>Alamat : {{ $data->alamat }}</h3>
            <h3>Daftar Anggota Keluarga</h3>
            @forelse (json_decode($data->data_anggota_keluarga) as $item)
                <h3>Nama : {{ $item->nama ?? '' }}</h3>
            @empty
                <h3 class="text-gray:300">Data tidak ditemukan</h3>
            @endforelse
        @elseif($data->layanan == 'surat domisili')
            <h3>Nama : {{ $data->nama }}</h3>
            <h3>NIK : {{ $data->nik }}</h3>
            <h3>TTL : {{ $data->tempat_lahir . ' ' . $data->tanggal_lahir }}</h3>
            <h3>Alamat : {{ $data->alamat }}</h3>
            <h3>Agama : {{ $data->agama }}</h3>
        @elseif($data->layanan == 'surat kematian')
            <h3>Nama : {{ $data->nama }}</h3>
            <h3>NIK : {{ $data->nik }}</h3>
            <h3>TTL : {{ $data->tempat_lahir . ' ' . $data->tanggal_lahir }}</h3>
            <h3>Tanggal Wafat : {{ $data->tanggal_wafat }}</h3>
            <h3>Alamat : {{ $data->alamat }}</h3>
            <h3>Pemohon : {{ $data->pemohon }}</h3>
            <h3>Saksi : {{ $data->saksi }}</h3>
        @elseif($data->layanan == 'surat pindah')
            <h3>Nama : {{ $data->nama }}</h3>
            <h3>Nama Kepala Keluarga : {{ $data->nama_kepala_keluarga }}</h3>
            <h3>NIK : {{ $data->nik }}</h3>
            <h3>NIK Kepala Keluarga : {{ $data->nik_kepala_keluarga }}</h3>
            <h3>Alamat : {{ $data->alamat }}</h3>
            <h3>Alamat Tujuan : {{ $data->alamat_tujuan }}</h3>
            <h3>Daftar Anggota Keluarga</h3>
            @forelse (json_decode($data->data_anggota_keluarga) as $item)
                <h3>Nama : {{ $item->nama ?? '' }}</h3>
            @empty
                <h3 class="text-gray:300">Data tidak ditemukan</h3>
            @endforelse
        @elseif($data->layanan == 'surat keterangan tidak mampu')
            <h3>Nama : {{ $data->nama }}</h3>
            <h3>Alasan : {{ $data->alasan }}</h3>
            <h3>NIK : {{ $data->nik }}</h3>
            <h3>TTL : {{ $data->tempat_lahir . ' ' . $data->tanggal_lahir }}</h3>
            <h3>Alamat : {{ $data->alamat }}</h3>
            <h3>Nama relasi : {{ $data->nama_relasi }}</h3>
            <h3>Agama : {{ $data->agama }}</h3>
            <h3>Pekerjaan : {{ $data->pekerjaan }}</h3>
        @elseif($data->layanan == 'surat keterangan usaha')
            <h3>Nama : {{ $data->nama }}</h3>
            <h3>Jenis Usaha : {{ $data->jenis_usaha }}</h3>
            <h3>NIK : {{ $data->nik }}</h3>
            <h3>TTL : {{ $data->tempat_lahir . ' ' . $data->tanggal_lahir }}</h3>
            <h3>Alamat : {{ $data->alamat }}</h3>
            <h3>Agama : {{ $data->agama }}</h3>
        @endif
        <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat ad molestias quam dolor aperiam
            animi vitae dolore praesentium? Exercitationem voluptate architecto repudiandae alias, iure similique
            nemo neque explicabo nihil ducimus omnis quae cum itaque facere quos dicta esse reiciendis optio
            blanditiis voluptates ratione sint recusandae temporibus? Quos, eos rem! Porro.
        </span>
        <br><br>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia molestias et nulla placeat? Aliquam
            recusandae autem quidem pariatur cumque. Perspiciatis, numquam ea. Deleniti, officia. Ipsum tenetur
            animi possimus dolores. Dolore.
        </span>
        <div class="sign">
            <div class="sign1">
                {{-- <img src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('img/sign1.jpeg'))) }}"
                    alt=""> --}}
            </div>
            <div class="sign2">
                <img src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('img/ttd pdf.png'))) }}"
                    alt="">
            </div>
        </div>
    </div>
</body>

</html>
