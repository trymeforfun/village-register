<div class="container">
    <h2 class="text-xl">Layanan pembuatan {{ $data->layanan }}</h2>
    <h4>Nama : {{ $data->nama }}</h4>
    <h4>Alasan : {{ $data->alasan }}</h4>
    <h4>NIK : {{ $data->nik }}</h4>
    <h4>TTL : {{ $data->tempat_lahir . ' ' . $data->tanggal_lahir }}</h4>
    <h4>Alamat : {{ $data->alamat }}</h4>
    <h4>Status : {{ $data->status }}</h4>
    <h4>Pekerjaan : {{ $data->pekerjaan }}</h4>
    <h4>Agama : {{ $data->agama }}</h4>
<hr>
    <div class="row" style="display: flex">
        <div class="col-md-3 col-6">
            <h5>Poto</h5>
            <img src="{{ url($data->poto) }}" alt="">
        </div>
        <div class="col-md-3 col-6">
            <h5>KK</h5>
            <img src="{{ url($data->kk_img) }}" alt="">
        </div>
        <div class="col-md-3 col-6">
            <h5>TTD</h5>
            <img src="{{ url($data->ttd) }}" alt="">
        </div>
        <div class="col-md-3 col-6">
            <h5>Surat Pengantar RT</h5>
            <img src="{{ url($data->pengantar_rt_img) }}" alt="">
        </div>
    </div>
</div>