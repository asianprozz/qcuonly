<?php
$BOT_TOKEN = "1878270846:AAG8V0gX2CiXyiQv5pWmWXtifYbgfJlDPRA";
function rem($delimiters,$string)
{
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}
    function getStr($string, $start, $end) {
        $str = explode($start, $string);
        $str = explode($end, $str[1]);
        return $str[0];
    }

    $update = file_get_contents('php://input');
    $update = json_decode($update, true);
    $userChatId = isset($update["message"]["from"]["id"])?$update["message"]["from"]["id"]:null;
    $userMessages = isset($update["message"]["text"])?$update["message"]["text"]:"Nothing";
    $messageId = isset($update["message"]["message_id"])?$update["message"]["message_id"]:null;
    $typeq = isset($update["message"]["chat"]["type"])?$update["message"]["chat"]["type"]:null;
    $superchatId = isset($update["message"]["chat"]["id"])?$update["message"]["chat"]["id"]:null;
    $isbot = isset($update["message"]["from"]["is_bot"]);
    $isbotfor = isset($update["message"]["forward_from"]["is_bot"]);
    $forwards = isset($update["message"]["forward_from"]);
    $del = isset($update['message']['reply_to_message']['message_id']);
    $dela = isset($update['message']['text']);
    $hex = rand(1,2);
    $mesx = ($messageId + $hex);
    $separadores = array(",",":","'"," ","~","»");
    $explode = rem($separadores,$userMessages);
    $comand = $explode[0];
 #--------------------# IMPORTANT DONT DELETE

 if($comand == "hello"){
     $parameters = array(
         "chat_id" => $userChatId,
         "text" => "Hello Im url shortner <3",
         "parse_mode" => "Markdown"
     );
     send("sendMessage", $parameters);
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
