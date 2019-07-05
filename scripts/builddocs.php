<?php

$files = glob('build/*.rst');

$tags = array(
    '<EXAKAT_VERSION>'           => '1.8.7',
    '<EXAKAT_BUILD>'             => '961',
    '<DOCUMENTATION_BUILD_DATE>' => date('r'),
);


foreach($files as $file) {
    $rst = file_get_contents($file);
    $rst = str_replace(array_keys($tags), array_values($tags), $rst);
    file_put_contents($file);
}

?>