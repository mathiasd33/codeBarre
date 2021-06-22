<?php


$codebarre = "30062948";

$codebarre_split = str_split($codebarre);


$tableauA= [
    0=>"___XX_X",
    1=>"__XX__X",
    2=>"__X__XX",
    3=>"_XXXX_X",
    4=>"_X___XX",
    5=>"_XX___X",
    6=>"_X_XXXX",
    7=>"_XXX_XX",
    8=>"_XX_XXX",
    9=>"___X_XX",

];

$tableauC=[
    0=>"XXX__X_",
    1=>"XX__XX_",
    2=>"XX_XX__",
    3=>"X____X_",
    4=>"X_XXX__",
    5=>"X__XXX_",
    6=>"X_X____",
    7=>"X___X__",
    8=>"X__X___",
    9=>"XXX_X__",
];

for ($i=0;$i<=3;$i++) {
    echo $tableauA[$codebarre_split[$i]];
}

for ($i=4;$i<=7;$i++){
    echo $tableauC[$codebarre_split[$i]];
}