<?php

namespace src;

class Sales extends Karyawan
{
    public int $pelanggan;
    public int $komisi;
    public function __construct($nip, $nama, $tahunMasuk, $gajiPokok, $pelanggan)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->tahunMasuk = $tahunMasuk;
        $this->gajiPokok = $gajiPokok;
        $this->pelanggan = $pelanggan;
    }

    public function setKomisi()
    {
        return $this->komisi = $this->pelanggan * 50000;
    }

    public function getGajiAkhir()
    {
        $this->gajiAkhir = $this->komisi + $this->gajiPokok;
        return $this->gajiAkhir;
    }

}