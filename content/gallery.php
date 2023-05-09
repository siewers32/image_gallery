<?php
function imageLinks($path) {
    $html = "";
    $files = glob($path.'*.{jpg}', GLOB_BRACE);
    foreach($files as $file) {
        $file_info = pathinfo($file);
        $html .= "<img src='{$file}' alt='afbeelding {$file_info['basename']}'>".PHP_EOL;
    }
    return $html;
}
?>

<h1>Dit is gallery</h1>
<?php echo imageLinks('images/thumbs/'); ?>