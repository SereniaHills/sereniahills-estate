<?php 

function journal()
{
    $data = [
        'lists' => getJournal()
    ];

    return $data;
}
?>