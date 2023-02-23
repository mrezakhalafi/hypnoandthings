<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class KirimEmailController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function kirim(Request $request)
    {

        Request()->validate([
            'nama_lengkap' => 'required',
            'email' => 'required',
            'status' => 'required',
            'kondisi_keluarga' => 'required',
            'nama_panggilan' => 'required',
            'telepon' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'provinsi' => 'required'
        ],[
            'nama_lengkap.required' => 'Nama lengkap harus diisi',
            'email.required' => 'Email harus diisi',
            'status.required' => 'Status harus diisi',
            'kondisi_keluarga.required' => 'Kondisi Keluarga harus diisi',
            'nama_panggilan.required' => 'Nama Panggilan harus diisi',
            'telepon.required' => 'Telepon harus diisi',
            'jenis_kelamin.required' => 'Jenis Kelamin harus diisi',
            'agama.required' => 'Agama harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'kota.required' => 'Kota harus diisi',
            'provinsi.required' => 'Provinsi harus diisi'
        ]);

        $email = 'mrezakhalafi@yahoo.com';
        $data = [
            'title' => 'Registrasi Customer Baru!',
            'nama_lengkap' => $request->input('nama_lengkap'),
            'email' => $request->input('email'),
            'status' => $request->input('status'),
            'nama_panggilan' => $request->input('nama_panggilan'),
            'telepon' => "0".$request->input('telepon'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'agama' => $request->input('agama'),
            'alamat' => $request->input('alamat'),
            'kota' => $request->input('kota'),
            'provinsi' => $request->input('provinsi'),
            'mengetahui_dari[]' => $request->input('mengetahui_dari'),
            'mengikuti_atas[]' => $request->input('mengikuti_atas'),
            'hubungan_orangtua[]' => $request->input('hubungan_orangtua'),
            'alasan_mengikuti' => $request->input('alasan_mengikuti'),
            'dalam_penanganan' => $request->input('dalam_penanganan'),
            'orangtua_mengalami' => $request->input('orangtua_mengalami'),
            'yakin_selesai' => $request->input('yakin_selesai'),
            'pernah_berkonsultasi[]' => $request->input('pernah_berkonsultasi'),
            'pernah_hipnoterapi' => $request->input('pernah_hipnoterapi'),
            'perasaan_dirasakan[]' => $request->input('perasaan_dirasakan'),
            'kondisi_kesehatan[]' => $request->input('kondisi_kesehatan'),
            'mengalami_gangguan[]' => $request->input('mengalami_gangguan'),
            'perubahan_diharapkan' => $request->input('perubahan_diharapkan'),
            'jadwal_sesi' => $request->input('jadwal_sesi')
        ];
        Mail::to($email)->send(new SendMail($data));

        return redirect()->route('home')->with('pesan','Anda berhasil melakukan registrasi! mohon menunggu dalam kurun waktu 1x24 jam, kami akan segera menghubungi anda.');
    }
}
