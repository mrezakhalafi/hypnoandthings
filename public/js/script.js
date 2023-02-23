$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scroll-top').fadeIn();
        } else {
            $('.scroll-top').fadeOut();
        }
    });

    $('.scroll-top').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 100);
        return false;
    });
});

$(".btn-registrasi").click(function () {
    $('html, body').animate({
        scrollTop: $(".section-form").offset().top
    }, 0);
});

$("#features").click(function () {
    $('html, body').animate({
        scrollTop: $(".hk-features").offset().top - 100
    }, 0);
});

$("#about").click(function () {
    $('html, body').animate({
        scrollTop: $(".section-about").offset().top - 100
    }, 0);
});

$("#services").click(function () {
    $('html, body').animate({
        scrollTop: $(".section-services").offset().top - 100
    }, 0);
});

$("#testimonials").click(function () {
    $('html, body').animate({
        scrollTop: $(".section-testimonials").offset().top - 100
    }, 0);
});

$("#contact").click(function () {
    $('html, body').animate({
        scrollTop: $(".section-contact").offset().top - 100
    }, 0);
});

$("#reset").click(function () {
    $('#nama_lengkap').val('');
    $('#email').val('');
    $("#status").val('Pilih Status');
    $("#kondisi_keluarga").val('Pilih Kondisi');
    $('#nama_panggilan').val('');
    $('#telepon').val('');
    $("#jenis_kelamin").val('Pilih Jenis Kelamin');
    $('#agama').val('');
    $('#alamat').val('');
    $('#kota').val('');
    $('#provinsi').val('');

    $('#mengetahui_dari_google').attr('checked', false);
    $('#mengetahui_dari_referensi').attr('checked', false);
    $('#mengetahui_dari_workshop').attr('checked', false);
    $('#mengikuti_atas_sendiri').attr('checked', false);
    $('#mengikuti_atas_alasan_lain').attr('checked', false);
    $('#mengikuti_atas_orang_lain').attr('checked', false);
    $('#hubungan_orangtua_baik').attr('checked', false);
    $('#hubungan_orangtua_cukupbaik').attr('checked', false);
    $('#hubungan_orangtua_buruk').attr('checked', false);

    $('#alasan_mengikuti').val('');
    $('#dalam_penanganan_iya').attr('checked', false);
    $('#dalam_penanganan_tidak').attr('checked', false);
    $('#jadwal_sesi').val('');

    $('#orangtua_mengalami_pernah').attr('checked', false);
    $('#orangtua_mengalami_tidak').attr('checked', false);
    $('#orangtua_mengalami_tidaktahu').attr('checked', false);
    $('#yakin_selesai_yakin').attr('checked', false);
    $('#yakin_selesai_ragu').attr('checked', false);
    $('#yakin_selesai_tidak').attr('checked', false);

    $('#pernah_berkonsultasi_dokter').attr('checked', false);
    $('#pernah_berkonsultasi_psikolog').attr('checked', false);
    $('#pernah_berkonsultasi_hipnoterapis').attr('checked', false);
    $('#pernah_berkonsultasi_psikiater').attr('checked', false);
    $('#pernah_berkonsultasi_konselor').attr('checked', false);
    $('#pernah_berkonsultasi_lainnya').attr('checked', false);

    $('#pernah_hipnoterapi_pernah').attr('checked', false);
    $('#pernah_hipnoterapi_belum').attr('checked', false);

    $('#perasaan_dirasakan_marah').attr('checked', false);
    $('#perasaan_dirasakan_dendam').attr('checked', false);
    $('#perasaan_dirasakan_benci').attr('checked', false);
    $('#perasaan_dirasakan_takut').attr('checked', false);
    $('#perasaan_dirasakan_kesepian').attr('checked', false);
    $('#perasaan_dirasakan_merasa_putus_asa').attr('checked', false);
    $('#perasaan_dirasakan_merasa_tidak_diinginkan').attr('checked', false);
    $('#perasaan_dirasakan_kecewa').attr('checked', false);
    $('#perasaan_dirasakan_sakit_hati').attr('checked', false);
    $('#perasaan_dirasakan_menyesal').attr('checked', false);
    $('#perasaan_dirasakan_cemas').attr('checked', false);
    $('#perasaan_dirasakan_sedih').attr('checked', false);
    $('#perasaan_dirasakan_merasa_tidak_bahagia').attr('checked', false);
    $('#perasaan_dirasakan_terluka').attr('checked', false);
    $('#perasaan_dirasakan_tersinggung').attr('checked', false);
    $('#perasaan_dirasakan_frustasi').attr('checked', false);
    $('#perasaan_dirasakan_malu').attr('checked', false);
    $('#perasaan_dirasakan_merasa_tidak_mampu').attr('checked', false);
    $('#perasaan_dirasakan_merasa_kecil').attr('checked', false);

    $('#kondisi_kesehatan_jantung').attr('checked', false);
    $('#kondisi_kesehatan_stroke').attr('checked', false);
    $('#kondisi_kesehatan_hipertensi').attr('checked', false);
    $('#kondisi_kesehatan_kehamilan').attr('checked', false);
    $('#kondisi_kesehatan_cerebral_palsy').attr('checked', false);
    $('#kondisi_kesehatan_merasa_tidak_diinginkan').attr('checked', false);
    $('#kondisi_kesehatan_diabetes').attr('checked', false);
    $('#kondisi_kesehatan_epilepsi').attr('checked', false);
    $('#kondisi_kesehatan_hipotensi').attr('checked', false);
    $('#kondisi_kesehatan_asma').attr('checked', false);
    $('#kondisi_kesehatan_sedih').attr('checked', false);
    $('#kondisi_kesehatan_tidakada_tidaktahu').attr('checked', false);

    $('#mengalami_gangguan_sinus').attr('checked', false);
    $('#mengalami_gangguan_leher_belakang_kaku').attr('checked', false);
    $('#mengalami_gangguan_pundak_kaku').attr('checked', false);
    $('#mengalami_gangguan_punggung_bawah_pinggang_kaku').attr('checked', false);
    $('#mengalami_gangguan_kram').attr('checked', false);
    $('#mengalami_gangguan_sembelit').attr('checked', false);
    $('#mengalami_gangguan_tangan_dingin').attr('checked', false);
    $('#mengalami_gangguan_kaki_kaku').attr('checked', false);
    $('#mengalami_gangguan_sakit_kepala_sebelah').attr('checked', false);
    $('#mengalami_gangguan_sariawan_gusi_luka').attr('checked', false);
    $('#mengalami_gangguan_punggung_atas_kaku').attr('checked', false);
    $('#mengalami_gangguan_kram_saat_menstruasi').attr('checked', false);
    $('#mengalami_gangguan_kaku_pada_tangan_persendian').attr('checked', false);
    $('#mengalami_gangguan_asam_lambung_berlebih').attr('checked', false);
    $('#mengalami_gangguan_kaki_dingin').attr('checked', false);
    $('#mengalami_gangguan_kaki_bengkak').attr('checked', false);

    $('#perubahan_diharapkan').val('');
    $('#jawdal_sesi').val('');
});

$(".nav-link").on("mouseenter", function (e) {
    $(".nav-link").removeClass("nav-aktif");
    $(this).addClass("nav-aktif");
});

$(function () {
    $(".datepicker").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
});
