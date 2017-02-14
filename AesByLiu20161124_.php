<?php
$privateKey = "1234567812345678";
$iv     = "yCJXKLv4GvySreYK";
$data   ='{"Time_Start":"2016-09-21 00:00:00","Time_end":"2016-09-21 23:59:59","Out_trade_no":"","CustomerName"
:"刘大爷一一一一一一一一一一一一","Pay_Type":"","Customer":"","SystemUserSysNo":2,"PagingInfo":{"PageSize":"10","PageNumber":"0"}}';

//加密
$encrypted = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $privateKey, $data, MCRYPT_MODE_CBC, $iv);
//echo($encrypted);
//echo '<br/>';
echo $de = base64_encode($encrypted);
echo '<br/>';

//解密
$encryptedData = base64_decode($de);
$decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $privateKey, $encryptedData, MCRYPT_MODE_CBC, $iv);
echo($decrypted);


//////////2016/9/212016/9/212016/9/212016/9/21
//
//function hexToStr($hex)       
//{       
//    $bin="";       
//    for($i=0; $i<strlen($hex)-1; $i+=2)       
//    {      
//        $bin.=chr(hexdec($hex[$i].$hex[$i+1]));       
//    }      
//    return $bin;       
//}   
//
//
//function trimEnd($text){      
//    $len = strlen($text);      
//    $c = $text[$len-1];      
//    if(ord($c) <$len){      
//        for($i=$len-ord($c); $i<$len; $i++){      
//            if($text[$i] != $c){      
//                return $text;      
//            }      
//        }      
//        return substr($text, 0, $len-ord($c));      
//    }      
//    return $text;      
//} 
//function pad2Length($text, $padlen){      
//    $len = strlen($text)%$padlen;      
//    $res = $text;      
//    $span = $padlen-$len;      
//    for($i=0; $i<$span; $i++){      
//        $res .= chr($span);      
//    }      
//    return $res;      
//} 
// function PaddingPKCS7 ($data)
//    {
//        $block_size = mcrypt_get_block_size('tripledes', 'cbc');
//        $padding_char = $block_size - (strlen($data) % $block_size);
//        $data .= str_repeat(chr($padding_char), $padding_char);
//        return $data;
//    }
////--------������AES-ECB���ܷ���--------      
//echo '������AES���ܷ���:<br>';      
//$key = '1234567890123456';      
////$key = pad2Length($key,16);   
//$iv = 'yCJXKLv4GvySreYK';      
//echo "ԭ��".'<br>'.$content = 'abcdefghigklmnopqrstuvwxyz0123456789'."<br>";      
//$content = pad2Length($content,16);    
//$AESed =  bin2hex( mcrypt_encrypt(MCRYPT_RIJNDAEL_128,$key,$content,MCRYPT_MODE_CBC,$iv) ); #����      
////$AESed =  bin2hex( mcrypt_encrypt(MCRYPT_RIJNDAEL_256,$key,$content,MCRYPT_MODE_ECB,$iv) ); #����      
////$AESed =  bin2hex( mcrypt_encrypt(MCRYPT_RIJNDAEL_256,$key,$content,MCRYPT_MODE_OFB,$iv) ); #����      
//echo "����:".$AESed.'<br>';      
//$jiemi = mcrypt_decrypt(MCRYPT_RIJNDAEL_128,$key,hexToStr($AESed),MCRYPT_MODE_CBC,$iv); #����      
////$jiemi = mcrypt_decrypt(MCRYPT_RIJNDAEL_256,$key,hexToStr($AESed),MCRYPT_MODE_ECB,$iv); #����      
////$jiemi = mcrypt_decrypt(MCRYPT_RIJNDAEL_256,$key,hexToStr($AESed),MCRYPT_MODE_OFB,$iv); #����      
//echo '����:';      
////echo $jiemi;      
//echo trimEnd($jiemi); 
////--------������AES���ܷ���--------      
//?>