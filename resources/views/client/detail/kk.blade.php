<div class="container">
    <h2 class="text-xl">Layanan pembuatan {{ $data->layanan }}</h2>
    <h4>Nama : {{ $data->nama }}</h4>
    <h4>Nama Kepala Keluarga : {{ $data->nama_kepala_keluarga }}</h4>
    <h4>No KK Lama : {{ $data->no_kk_lama }}</h4>
    <h4>NIK : {{ $data->nik }}</h4>
    <h4>TTL : {{ $data->tempat_lahir . ' ' . $data->tanggal_lahir }}</h4>
    <h4>Alamat : {{ $data->alamat }}</h4>
    <h4>Daftar Anggota Keluarga</h4>
    @forelse ($data->data_anggota_keluarga as $item)
        <h4>Nama : {{ $item->nama ?? '' }}</h4>
    @empty
        <h4 class="text-gray:300">Data tidak ditemukan</h4>
    @endforelse
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
            <h5>KTP</h5>
            <img src="{{ url($data->ktp_img) }}" alt="">
        </div>
        <div class="col-md-3 col-6">
            <h5>Pengantar RT</h5>
            <img src="{{ url($data->pengantar_rt_img) }}" alt="">
        </div>
    </div>
</div>
