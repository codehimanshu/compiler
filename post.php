<?php
// check if required parameters have been set
$API_KEY = 'YOUR_API_KEY'; /* add your client secret here for testing */
$errors = [];
extract($_POST);

if (empty($lang)) {
    $errors[] = 'you need to provide the "lang" parameter.';
}
if (empty($source)) {
    $errors[] = 'you need to provide the "source" parameter.';
}
if ($API_KEY === "YOUR_API_KEY") {
    $errors[] = 'you need to set the "client_secret" inside `post.php`.';
}
if (count($errors)) {
    die(implode("<br>", $errors));
}
//set up post data
$post_data = http_build_query([
    'client_secret' => $API_KEY,
    'lang' => $lang,
    'source' => urlencode($source)
]);
$context_options = [
    'http' => [
        'method' => 'POST',
        'header'=> "Content-type: application/x-www-form-urlencoded\r\n"
                . "Content-Length: " . strlen($post_data) . "\r\n",
        'content' => $post_data
    ]
];
$context = stream_context_create($context_options);
$result = file_get_contents('http://api.hackerearth.com/code/compile/', false, $context);
//echo result for AJAX call
echo json_decode($result);
