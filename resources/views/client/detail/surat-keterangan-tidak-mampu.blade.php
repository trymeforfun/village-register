divdiv<div class="container">
    <h2 class="text-xl">Layanan pembuatan {{ $user->layanan }}</h2>
    <h4>Nama : {{ $data->nama }}</h4>
    <h4>Alasan : {{ $data->alasan }}</h4>
    <h4>NIK : {{ $data->nik }}</h4>
    <h4>TTL : {{ $data->tempat_lahir . ' ' . $data->tanggal_lahir }}</h4>
    <h4>Alamat : {{ $data->alamat }}</h4>
    <h4>Nama relasi : {{ $data->nama_relasi }}</h4>
    <h4>Agama : {{ $data->agama }}</h4>
    <h4>Pekerjaan : {{ $data->pekerjaan }}</h4>
<hr>
    <div class="row" style="display: flex">
        <div class="col-md-4 col-6">
            <h5>KK</h5>
            <img src="{{ url($data->kk_img) }}" alt="">
        </div>
        <div class="col-md-4 col-6">
            <h5>KTP</h5>
            <img src="{{ url($data->ktp_img) }}" alt="">
        </div>
        <div class="col-md-4 col-6">
            <h5>Surat Pengantar RT</h5>
            <img src="{{ url($data->pengantar_rt_img) }}" alt="">
        </div>
    </div>
</div>
