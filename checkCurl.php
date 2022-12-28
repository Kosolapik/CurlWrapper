<?php
	
    require_once  'curlWrapper.php';

    $params = [
        'query' => 'чус',
        'contentType' => 'city',
        'withParent' => 1,
        'limit' => 10,
        // 'regionId' => 5900000000000
    ];
    
    $headers = [
       
    ];
    $req = new CurlWrapper($headers);
    $requer = $req->sendRequest('get', 'https://kladr-api.ru/api.php', $params);
    $requer = json_decode($requer, true);

?>

<pre>
    <?php
        print_r ($requer);
    ?>
</pre>
<!-- <pre>
    <?php
        echo ($requer);
    ?>
</pre> -->