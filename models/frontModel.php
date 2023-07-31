<?php 

function getLatestTypes() {
    global $wpdb;

    $query = "SELECT 
            `wp_posts`.*,
            `wp_terms`.`name`,
            `wp_terms`.`slug`,
            `wp_users`.`display_name` as author
            FROM `wp_term_relationships`
            INNER JOIN `wp_posts` ON `wp_posts`.`ID` = `wp_term_relationships`.`object_id`
            INNER JOIN `wp_terms` ON `wp_terms`.`term_id` = `wp_term_relationships`.`term_taxonomy_id`
            INNER JOIN `wp_users` ON `wp_users`.`ID` = `wp_posts`.`post_author`
            WHERE `wp_posts`.`post_type` = 'post'
            AND `wp_posts`.`post_status` = 'publish'
            AND `wp_terms`.`term_id` = '3'
            ORDER BY `wp_posts`.`post_date` DESC
            LIMIT 3;";

    if (count($wpdb->get_results($query)) > 0) 
    {
        $result = $wpdb->get_results($query);
    }
    else 
    {
        $result = '';
    }
    
    return $result;
}

function getOneUnitType($slug)
{
    global $wpdb;

    $query = "SELECT 
            `wp_posts`.*,
            `wp_terms`.`name`,
            `wp_users`.`display_name` as author
            FROM `wp_term_relationships`
            INNER JOIN `wp_posts` ON `wp_posts`.`ID` = `wp_term_relationships`.`object_id`
            INNER JOIN `wp_terms` ON `wp_terms`.`term_id` = `wp_term_relationships`.`term_taxonomy_id`
            INNER JOIN `wp_users` ON `wp_users`.`ID` = `wp_posts`.`post_author`
            WHERE `wp_posts`.`post_type` = 'post'
            AND `wp_posts`.`post_name` = '".$slug."'
            AND `wp_posts`.`post_status` = 'publish'
            AND `wp_terms`.`term_id` = '3';";

    if (count($wpdb->get_results($query)) > 0) 
    {
        $result = $wpdb->get_row($query);
    }
    else 
    {
        $result = '';
    }
    
    return $result;
}

function getUserByID($id)
{
    global $wpdb;

    $query = "SELECT 
            `wp_users`.`ID`, 
            `wp_users`.`display_name` 
            FROM `wp_users` 
            WHERE `wp_users`.`ID` = '".$id."';";

    if (count($wpdb->get_results($query)) > 0) 
    {
        $result = $wpdb->get_row($query);
    }
    else 
    {
        $result = '';
    }
    
    return $result;
}

function getUnitTypesData()
{
    global $wpdb;

    $query = "SELECT 
            `wp_posts`.*,
            `wp_terms`.`name`,
            `wp_users`.`display_name` as author
            FROM `wp_term_relationships`
            INNER JOIN `wp_posts` ON `wp_posts`.`ID` = `wp_term_relationships`.`object_id`
            INNER JOIN `wp_terms` ON `wp_terms`.`term_id` = `wp_term_relationships`.`term_taxonomy_id`
            INNER JOIN `wp_users` ON `wp_users`.`ID` = `wp_posts`.`post_author`
            WHERE `wp_posts`.`post_type` = 'post'
            AND `wp_posts`.`post_status` = 'publish'
            AND `wp_terms`.`term_id` = '3'
            ORDER BY `wp_posts`.`post_date` DESC;";

    if (count($wpdb->get_results($query)) > 0) 
    {
        $result = $wpdb->get_results($query);
    }
    else 
    {
        $result = '';
    }
    
    return $result;
}

function getLatestJournal()
{
    global $wpdb;

    $query = "SELECT 
            `wp_posts`.*,
            `wp_terms`.`name`,
            `wp_users`.`display_name` AS author
            FROM `wp_term_relationships`
            INNER JOIN `wp_posts` ON `wp_posts`.`ID` = `wp_term_relationships`.`object_id`
            INNER JOIN `wp_terms` ON `wp_terms`.`term_id` = `wp_term_relationships`.`term_taxonomy_id`
            INNER JOIN `wp_users` ON `wp_users`.`ID` = `wp_posts`.`post_author`
            WHERE `wp_posts`.`post_type` = 'post'
            AND `wp_posts`.`post_status` = 'publish'
            AND `wp_terms`.`term_id` = '4'
            ORDER BY `wp_posts`.`post_date` DESC
            LIMIT 2;";

    if (count($wpdb->get_results($query)) > 0) 
    {
        $result = $wpdb->get_results($query);
    }
    else 
    {
        $result = '';
    }
    
    return $result;
}

function getJournal()
{
    global $wpdb;

    $query = "SELECT 
            `wp_posts`.*,
            `wp_terms`.`name`,
            `wp_users`.`display_name` AS author
            FROM `wp_term_relationships`
            INNER JOIN `wp_posts` ON `wp_posts`.`ID` = `wp_term_relationships`.`object_id`
            INNER JOIN `wp_terms` ON `wp_terms`.`term_id` = `wp_term_relationships`.`term_taxonomy_id`
            INNER JOIN `wp_users` ON `wp_users`.`ID` = `wp_posts`.`post_author`
            WHERE `wp_posts`.`post_type` = 'post'
            AND `wp_posts`.`post_status` = 'publish'
            AND `wp_terms`.`term_id` = '4'
            ORDER BY `wp_posts`.`post_date` DESC;";

    if (count($wpdb->get_results($query)) > 0) 
    {
        $result = $wpdb->get_results($query);
    }
    else 
    {
        $result = '';
    }
    
    return $result;
}


