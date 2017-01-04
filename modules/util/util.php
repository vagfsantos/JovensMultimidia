<?php
    function truncateText($text, $maxPos = 300){
        if (strlen($text) > $maxPos){
            $lastPos = ($maxPos - 3) - strlen($text);
            $text = substr($text, 0, strrpos($text, ' ', $lastPos));
        }

        return $text;
    }

?>