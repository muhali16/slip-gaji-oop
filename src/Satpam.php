<?php

namespace src;

class Satpam extends Karyawan
{
    public int $jamLembur;
    public int $honorLembur;
    public function __construct($nip, $nama, $tahunMasuk, $gajiPokok, $jamLembur)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->tahunMasuk = $tahunMasuk;
        $this->gajiPokok = $gajiPokok;
        $this->jamLembur = $jamLembur;
    }

    public function setHonorLembur()
    {
        return $this->honorLembur = $this->jamLembur * 50000;
    }

    public function getGajiAkhir()
    {
        $this->gajiAkhir = $this->honorLembur + $this->gajiPokok;
        return $this->gajiAkhir;
    }
}