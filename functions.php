<?php
    require_once('db_model.php');

    function getUserInfo($userId)
    {
        $arr = [];
        $db = new MysqlModel();

        $arr = $db->goResultOnce("
            SELECT 
                * 
            FROM USERS
            WHERE id = $userId
        ");

        return $arr;
    }

    function getUserCategories($userId) 
    {
        $arr = [];
        $db = new MysqlModel();

        $arr = $db->goResult("
            SELECT 
                freelancerId, 
                categoryId,
                (SELECT NAME FROM CATEGORY WHERE ID = categoryId) categoryName
            FROM FREELANCERS_CONN_CATEGORIES
            WHERE freelancerId = $userId
        ");

        return $arr;
    }

    function getFreelancerRating($userId)
    {
        $arr = [];
        $db = new MysqlModel();

        $arr = $db->goResult("
            SELECT 
                generalRating
            FROM FREELANCERS
            WHERE id = $userId
        ");

        return $arr;
    }


    function getEmployerRating($userId)
    {
        $arr = [];
        $db = new MysqlModel();

        $arr = $db->goResult("
            SELECT 
                generalRating
            FROM EMPLOYERS
            WHERE id = $userId
        ");

        return $arr;
    }

?>