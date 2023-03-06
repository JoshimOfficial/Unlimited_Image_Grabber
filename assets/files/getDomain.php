<?php 

function rootDomain($conn) {
    $selectDomain = "SELECT * FROM `webfixer`";
    $accessDomainList = mysqli_query($conn, $selectDomain);
    if($accessDomainList) {
        while($getDomain = mysqli_fetch_assoc($accessDomainList)) {
            $latestDomain = $getDomain["domain"];
        }

        return $latestDomain;
    }
}
