<?php
function xTimeAgo ($oldTime, $newTime, $timeType) {
        $timeCalc = strtotime($newTime) - strtotime($oldTime);        
        if ($timeType == "x") {
            if ($timeCalc = 60) {
                $timeType = "m";
            }
            if ($timeCalc = (60*60)) {
                $timeType = "h";
            }
            if ($timeCalc = (60*60*24)) {
                $timeType = "d";
            }
        }        
        if ($timeType == "s") {
            $timeCalc .= " detik yang lalu";
        }
        if ($timeType == "m") {
            $timeCalc = round($timeCalc/60) . " menit yang lalu";
        }        
        if ($timeType == "h") {
            $timeCalc = round($timeCalc/60/60) . " jam yang lalu";
        }
        if ($timeType == "d") {
            $timeCalc = round($timeCalc/60/60/24) . " hari yang lalu";
        }
        if ($timeType == "b") {
            $timeCalc = round($timeCalc/60/60/24/30) . " bulan yang lalu";
        } 
        if ($timeType == "t") {
            $timeCalc = round($timeCalc/60/60/24/30/12) . " tahun yang lalu";
        }        
        return $timeCalc;
    }
    
function timeAgo($timestamp){
    date_default_timezone_set('Asia/Jakarta');
    $skrg=date("Y-m-d H:i:s");
    $isi= str_replace("-","",xTimeAgo($skrg,$timestamp,"m"));
    $isi2= str_replace("-","",xTimeAgo($skrg,$timestamp,"h"));
    $isi3= str_replace("-","",xTimeAgo($skrg,$timestamp,"d"));
    $isi4= str_replace("-","",xTimeAgo($skrg,$timestamp,"b"));
    $isi5= str_replace("-","",xTimeAgo($skrg,$timestamp,"t"));
    $go="";

    if ($isi4>12) 
    {
        $go=$isi5;
    }
    elseif ($isi3>30) 
    {
        $go=$isi4;
    }
    elseif($isi2 > 24)
    {
        $go=$isi3;
    }elseif($isi > 60)
    {
        $go=$isi2;
    }else
    {
        $go=$isi;
    }
    return $go;
}