<?php
// Step 6
$data = 'client_id=' . '58a3dcf21a0bae21db44' . '&' .
		'client_secret=' . 'd102461f3339bad28ac26998be39a1e26b5205b9' . '&' .
		'code=' . urlencode($_GET['code']);

$ch = curl_init('https://github.com/login/oauth/access_token');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

preg_match('/access_token=([0-9a-f]+)/', $response, $out);
echo $out[1];
curl_close($ch);
?>
