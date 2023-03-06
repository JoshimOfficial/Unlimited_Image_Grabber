<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {
    function getImage($queryData,$first) {
    
        $query = $queryData;
        $url = "https://www.bing.com/images/async?q=$query&first=$first&count=35&cw=1920&ch=448&relp=35&apc=0&datsrc=I&layout=RowBased_Landscape&sbop=1&mmasync=1";
        $user_agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        
        // Regular expression pattern to match the first href value that starts with "/images/search?view"
        $href_regex = '/<li[^>]*>\s*<a[^>]*href=["\']\/images\/search\?view=([^"\']*)["\'][^>]*>/';
        
        // Find all matches of the href regex in the response
        preg_match_all($href_regex, $response, $href_matches);
        
        // Get the first href and src values from each match
        $href_values = $href_matches[1];
        
        // Create empty arrays to store href and src values
        $href_array = array();
        
        // Loop through href values and push them into href_array
        foreach ($href_values as $href) {
            // Remove the substring starting from "&mediaurl=https" from the src value
            $href = preg_replace('/&mediaurl=https[^&]*/', '', $href);
            array_push($href_array, urldecode(urldecode($href)));
        }
        
        function remove_before_mediaurl(&$value) {
            if (is_array($value)) {
                array_walk($value, 'remove_before_mediaurl');
            } elseif (is_string($value)) {
                $value = preg_replace('/(.*)(mediaurl.*)/', '$2', $value);
                $value = preg_replace('/(.*)(cdnurl.*)/', '$1', $value);
                $value = preg_replace('/(.*)(riu.*)/', '$2', $value);
                $value = preg_replace('/(.*)(http.*)/', '$2', $value);
                $value = preg_replace('/(.*)(&.*)/', '$1', $value);
                $value = preg_replace('/(.*)(ehk.*)/', '$1', $value);
                $value = preg_replace('/(.*)(&.*)/', '$1', $value);
            }
        }
        
        
        remove_before_mediaurl($href_array);
        
        $countArray = count($href_array);
        for($i = 0; $i < $countArray; $i++) {
        ?>
        
        <div class="w-96 h-56 rounded my-3">
            <img src="<?php echo $href_array[$i];?>" class="w-96 h-56 rounded" />
        </div>
        <?php
        }
        
        }

        if(isset($_POST["query"]) && isset($_POST["first"])) {
            $userQuery = $_POST["query"];
            $first = $_POST["first"];
            getImage($userQuery,$first);
        }
        else {
            echo "Coudn't find any data";
        }
        
}
else {
    header("Content-type: application/json; charset=utf-8");
    $err = array('You do not have any permission to access this page');
    print_r($err);
}

?>
