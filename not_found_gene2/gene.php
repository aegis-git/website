<?php
    
    function make_html(){
        $src="";
        $src.="<html><body>";
        $src.=makeRandomComment(getTextSet());
        $src.="</body></html>";
        return $src;
    }
    echo make_html();

    function makeRandomComment($sql_result){
        $sql_array=$sql_result->fetch_all();
        $rm = rand(0,count($sql_array)-1);
        $t = $sql_array[$rm];

        $mes='<h1>404 '.$t[0].' NOT FOUND</h1>';
        $mes.='<h2>The requested '.$t[1].' "'.$t[2].'" was not found on '.$t[3].'</h2>';
        $mes.='<p>お探しの'.$t[4].'は見つかりませんでした<br>';
        $mes.=''.$t[5].'';
        $mes.=''.$t[6].'</p>';
        return $mes;
    }

    function getTextSet(){
        $link =new mysqli('localhost','yuto','Yuto1218','mydb');
        if($link->connect_errno ) {
            echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
        }
        $link->set_charset('utf8');

        $query="select * from not_found_table;";
        $res=$link->query($query);
        if($res){
            $link->close();
            return $res;
            var_dump($res->fetch_all());
        }
       
    }

?>