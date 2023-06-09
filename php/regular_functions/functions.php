<?php
    require_once('db_model.php');

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
                echo $margin, "[$key] => Array [<br>";
                foreach ($elem as $key2 => $elem2)
                {
                    if (is_array($elem2) == false)
                    {
                        echo $margin, $margin, "[$key2] => [$elem2]<br>";
                    }
                    else
                    {   
                        echo $margin, $margin, "[$key] => Array [<br>";
                        foreach ($elem2 as $key3 => $elem3)
                        {
                            if (is_array($elem3) == false)
                            {
                                echo $margin, $margin, $margin, "[$key3] => [$elem3]<br>";
                            }
                            else
                            {
                                echo $margin, $margin, $margin, "[$key] => Array [<br>";
                                foreach ($elem3 as $key4 => $elem4)
                                {
                                    if (is_array($elem4) == false)
                                    {
                                        echo $margin, $margin, $margin, $margin, "[$key4] => [$elem4]<br>";
                                    }
                                    else
                                    {
                                        echo $margin, $margin, $margin, $margin, "[$key] => Array<br>";
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

    function getAllFreelancerInfo()
    {
        $arr = [];
        $db = new MysqlModel();

        $arr = $db->goResult("
            SELECT 
                * 
            FROM
                USERS
            WHERE
                isEmployer = 0
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

    function getOrderInfoForFreelancer($userId)
    {
        $arr = [];
        $db = new MysqlModel();

        $arr = $db->goResult("
            SELECT
                *
            FROM
                ORDER_CONN_RESPONSE
            WHERE
                freelancerId = $userId
        ");

        foreach ($arr as $key => $value)
        {
            $id = $value['id'];
            $arr[$key]['orders'] = $db->goResult("
                SELECT
                    *
                FROM
                    ORDER_
                WHERE
                    id = $id
            ");
        }

        return $arr;
    }

    function getOrderInfo($userId)
    {
        $arr = [];
        $db = new MysqlModel();

        $arr = $db->goResult("
            SELECT
                *
            FROM
                ORDER_
            WHERE
                employerId = $userId
        ");

        return $arr;
    }

    function getReviews($userId)
    {
        $arr = [];
        $db = new MysqlModel();

        $arr = $db->goResult("
            SELECT
                USERS_REVIEWS.id,
                authorId,
                userId,
                orderId,
                description,
                rating,
                lastname,
                firstname,
                surname
            FROM
                USERS_REVIEWS, USERS_REVIEWS_CONN_RECIPIENT, USERS
            WHERE
                reviewsId = USERS_REVIEWS.id AND userId = $userId AND userId = USERS.id
        ");

        return $arr;
    }

    function getLogin($login, $password)
    {
        $arr = [];
        $db = new MysqlModel();

        $arr = $db->goResult("
            SELECT
                *
            FROM
                USERS
            WHERE
                login = '$login'
                    AND
                password = '$password'
        ");

        if (!empty($arr)) {
            foreach ($arr as $elem) {
                return $elem;
            }
        }
        else
        {
            return false;
        }
    }
    
    function registration($password, $email, $phone, $lastname, $firstname, $surname)
    {
        $db = new MysqlModel();

        $db->goResult("
            INSERT INTO USERS(
                id,
                login,
                password,
                email,
                phone,
                lastname,
                firstname,
                surname,
                aboutUser,
                city,
                isEmployer
            )
            VALUES(
                NULL,
                '$email',
                '$password',
                '$email',
                '$phone',
                '$lastname',
                '$firstname',
                '$surname',
                'Привет, я начинающий фрилансер!',
                'Н/Д',
                b'0'
            );
        ");
    }

    function getOrder()
    {
        $arr = [];
        $db = new MysqlModel();

        $arr = $db->goResult("
            SELECT
                ORDER_.id AS id,
                title,
                description,
                statusId,
                priceFrom,
                priceBefore,
                address,
                deadline,
                lastname,
                firstname,
                surname
            FROM
                ORDER_, EMPLOYERS, USERS
            WHERE
                employerId = EMPLOYERS.id AND EMPLOYERS.id = USERS.id
        ");

        return $arr;
    }

    function getOrderCategories($id) 
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
                ORDER_CONN_CATEGORIES
            WHERE
                orderId = $id
        ");

        return $arr;
    }

?>