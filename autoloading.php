<?php
spl_autoload_register(function($classname){
$file = $classname . '.php';
if (file_exists($file)){
	include($file);
}
});
?>