<?
if (!empty ($_POST['google'])){ 
   
    echo '<h2>Google</h2>';

        $url="https://www.google.kz/search?q=".$_POST['text'];
        $agent= "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, $agent);
        curl_setopt($ch, CURLOPT_URL,$url);
        $result=curl_exec($ch);

        print_r ($result);


}
if (!empty ($_POST['yandex'])){ 
   
    echo '<h2>Yandex</h2>';


        $url2="https://yandex.kz/search/?text=".$_POST['text'].'&lr=162';
        $agent2= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';

        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch2, CURLOPT_USERAGENT, $agent2);
        curl_setopt($ch2, CURLOPT_URL,$url2);
        $result2=curl_exec($ch2);
        echo '<pre>';
        print_r ($result2);
        echo '</pre>';


}
?>
