<div class="container">
    <h2 class="text-xl">Layanan pembuatan {{ $user->layanan }}</h2>
    <h4>Nama : {{ $data->nama }}</h4>
    <h4>Nama Kepala Keluarga : {{ $data->nama_kepala_keluarga }}</h4>
    <h4>NIK : {{ $data->nik }}</h4>
    <h4>NIK Kepala Keluarga : {{ $data->nik_kepala_keluarga }}</h4>
    <h4>Alamat : {{ $data->alamat }}</h4>
    <h4>Alamat Tujuan : {{ $data->alamat_tujuan }}</h4>
    <h4>Daftar Anggota Keluarga</h4>
    @forelse (json_decode($data->data_anggota_keluarga) as $item)
        <h4>Nama : {{ $item->nama ?? '' }}</h4>
    @empty
        <h4 class="text-gray:300">Data tidak ditemukan</h4>
    @endforelse
<hr>    
    <div class="row " style="display: flex">
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
