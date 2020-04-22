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
        $link =mysqli_connect('localhost','yuto','Yuto1218','mydb');
        if(mysqli_connect_errno()){
            die("データベースに接続できません:" . mysqli_connect_error() . "\n");
        }else{
            //success
            $table_all=mysqli_query($link, 'select *.* from not_found_table;');
            echo $table_all."bry";
        }
    }
?>