<div>
    <h1 style="color: #6C5840">{{ $data['title'] }}</h1>
</div>

<div style="margin-top: 20px">
    Berikut merupakan data customer yang telah mendaftar pada website.
    <br>
    <br>

    <b>Nama : </b> {{ $data['nama_lengkap'] }}<br>
    <b>Email : </b> {{ $data['email'] }}<br>
    <b>Status : </b> {{ $data['status'] }}<br>
    <b>Nama panggilan : </b> {{ $data['nama_panggilan'] }}<br>
    <b>Telepon : </b> {{ $data['telepon'] }}<br>
    <br>
    <b>Jenis kelamin : </b> {{ $data['jenis_kelamin'] }}<br>
    <b>Agama : </b> {{ $data['agama'] }}<br>
    <b>Alamat : </b> {{ $data['alamat'] }}<br>
    <b>Kota : </b> {{ $data['kota'] }}<br>
    <b>Provinsi : </b> {{ $data['provinsi'] }}<br>
    <br>
    <b>Mengetahui dari : </b>
    @if($data['mengetahui_dari[]']!=null)
    @foreach($data['mengetahui_dari[]'] as $a)
        {{ $a."," }}
    @endforeach
    @endif
    <br>
    <b>Mengikuti atas : </b>
    @if($data['mengetahui_dari[]']!=null)
    @foreach($data['mengikuti_atas[]'] as $b)
        {{ $b."," }}
    @endforeach
    @endif
    <br>
    <b>Hubungan orang tua : </b>
    @if($data['hubungan_orangtua[]']!=null)
    @foreach($data['hubungan_orangtua[]'] as $c)
        {{ $c."," }}
    @endforeach
    @endif
    <br>
    <b>Alasan mengikuti : </b> {{ $data['alasan_mengikuti'] }}<br>
    <b>Dalam penanganan : </b> {{ $data['dalam_penanganan'] }}<br>
    <br>
    <b>Orang tua mengalami : </b> {{ $data['orangtua_mengalami'] }}<br>
    <b>Yakin selesai : </b> {{ $data['yakin_selesai'] }}<br>
    <b>Pernah berkonsultasi : </b>
    @if($data['pernah_berkonsultasi[]']!=null)
    @foreach($data['pernah_berkonsultasi[]'] as $d)
        {{ $d."," }}
    @endforeach
    @endif
    <br>
    <b>Pernah hipnoterapi : </b> {{ $data['pernah_hipnoterapi'] }}<br>
    <b>Perasaan dirasakan : </b>
    @if($data['perasaan_dirasakan[]']!=null)
    @foreach($data['perasaan_dirasakan[]'] as $e)
        {{ $e."," }}
    @endforeach
    @endif
    <br>
    <br>
    <b>Kondisi kesehatan : </b>
    @if($data['kondisi_kesehatan[]']!=null)
    @foreach($data['kondisi_kesehatan[]'] as $f)
        {{ $f."," }}
    @endforeach
    @endif
    <br>
    <b>Mengalami gangguan : </b>
    @if($data['mengalami_gangguan[]']!=null)
    @foreach($data['mengalami_gangguan[]'] as $g)
        {{ $g."," }}
    @endforeach
    @endif
    <br>
    <b>Perubahan diharapkan : </b> {{ $data['perubahan_diharapkan'] }}<br>
    <h1 style="margin-top: 20px; color: #6C5840"><b>Jadwal sesi : {{ $data['jadwal_sesi'] }}</b></h1>
</div>
 