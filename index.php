<?php 
/*
To deploy static HTML projects, we need to let Heroku think this is a PHP app 
If you don't need this, delete index.php and change the name of index.html to index.html 
*/
include_once('dist/index.html'); 
?>
