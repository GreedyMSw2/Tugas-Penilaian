<?php
    function hitungRataRata($nilai) {
        $total = array_sum($nilai);
        $jumlah_nilai = count($nilai);
        $rata_rata = $total / $jumlah_nilai;
        return round($rata_rata, 2);
    };

    function cekKelulusan($rata_rata) {
        if ($rata_rata >= 80) {
            $status = "Lulus Sangat Baik";
        } elseif ($rata_rata >= 75) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }
        return $status;
    }