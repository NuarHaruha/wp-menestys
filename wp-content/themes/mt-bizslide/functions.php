<?php


function __e($s){ echo $s; }

function mt_get_public_uri($filename,$type = 'css'){    
    return get_template_directory_uri().'/public/'.$type.'/'.$filename;
}

function mt_public_uri($filename, $type = 'css'){
    echo mt_get_public_uri($filename,$type);
}


?>