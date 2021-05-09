<?php
$BOT_TOKEN = "1635058710:AAHdNFcBjTQicJhOnpJn5V0PzZFHt8CqpSg";
//removing uncessary details
function rem($delimiters,$string)
{
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

//getting string from string
function getStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

$update = file_get_contents('php://input');
$update = json_decode($update, true);
$userChatId = $update["message"]["from"]["id"]?$update["message"]["from"]["id"]:null;
$userMessage = $update["message"]["text"]?$update["message"]["text"]:null;
$messageId = $update["message"]["message_id"]?$update["message"]["message_id"]:null;
$typeq = $update["message"]["chat"]["type"]?$update["message"]["chat"]["type"]:null;
$superchatId = $update["message"]["chat"]["id"]?$update["message"]["chat"]["id"]:null;
$separadores = array(" ");
$explode = rem($separadores,$userMessage);
$comand = $explode[0];
$cmd1 = $explode[1];
//example /short https://facebook.com


if($comand == "/short"){
    $link = urlencode($cmd1);
    $curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.asianprozibot.xyz/stripe/includes/rel.php');
curl_setopt($curl, CURLOPT_USERAGENT, $user_agent);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'referer: https://www.asianprozibot.xyz/stripe/',
'x-requested-with: XMLHttpRequest'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
curl_setopt($curl, CURLOPT_POSTFIELDS, 'url='.$link.'');
$urls = curl_exec($curl);

    $params = array(
        "chat_id" => $userChatId,
        "text" => "Here is your shortner link => ". $urls,
        "parse_mode" => "Markdown"
    );
    send("sendMessage", $params);
}

function send($method, $data){
    global $BOT_TOKEN;
    $url = "https://api.telegram.org/bot$BOT_TOKEN/$method";

    if(!$curld = curl_init()){
        exit;
    }
    curl_setopt($curld, CURLOPT_POST, true);
    curl_setopt($curld, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curld, CURLOPT_URL, $url);
    curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($curld);
    curl_close($curld);
    return $output;
}


?>
