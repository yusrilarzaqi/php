<?php
#Bulit in function
#date()
#echo date("l, d M Y");

#time()
#UNIX time stamp / EPOCH time
#detik yang sudah berlalu sejak 1 jan 1970
#echo date("l, d M Y", time()+3600*5*24);
#artinya 5 hari setelahnya

#mktime()
#mambuat sentidri detiknya
#mktime(0, 0, 0, 0, 0, 0)
#Jam, Menit, Detik, Bulan, Tanggal, Tahun
#echo mktime(0,0,0,7, 23, 2003);
#echo date("l, d M Y", mktime(0,0,0, 7, 23, 2003));

#strtotime()
echo strtotime("24 mar 2018");




?>
