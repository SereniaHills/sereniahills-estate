<?php 

function units()
{
    $data = [
        'unit_types'  => getUnitTypesData()
    ];

    return $data;
}

function unit_detail_pages()
{
    $data = [
        'get_one_types'  => getOneUnitTypes(),
        'latest_journal'    => getLatestJournal(),
    ];
    
    return $data;
}

?>