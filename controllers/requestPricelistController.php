<?php 

function latest_news()
{
    $data = [
        'latest_news'    => getLatestNews(),
    ];

    return $data;
}

function get_all_news() {

    $end = countNews()->countNews;
    $start = 4;

    $data = [
        'news_data'    => getAllNewsData($start, $end),
    ];
    
    $count = count(getAllNewsData($start, $end));
    return $data;
}

?>