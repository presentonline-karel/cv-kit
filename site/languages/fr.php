<?php

return [
    "code" => "fr",
    "default" => false,
    "direction" => "ltr",
    "locale" => "fr_FR",
    "name" => "FR",
    "url" => NULL,
    'translations' => Yaml::decode(F::read(kirby()->root('languages').'/vars/fr.yml')),
];