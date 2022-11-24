<?php
	
    require_once  'curlWrapper.php';

    $params = [
        'name' => 'Aleksandr',
        'email' => 'sana.kosolapov@ya.ru'
    ];
    
    $headers = [
    ];
    $req = new CurlWrapper($headers);
    $requer = $req->sendRequest('get', 'https://httpbin.org/anything', $params);

?>

<pre>
    <?php
        print_r($requer);
    ?>
</pre>