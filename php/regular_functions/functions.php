<?php
    require_once('db_model.php');

    function getUserInfo($userId)
    {
        $arr = [];
        $db = new MysqlModel();

        $arr = $db->goResultOnce("
            SELECT 
                * 
            FROM
                USERS
            WHERE
                id = $userId
        ");

        return $arr;
    }

    function getUserCategories($userId) 
    {
        $arr = [];
        $db = new MysqlModel();

        $arr = $db->goResult("
            SELECT 
                (
                SELECT
                    NAME
                FROM
                    CATEGORY
                WHERE
                    id = categoryId
                ) categoryName
            FROM
                FREELANCERS_CONN_CATEGORIES
            WHERE
                freelancerId = $userId
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
            FROM
                FREELANCERS
            WHERE
                id = $userId
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
            FROM
                EMPLOYERS
            WHERE
                id = $userId
        ");

        return $arr;
    }

    function getCategories() 
    {
        $arr = [];
        $db = new MysqlModel();

        $arr = $db->goResult("
            SELECT 
                Name
            FROM
                CATEGORY
        ");

        return $arr;
    }

    function getPortfolio($userId) 
    {
        $arr = [];
        $db = new MysqlModel();

        $arr = $db->goResult("
            SELECT
                *
            FROM
                PORTFOLIO
            WHERE
                freelancerId = $userId
        ");

        $arr['file'] = $db->goResult("
            SELECT
            (
                SELECT
                    CONCAT(filepath, filename, extension)
                FROM
                    PORTFOLIO
                WHERE
                    id = portfolioId
                        AND
                    freelancerId = $userId
            ) AS file
            FROM
                PORTFOLIO_FILES
        ");

        return $arr;
    }

?>