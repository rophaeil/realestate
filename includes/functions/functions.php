<?php
//================================= MAIN FUNCTIONS ===========================

function getTitle(){
    if(isset($page_title) && !empty($page_title)){
        echo $page_title;
    }else{
        echo"BeetCom";
    }
}