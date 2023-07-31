<?php 

function latest_types_homepage()
{
    $data = [
        'latest_types'    => getLatestTypes(),
    ];

    return $data;
}

?>