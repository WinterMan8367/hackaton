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

        foreach ($arr as $key => $value)
        {
            $id = $value['id'];
            $arr[$key]['files'] = $db->goResult("
                SELECT
                    *
                FROM
                    PORTFOLIO_FILES
                WHERE
                    portfolioId = $id
            ");
        }

        return $arr;
    }
    function test($arr)
    {
        $margin = "-------";
        echo "Array [<br>";
        foreach ($arr as $key => $elem)
        {
            if (is_array($elem) == false)
            {
                echo $margin, "[$key] => [$elem]<br>";
            }
            else
            {
                echo $margin, "Array [<br>";
                foreach ($elem as $key2 => $elem2)
                {
                    if (is_array($elem2) == false)
                    {
                        echo $margin, $margin, "[$key2] => [$elem2]<br>";
                    }
                    else
                    {   
                        echo $margin, $margin, "Array [<br>";
                        foreach ($elem2 as $key3 => $elem3)
                        {
                            if (is_array($elem3) == false)
                            {
                                echo $margin, $margin, $margin, "[$key3] => [$elem3]<br>";
                            }
                            else
                            {
                                echo $margin, $margin, $margin, "Array [<br>";
                                foreach ($elem3 as $key4 => $elem4)
                                {
                                    if (is_array($elem4) == false)
                                    {
                                        echo $margin, $margin, $margin, $margin, "[$key4] => [$elem4]<br>";
                                    }
                                    else
                                    {
                                        echo $margin, $margin, $margin, $margin, "Array<br>";
                                    }
                                }
                                echo $margin, $margin, $margin, $margin, "]<br>";
                            }
                        }
                        echo $margin, $margin, $margin, "]<br>";
                    }
                }
                echo $margin, $margin, "]<br>";
            }
        }
        echo $margin, "]<br>";
    }

?>