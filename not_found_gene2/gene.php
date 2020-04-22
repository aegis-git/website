<?php
    
    function make_html(){
        $src="";
        $src.="<html>";
        getTextSet();
        $src.="<body>hello</body>";
        $src.="</html>";
        return $src;
    }
    echo make_html();

    function getTextSet(){
        $link =new mysqli('localhost','yuto','Yuto1218','mydb');
        if($link->connect_errno ) {
            echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
        }
        $link->set_charset('utf8');

        $query="select * from not_found_table;";
        $res=$link->query($query);
        if($res){
            var_dump($res->fetch_all());
        }
        $link->close();
    }
?>