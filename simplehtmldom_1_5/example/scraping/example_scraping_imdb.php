<?php
include_once('../../simple_html_dom.php');
// Create DOM from URL or file
$html = file_get_html('http://www.ask.com/pictures?qsrc=1&o=0&l=dir&q=watch+ad&qo=serpSearchTopBox');
// Find all images 
//$ret = $html->find('.ui-display-image ui-state-fade-out');


foreach($html->find('img') as $element) 
    echo $element->src . '<br>';

// Find all links 
//foreach($html->find('a') as $element) 
 //      echo $element->href . '<br>';

    
?>