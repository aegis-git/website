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
        $query="select *.* from not_found_table;";
        if(mysqli_query($link,$query)){
            echo "good";
        }else{
            echo mysqli_query($link,$query);
        }
    }
?>