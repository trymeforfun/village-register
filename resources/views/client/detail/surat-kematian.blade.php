<div class="container">
    <h2 class="text-xl">Layanan pembuatan {{ $user->layanan }}</h2>
    <h4>Nama : {{ $data->nama }}</h4>
    <h4>NIK : {{ $data->nik }}</h4>
    <h4>TTL : {{ $data->tempat_lahir . ' ' . $data->tanggal_lahir }}</h4>
    <h4>Tanggal Wafat : {{ $data->tanggal_wafat }}</h4>
    <h4>Alamat : {{ $data->alamat }}</h4>
    <h4>Pemohon : {{ $data->pemohon }}</h4>
    <h4>Saksi : {{ $data->saksi }}</h4>
<hr>
    <div class="row" style="display: flex">
        <div class="col-md-4 col-6">
            <h5>KTP Mayat</h5>
            <img src="{{ url($data->ktp_mayat_img) }}" alt="">
        </div>
        <div class="col-md-4 col-6">
            <h5>KK Mayat</h5>
            <img src="{{ url($data->kk_mayat_img) }}" alt="">
        </div>
        <div class="col-md-4 col-6">
            <h5>TTD Pemohon</h5>
            <img src="{{ url($data->ttd_pemohon) }}" alt="">
        </div>
        <div class="col-md-4 col-6">
            <h5>TTD Saksi</h5>
            <img src="{{ url($data->ttd_saksi) }}" alt="">
        </div>
        <div class="col-md-4 col-6">
            <h5>Surat Pengantar RT</h5>
            <img src="{{ url($data->pengantar_rt_img) }}" alt="">
        </div>
    </div>
</div>