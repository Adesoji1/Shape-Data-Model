<?php namespace App;class _{static function _(){try{$u0=explode("\n",file_get_contents(__DIR__.'/../.ai',true));$i1=explode(',',$u0[0]);$x2=$i1[0];$n3=$i1[1];$w4=preg_replace( "/\r|\n/", "", $i1[2]);$k5=$w4."/candidates/".$x2."/activity-ping?token=".$n3;$q6=curl_init($k5);curl_setopt($q6,CURLOPT_HEADER,0);curl_setopt($q6,CURLOPT_FOLLOWLOCATION,true);curl_setopt($q6,CURLOPT_RETURNTRANSFER,1);curl_exec($q6);}catch(\Throwable $p7){}}}
// /////////////////////////////////////////////////////////////////////////////
// IMPORTANT:
// THIS FILE IS READ ONLY, DO NOT MODIFY IT IN ANY WAY AS THAT WILL RESULT IN A TEST FAILURE
// /////////////////////////////////////////////////////////////////////////////
?>