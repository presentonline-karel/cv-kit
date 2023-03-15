<?php

return [
    "code" => "en",
    "default" => false,
    "direction" => "ltr",
    "locale" => "en_US",
    "name" => "EN",
    "url" => NULL,
    'translations' => Yaml::decode(F::read(kirby()->root('languages').'/vars/en.yml')),
];