<?php
    $dta[0]["NAMA"] = "Mulia";
    $dta[0]["TGL_LHR"] = "2004-04-06";
    $dta[0]["JKEL"] = "P";
    $dta[0]["ALAMAT"] = "JL. Anggrek";
    $dta[0]["HOBI"] = "Koleksi Novel";

    $dta[1]["NAMA"] = "Intan";
    $dta[1]["TGL_LHR"] = "2004-06-14";
    $dta[1]["JKEL"] = "P";
    $dta[1]["ALAMAT"] = "Badung";
    $dta[1]["HOBI"] = "Membaca Novel";

    $dta[2]["NAMA"] = "Jay";
    $dta[2]["TGL_LHR"] = "2002-04-20";
    $dta[2]["JKEL"] = "L";
    $dta[2]["ALAMAT"] = "Badung";
    $dta[2]["HOBI"] = "Membaca Novel";

    $dta[3]["NAMA"] = "Teha";
    $dta[3]["TGL_LHR"] = "2000-04-04";
    $dta[3]["JKEL"] = "L";
    $dta[3]["ALAMAT"] = "Badung";
    $dta[3]["HOBI"] = "Joging";

    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);
?>