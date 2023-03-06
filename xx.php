<?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    

$parsed_url = parse_url($url);
$base_url = $parsed_url['scheme'] . '://' . $parsed_url['host'] . $parsed_url['path'];

echo $base_url; // outputs "http://localhost/tailwind/11"
