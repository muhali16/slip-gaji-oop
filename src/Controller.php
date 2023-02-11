<?php
namespace src;

require_once "init.php";
class Controller
{
    public function Satpam($nip, $nama, $tahunMasuk, $gajiPokok, $jamLembur, $jabatan)
    {
        $satpam = new Satpam($nip, $nama, $tahunMasuk, $gajiPokok, $jamLembur);
        $satpam->setHonorLembur();
        $satpam->getGajiAkhir();

        $contents = "
        SLIP GAJI KARYAWAN
        PT Agro Industri
        ------------------------------------------
        Nama         : $satpam->nama
        NIP          : $satpam->nip
        Jabatan      : $jabatan
        Jam Lembur   : $satpam->jamLembur
        Honor Lembur : $satpam->honorLembur
        Gaji Pokok   : $satpam->gajiPokok
        Gaji Akhir   : $satpam->gajiAkhir
       
        TTD
        Manajemen
        PT Agro Industri
        ";
        $file = 'public/slip/' . generateRandomString(20) . ".txt";
        try {
            $process = file_put_contents($file, $contents, FILE_APPEND);
        } catch (\Exception $error) {
            echo $error->getMessage();
            die;
        }
    }

    public function Sales($nip, $nama, $tahunMasuk, $gajiPokok, $pelanggan, $jabatan)
    {
        $satpam = new Sales($nip, $nama, $tahunMasuk, $gajiPokok, $pelanggan);
        $satpam->setKomisi();
        $satpam->getGajiAkhir();

        $contents = "
        SLIP GAJI KARYAWAN
        PT Agro Industri
        ------------------------------------------
        Nama         : $satpam->nama
        NIP          : $satpam->nip
        Jabatan      : $jabatan
        Pelanggan    : $satpam->pelanggan
        Komisi       : $satpam->komisi
        Gaji Pokok   : $satpam->gajiPokok
        Gaji Akhir   : $satpam->gajiAkhir
       
        TTD
        Manajemen
        PT Agro Industri
        ";
        $file = 'public/slip/' . generateRandomString(20) . ".txt";
        try {
            $process = file_put_contents($file, $contents, FILE_APPEND);
        } catch (\Exception $error) {
            echo $error->getMessage();
            die;
        }
    }

    public function Administrasi($nip, $nama, $tahunMasuk, $gajiPokok, $lamaKerja, $jabatan)
    {
        $satpam = new Administrasi($nip, $nama, $tahunMasuk, $gajiPokok, $lamaKerja);
        $satpam->setTunjangan();
        $satpam->getGajiAkhir();

        $contents = "
        SLIP GAJI KARYAWAN
        PT Agro Industri
        ------------------------------------------
        Nama         : $satpam->nama
        NIP          : $satpam->nip
        Jabatan      : $jabatan
        Lama Kerja   : $satpam->lamaKerja
        Tunjangan    : $satpam->tunjangan
        Gaji Pokok   : $satpam->gajiPokok
        Gaji Akhir   : $satpam->gajiAkhir
       
        TTD
        Manajemen
        PT Agro Industri
        ";
        $file = 'public/slip/' . generateRandomString(20) . ".txt";
        try {
            $process = file_put_contents($file, $contents, FILE_APPEND);
        } catch (\Exception $error) {
            echo $error->getMessage();
            die;
        }
    }

    public function Manajer($nip, $nama, $tahunMasuk, $gajiPokok, $presentasePeningkatan, $jabatan)
    {
        $satpam = new Manajer($nip, $nama, $tahunMasuk, $gajiPokok, $presentasePeningkatan);
        $satpam->setBonus();
        $satpam->getGajiAkhir();

        $contents = "
        SLIP GAJI KARYAWAN
        PT Agro Industri
        ------------------------------------------
        Nama         : $satpam->nama
        NIP          : $satpam->nip
        Jabatan      : $jabatan
        Lama Kerja   : $satpam->presentasePeningkatan
        Bonus        : $satpam->bonus
        Gaji Pokok   : $satpam->gajiPokok
        Gaji Akhir   : $satpam->gajiAkhir
       
        TTD
        Manajemen
        PT Agro Industri
        ";
        $file = 'public/slip/' . generateRandomString(20) . ".txt";
        try {
            $process = file_put_contents($file, $contents, FILE_APPEND);
        } catch (\Exception $error) {
            echo $error->getMessage();
            die;
        }
    }
}