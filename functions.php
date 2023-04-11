<?php

    function getUserData($userId){
        $arr = [];


        $db = new Db_Model();
        $arr = $db->goResultOnce("

            SELECT 
                * 
            FROM USER
            WHERE id = $id

        ");

        $arr['tags'] = $db->goResult("
            SELECT 
                freelancerId, 
                categoryId,
                (SELECT NAME FROM CATEGORIES WHERE ID = categoryId) categoryName
            FROM FREELANCERS_CONN_CATEGORIES
            WHERE freelancerId = $userId
        ");


        return $arr;
    }

?>