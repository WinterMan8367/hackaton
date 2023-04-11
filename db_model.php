<?php
require_once('_settings/main.inc.php');
class Db_Model extends TinyMVC_Model
{
   	var $user = "u2013553_default";
	var $pass = "6Ietg4cXFO0C20cr";
	var $db = "server125.hosting.reg.ru";
	var $code = "";
	var $error = "";
	var $connect = false;

	function getConnectAny($user1, $pass1) {
	    global $c;
	    if (!@$c = OCILogon($user1, $pass1, db_db, 'AL32UTF8')) {
	   	    $err = OCIError();
	   	    $this->connect = false;
	   	    $this->code = ($err['code']) ? $err['code'] : "";
	   	    $this->error = ($err['message']) ? $err['message'] : "";
	    }else{
	        $this->connect = true;
	    }
	    return $this->connect;
	 }

	function getConnectAnyDb($user, $pass, $db) {
	    global $c;
	    $this->code = '';
	    $this->error = '';
	    if (!@$c = OCILogon($user, $pass, $db, 'AL32UTF8')) {
		    $err = OCIError();
		    $this->connect = false;
		    die("Oracle Connect Error [".$err['message']."]");
	    }else{
	        $this->connect = true;
	    }
	    return $this->connect;
	 }

	 function getConnect() {
	    global $c;
	    $this->code = '';
	    $this->error = '';
	    if (!@$c = OCILogon(db_user, db_pass, db_db, 'AL32UTF8')) {
		    $err = OCIError();
		    $this->connect = false;
		    die("Oracle Connect Error [".$err['message']."]");
	    }else{
		    $this->connect = true;
	    }
	    return $this->connect;
	 }

	 function closeConnect() {
		global $c;
		oci_close($c);
		$this->connect = false;
	 }

	function goResult($sql){
        global $c;
        if (!$this->connect) $this->getConnect();
        $s = OCIParse($c, $sql);
        if (!OCIExecute($s, OCI_DEFAULT)) {
          $e = oci_error($s);
          $this->error = $e['message'];
        }
        $out = Array();
        $i = 0;
        while ($res = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)) {
          foreach ($res as $key=>$item) {
              //$item = (!$item->load) ? str_replace("'", "", str_replace('"', '',($item))) : $item;
              $out[$i][$key] = ($item !== null ? $item : "");
          }
          $i++;
        }
        $this->closeConnect();
        return $out;
	}

	function goResult2($sql, $parameters){
	    global $c;
		if (!$this->connect) $this->getConnect();
		$s = OCI_Parse($c, $sql);
		if (count($parameters)>0){
			foreach ($parameters as $key=>$val) {
				oci_bind_by_name($s, $key, $parameters[$key]);
			}
		}
		if (!OCI_Execute($s, OCI_DEFAULT)) {
			$e = oci_error($s);
			$this->error = $e['message'];
		}
		$out = Array();
        $i = 0;
		while ($res = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)) {
			foreach ($res as $key=>$item) {
                //$item = (!$item->load) ? str_replace("'", "", str_replace('"', '',($item))) : $item;
                $out[$i][$key] = ($item !== null ? $item : "");
			}
            $i++;
		}
		$this->closeConnect();
		return $out;
	}

	function goResultOnce2($sql, $parameters){
	    global $c;
		if (!$this->connect) $this->getConnect();
		$s = OCI_Parse($c, $sql);
		if (count($parameters)>0){
			foreach ($parameters as $key=>$val) {
				oci_bind_by_name($s, $key, $parameters[$key]);
			}
		}
		if (!OCI_Execute($s, OCI_DEFAULT)) {
			$e = oci_error($s);
			die("Oracle Error [".$e['message']."]");
		}
		$out = Array();
		if ($res = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)){
			foreach ($res as $key=>$item) {
                //$item = (!$item->load) ? str_replace("'", "", str_replace('"', '',($item))) : $item;
				$out[$key] = ($item !== null ? $item : "");
			}
		}
		$this->closeConnect();
		return $out;
	}

	function goResultOnce($sql){
	    global $c;
		if (!$this->connect) $this->getConnect();
		$s = OCIParse($c, $sql);
		if (!OCIExecute($s, OCI_DEFAULT)) {
			$e = oci_error($s);
			die("Oracle Error [".$e['message']."]");
		}
		$out = Array();
		if ($res = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)){
			foreach ($res as $key=>$item) {
                //$item = (!$item->load) ? str_replace("'", "", str_replace('"', '',($item))) : $item;
				$out[$key] = ($item !== null ? $item : "");
			}
		}
		$this->closeConnect();
		return $out;
	}

	function goQuery2($sql, $parameters){
		global $c;
		if (!$this->connect) $this->getConnect();
		$s = OCIParse($c, $sql);
		if (count($parameters)>0){
			foreach ($parameters as $key=>$val) {
				oci_bind_by_name($s, $key, $parameters[$key]);
			}
		}
		if (!OCIExecute($s, OCI_DEFAULT)) {
			$e = oci_error($s);
			die("Oracle Error [".$e['message']."]");
		}
		OCI_Commit($c);
		$this->closeConnect();
	}

	function goQuery($sql){
	    global $c;
	    if (!$this->connect) $this->getConnect();
	    	$s = OCIParse($c, $sql);
            //die($sql);
	    	if (!OCIExecute($s, OCI_DEFAULT)) {
	    		$e = oci_error($s);
	    		die("Oracle Error [".$e['message']."]");
        }
        OCI_Commit($c);
        $this->closeConnect();
	}

    function getNextval($seqname){
        $sql = <<<SQL
            SELECT $seqname.nextval nw from dual
SQL;
        if ($new = $this->goResultOnce($sql)) {
            $nextval = $new['NW'];
        }
        return $nextval;
    }

    function getCurrenttval($seqname){
        $sql = <<<SQL
            SELECT $seqname.currval nw from dual
SQL;
        if ($new = $this->goResultOnce($sql)) {
            $current_val = $new['CURRENT'];
        }
        return $current_val;
    }
}
?>