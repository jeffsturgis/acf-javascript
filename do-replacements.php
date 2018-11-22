<?php
$definitions = [
    'NAMESPACE' =>  'develevation',
    'FIELD_NAME' =>  'javascript',
    'FIELD-NAME' =>  'javascript',
    'FIELD_LABEL' => 'Javascript',
    'TEXTDOMAIN' =>  'acf-javascript',
    'http://www.develevation.com/wp-plugins/acf-javascript' =>  'http://www.develevation.com/wp-plugins/acf-javascript',
    'PLUGIN_TAGS' =>  'Advanced Custom Fields Javascript field',
    'SHORT_DESCRIPTION' =>  'This field allows you to add custom javascript and use a javascript editor',
    'EXTENDED_DESCRIPTION' =>  'If you want to easily add javascript to your word press posts =>  you can create this custom post type to allow you add javascript snippets which can be included with your post',
    'AUTHOR_NAME' =>  'Jeff Sturgis',
    'https://www.develevation.com' =>  'https://www.develevation.com',
];

foreach($definitions as $key => $val){
    $cmd = "find . -type f -exec sed -i'' -e 's/$key/" . str_replace('/', '\/', $val) . "/g' {} +";
    //exec($cmd);
    echo $cmd . "\n";
    $cmd = "find ../ -iname \"*$key*\" -exec rename 's/$key/$val/g' '{}' \;";
    echo $cmd . "\n";
   // exec($cmd);
}

