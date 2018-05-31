<?php
$animalsintheworld = Array(
            'Australia' => ['Inaria'],            
            'North America' => ['Conuropsis carolinensis'],
            'South America' => ['Smilisca'],
            'Antarctica' => ['Aptenodytes forsteri'],
            'Eurasia' => ['Fulica atra'],
            'Africa' => ['Hydrochoerus hydrochaeris','Actinopterygii','Agalychnis callidryas','Ailuropoda melanoleuca','Dendropithecus','Amphibia','Animalia','Anser indicus','Anseriformes','Panthera leo'],
            );
$firstname = array();
$lastname = array();
foreach ($animalsintheworld as $continent => $animals) {
    foreach ($animals as $animal) {
        if (str_word_count($animal) == 2) {        
            $double = explode(' ', $animal);
            $firstname[$continent][] = $double [0];
            $lastname[] = $double [1];
        }
    }
}
shuffle($lastname);
$shuffleanimal = array();
$i = 0;
foreach ($firstname as $continent => $first) {
    foreach ($first as $value) {
        $shuffleanimal[$continent][] = $value . ' ' . $lastname [$i];
        $i++;
    }
}
var_dump($shuffleanimal);
?>