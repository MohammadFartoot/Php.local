<?php
function is_user_logged_in(){
    return true ;
}

function select_bg($color_name){
$result= " " ;
    switch ($color_name){
        case 'blue' :
            $result= '#00c' ;
break ;
        case 'red' :
            $result= '#c00' ;
            break ;
        case 'green' :
            $result= '#0c0' ;
            break ;
    }
    return $result ;
}


function get_users(){
    /*return null;*/ /*ya in code use mishe ya codee paiin*/
    return array(
        array('id'=> 1 , 'name'=> 'Mohammad' , 'email'=> 'Mohammad@gmail.com'),
        array('id'=> 2 , 'name'=> 'ali' , 'email'=> 'ali@gmail.com'),
        array('id'=> 3 , 'name'=> 'hassan' , 'email'=> 'hassan@gmail.com'),
        array('id'=> 4 , 'name'=> 'kaveh' , 'email'=> 'kaveh@gmail.com'),
        array('id'=> 5 , 'name'=> 'elina' , 'email'=> 'elina@gmail.com'),
        array('id'=> 6 , 'name'=> 'sam' , 'email'=> 'sam@gmail.com'),
        array('id'=> 7 , 'name'=> 'mehdi' , 'email'=> 'mehdi@gmail.com'),
    ) ;
}