<?php

namespace src;

class Manajer extends Karyawan
{
    public int $presentasePeningkatan;
    public int $bonus;
    public function __construct($nip, $nama, $tahunMasuk, $gajiPokok, $presentasePeningkatan)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->tahunMasuk = $tahunMasuk;
        $this->gajiPokok = $gajiPokok;
        $this->presentasePeningkatan = $presentasePeningkatan;
    }

    public function setBonus()
    {
        return $this->bonus = match (true) {
            $this->presentasePeningkatan >= 10 => $this->gajiPokok * 0.1,
            $this->presentasePeningkatan >= 6 => $this->gajiPokok * 0.05,
            $this->presentasePeningkatan >= 1 => $this->gajiPokok * 0.02,
            $this->presentasePeningkatan < 1 => $this->gajiPokok * 0,
        };
    }

    public function getGajiAkhir()
    {
        return $this->gajiAkhir = $this->bonus + $this->gajiPokok;
    }
}