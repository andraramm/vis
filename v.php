=================================== ==========================
Fitur:
- Ubah IP secara otomatis.
- Dukungan Proxy.
- Tambahkan waktu tunda.
- 20 UserAgent.
\ e [1; 31mNB:
* URL harus di awali dengan 'http: // atau https: //'
* Proksi: IP: PORT | Misalkan: 127.0.0.1:80 | atau Kosongi aja! \ e [0m
\ e [1; 35m ============================================ ========================== \ e [0m \ n " ;
cetak  $ banner ;
$ authorceo  =  ' IDSYSTEM404 ' ;
echo  " \ n URL: " ;
$ url  =  trim ( fgets ( STDIN , 1024 )); / * * MANUAL URL $ url = 'URL atau Target'; * * /
echo  " \ n Jumlah: " ;
$ jumlah  =  trim ( fgets ( STDIN , 1024 ));
echo  " \ n Proxy: " ;
$ proxy        =  rtrim ( fgets ( STDIN ));
gema  " \ n " ;
echo  " \ n \ e [1; 35m + ========================= \ e [0m [# \ e [1; 32mPROSES \ e [ 0m #] \ e [1; 35m ========================= + + e [0m \ n " ;
// $ url = 'http: //'.substr (trim ($ url), 1);
untuk ( $ x = 1 ; $ x <= $ jumlah ; $ x ++ ) {
/ * * CURL FUNGSI * * /
$ idsystem404  =  curl_init ();
curl_setopt ( $ idsystem404 , CURLOPT_URL , " https://idsystem404.000webhostapp.com/api/api-autovisitor.php?url= " . $ url );
curl_setopt ( $ idsystem404 , CURLOPT_REFERER , " https://www.google.com " );
curl_setopt ( $ idsystem404 , CURLOPT_HEADER , 0 );
curl_setopt ( $ idsystem404 , CURLOPT_PROXY , $ proxy );
curl_setopt ( $ idsystem404 , CURLOPT_HTTPPROXYTUNNEL , $ proxy );
curl_setopt ( $ idsystem404 , CURLOPT_FOLLOWLOCATION , true );
curl_setopt ( $ idsystem404 , CURLOPT_RETURNTRANSFER , true );
curl_setopt ( $ idsystem404 , CURLOPT_SSL_VERIFYPEER , false );
curl_setopt ( $ idsystem404 , CURLOPT_TIMEOUT , 30 );
curl_setopt ( $ idsystem404 , CURLOPT_ENCODING , " gzip " );
$ exec  =  curl_exec ( $ idsystem404 );
if ( ! curl_errno ( $ idsystem404 )) {
// $ info = curl_getinfo ($ idsystem404, CURLINFO_HTTP_CODE);
$ info  =  curl_getinfo ( $ idsystem404 );
$ ip  =  $ info [ ' primary_ip ' ];
$ port  =  $ info [ ' primary_port ' ];
$ code  =  $ info [ ' http_code ' ];
curl_close ( $ idsystem404 );
	if ( $ exec  ==  " primary_ip " ) {
		$ jumlah  + =  1 ;
		gema  " KESALAHAN " ;
		flush ();
		tidur ( 0 ); / * * Keterlambatan * * /		
	} lain {
		echo  " $ x . [ \ e [1; 31m $ authorceo  \ e [0m] | URL: [ \ e [1; 34m $ url  \ e [0m] [ \ e [1; 33m $ ip : $ port  \ e [0m] [ \ e [1; 92mSUCCESS] \ e [0m \ n " ;
		flush ();
		tidur ( 0 ); / * * Keterlambatan * * /		
	}
}
}
echo  " \ n \ e [1; 31mERROR: Silakan Periksa Koneksi Internet atau Isi Isian di atas dengan benar! \ e [0m \ n " ;
? >
