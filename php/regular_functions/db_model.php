<?php

/*
 * MySQL Database Class
 *
 *  @var string $server Database server.
 *  @var string $user Username.
 *  @var string $pass Password.
 *  @var string $db Database name.
 *  @var string $code Error code.
 *  @var string $error Error message.
 *  @var boolean $connect Connect database status.
 * */


class MysqlModel
{
    private $server = "server125.hosting.reg.ru";
    private $db = "u2013553_default";
    private $user = "u2013553_default";
    private $pass = "6Ietg4cXFO0C20cr";
    private $code = "";
    public $error = "";
    private $connect = false;

    function __construct(){
        $this->server = "server125.hosting.reg.ru";
        $this->db = "u2013553_default";
        $this->user = "u2013553_default";
        $this->pass = "6Ietg4cXFO0C20cr";
    }

    function getConnect() {
        global $c;
        $this->code = '';
        $this->error = '';
        if (!$c = mysqli_connect($this->server, $this->user, $this->pass, $this->db)) {
            $this->connect = false;
            $this->error = "Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error();
        }else{
            $this->connect = true;
            mysqli_set_charset($c, "utf8");
        }
        return $this->connect;
    }

    function closeConnect() {
        global $c;
        mysqli_close($c);
        $this->connect = false;
    }

    function goResult($sql_in){
        global $c;
        if (!$this->connect) $this->GetConnect();
        if(!$result = mysqli_query($c, $sql_in)) {
            $this->error = 'MySQL error ['.mysqli_error($c).']';
            $this->closeConnect();
            return false;
        }else{
            $res = [];
            while( $row = mysqli_fetch_assoc($result) ){
                $res[] = ($row);
            }
            $this->closeConnect();
            return $res;
        }
    }

    function goResultOnce($sql_in){
        global $c;
        if (!$this->connect) $this->GetConnect();
        if(!$result = mysqli_query($c, $sql_in)) {
            $this->error = 'MySQL error ['.mysqli_error($c).']';
            $this->closeConnect();
            return false;
        }else{
            $res = mysqli_fetch_assoc($result);
            $this->closeConnect();
            return $res;
        }
    }

    function query($sql_in){
        global $c;
        if (!$this->connect) $this->GetConnect();
        if(!$result = mysqli_query($c, $sql_in)) {
            $this->error = 'MySQL error ['.mysqli_error($c).']';
            $this->closeConnect();
            return false;
        }else{
            $this->closeConnect();
            return true;
        }

    }
}
?>