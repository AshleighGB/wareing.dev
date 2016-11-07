<?php
$template = 'template';
function seoUrl($string) {
    //Lower case everything
    $string = strtolower($string);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dashes
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
}
$newsnipname = seoUrl($_POST['title']);
copy($template, $newsnipname);

function replace_string($filename, $replace, $string){
    $content = file_get_contents($filename);
    $content_chunks=explode($replace, $content);
    $content = implode($string, $content_chunks);
    file_put_contents($filename, $content);
}

replace_string($newsnipname, "[TITLE]", $_POST['title']);
replace_string($newsnipname, "[DESC]", $_POST['desc']);
replace_string($newsnipname, "[LANG]", $_POST['lang']);
replace_string($newsnipname, "[CODE]", $_POST['Code']);

$myfile = fopen("raw/".$_POST['title'], "w") or die("Unable to open file!");
$txt = $_POST['Code'];
fwrite($myfile, $txt);
fclose($myfile);

header('Location: https://wareing.xyz/code-snip/'.$newsnipname);
?>