// function getAllNewsData($start, $end)
// {
//     global $wpdb;

//     $query = "SELECT 
//             `wp_posts`.*,
//             `wp_terms`.`name`,
//             `wp_users`.`display_name` as author
//             FROM `wp_term_relationships`
//             INNER JOIN `wp_posts` ON `wp_posts`.`ID` = `wp_term_relationships`.`object_id`
//             INNER JOIN `wp_terms` ON `wp_terms`.`term_id` = `wp_term_relationships`.`term_taxonomy_id`
//             INNER JOIN `wp_users` ON `wp_users`.`ID` = `wp_posts`.`post_author`
//             WHERE `wp_posts`.`post_type` = 'post'
//             AND `wp_posts`.`post_status` = 'publish'
//             AND `wp_terms`.`term_id` = '4'
//             ORDER BY `wp_posts`.`post_date` DESC
//             LIMIT  ".$start.", ".$end.";";

//     if (count($wpdb->get_results($query)) > 0) 
//     {
//         $result = $wpdb->get_results($query);
//     }
//     else 
//     {
//         $result = '';
//     }
    
//     return $result;
// }

function getPeopleData() 
{
    global $wpdb;

    $query = "SELECT 
            `wp_posts`.*,
            `wp_terms`.`name` 
            FROM `wp_term_relationships`
            INNER JOIN `wp_posts` ON `wp_posts`.`ID` = `wp_term_relationships`.`object_id`
            INNER JOIN `wp_terms` ON `wp_terms`.`term_id` = `wp_term_relationships`.`term_taxonomy_id`
            WHERE `wp_posts`.`post_type` = 'post'
            AND `wp_posts`.`post_status` = 'publish'
            AND `wp_terms`.`term_id` = '5';";

    if (count($wpdb->get_results($query)) > 0) 
    {
        $result = $wpdb->get_results($query);
    }
    else 
    {
        $result = '';
    }
    
    return $result;
}

// function getNewsKnowledge()
// {
//     global $wpdb;

//     $query = "SELECT 
//             `wp_posts`.*,
//             `wp_terms`.`name`,
//             `wp_users`.`display_name` as author
//             FROM `wp_term_relationships`
//             INNER JOIN `wp_posts` ON `wp_posts`.`ID` = `wp_term_relationships`.`object_id`
//             INNER JOIN `wp_terms` ON `wp_terms`.`term_id` = `wp_term_relationships`.`term_taxonomy_id`
//             INNER JOIN `wp_users` ON `wp_users`.`ID` = `wp_posts`.`post_author`
//             WHERE `wp_posts`.`post_type` = 'post'
//             AND `wp_posts`.`post_status` = 'publish'
//             AND `wp_terms`.`term_id` = '4'
//             ORDER BY `wp_posts`.`post_date` DESC
//             LIMIT 4;";

//     if (count($wpdb->get_results($query)) > 0) 
//     {
//         $result = $wpdb->get_results($query);
//     }
//     else 
//     {
//         $result = '';
//     }
    
//     return $result;
// }

// function getNewsHomePage()
// {
//     global $wpdb;

//     $query = "SELECT 
//             `wp_posts`.*,
//             `wp_terms`.`name`,
//             `wp_users`.`display_name` as author
//             FROM `wp_term_relationships`
//             INNER JOIN `wp_posts` ON `wp_posts`.`ID` = `wp_term_relationships`.`object_id`
//             INNER JOIN `wp_terms` ON `wp_terms`.`term_id` = `wp_term_relationships`.`term_taxonomy_id`
//             INNER JOIN `wp_users` ON `wp_users`.`ID` = `wp_posts`.`post_author`
//             WHERE `wp_posts`.`post_type` = 'post'
//             AND `wp_posts`.`post_status` = 'publish'
//             AND `wp_terms`.`term_id` = '4'
//             ORDER BY `wp_posts`.`post_date` DESC
//             LIMIT 4;";

//     if (count($wpdb->get_results($query)) > 0) 
//     {
//         $result = $wpdb->get_results($query);
//     }
//     else 
//     {
//         $result = '';
//     }
    
//     return $result;
// }

// function countNews()
// {
    
//     global $wpdb;

//     $query = "SELECT COUNT(*) AS countNews
//             FROM `wp_term_relationships`
//             INNER JOIN `wp_posts` ON `wp_posts`.`ID` = `wp_term_relationships`.`object_id`
//             INNER JOIN `wp_terms` ON `wp_terms`.`term_id` = `wp_term_relationships`.`term_taxonomy_id`
//             WHERE `wp_posts`.`post_type` = 'post'
//             AND `wp_posts`.`post_status` = 'publish'
//             AND `wp_terms`.`term_id` = '4'
//             ORDER BY `wp_posts`.`post_date` DESC;";

//     if (count($wpdb->get_results($query)) > 0) 
//     {
//         $result = $wpdb->get_row($query);
//     }
//     else 
//     {
//         $result = '';
//     }
    
//     return $result;
// }

?>