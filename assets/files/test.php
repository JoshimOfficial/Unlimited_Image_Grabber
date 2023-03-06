<?php
$url = "https://blog-desk.onrender.com/users/signup";
$user_agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36";
$data = array(
    "profileImage" => "@/path/to/image.jpg",
    "fullName" => "Joshim Uddin",
    "about" => "I changed this bio without any verification vai 😆😆😆",
    "email" => "joshim@gmail.com",
    "password" => "12345",
    "facebook" => "Joshim",
    "twitter" => "Joshim"
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
curl_close($ch);
echo $response;
?>
