<?php

namespace src;

class Administrasi extends Karyawan
{
    public int $lamaKerja;
    public int $tunjangan;
    public function __construct($nip, $nama, $tahunMasuk, $gajiPokok, $lamaKerja)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->tahunMasuk = $tahunMasuk;
        $this->gajiPokok = $gajiPokok;
        $this->lamaKerja = $lamaKerja;
    }

    public function setTunjangan()
    {
        return $this->tunjangan = match (true) {
            $this->lamaKerja >= 5 => $this->gajiPokok * 0.03,
            $this->lamaKerja >= 3 => $this->gajiPokok * 0.01,
            $this->lamaKerja < 3 => 0,
        };
    }

    public function getGajiAkhir()
    {
        $this->gajiAkhir = $this->tunjangan + $this->gajiPokok;
        return $this->gajiAkhir;
    }
}