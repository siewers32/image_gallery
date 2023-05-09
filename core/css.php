<?php

    function cssLinks($path) {
        $html = "";
        $files = glob($path.'*.{css}', GLOB_BRACE);
        foreach($files as $file) {
            $html .= "<link rel='stylesheet' href='{$file}'>".PHP_EOL;
        }
        return $html;
    }
