<?php
    $dta["NAMA"] = "Mulia";
    $dta["TGL_LHR"] = "2004-04-06";
    $dta["JKEL"] = "P";
    $dta["ALAMAT"] = "JL. Anggrek";
    $dta["HOBI"] = "Koleksi Novel";

    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);
?>