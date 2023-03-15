<?php

return [
    "code" => "nl",
    "default" => true,
    "direction" => "ltr",
    "locale" => "nl_NL",
    "name" => "NL",
    "url" => NULL,
    'translations' => Yaml::decode(F::read(kirby()->root('languages').'/vars/nl.yml')),
];