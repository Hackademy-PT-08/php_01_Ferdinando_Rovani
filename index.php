<?php

// esercizio 1
// Definisci 4 variabili:

//     - Integer 
//     - Float 
//     - String 
//     - Boolean

// A schermo, fai comparire il tipo di dato delle varie variabili.
// Trasforma quelle variabili in costanti, utilizzando le best practice viste a lezione.

$number = 1;
$float = 1.2;
$str = "stringa";
$boolean = true;

var_dump ($number);
var_dump ($float);
var_dump($str);
var_dump($boolean);

const NUMBER = 1;
const FLOATS = 1.2;
const STR = "stringa";
const BOOLEANS = true;

var_dump (NUMBER);
var_dump (FLOATS);
var_dump(STR);
var_dump(BOOLEANS);


// esercizio 2

// $1text = "Marco"; non è consentito inziare a dichiarare la variabile con un numero
// $text2 = "hai"; ok
// $text.3 = "sete"; il "." non è consentito come carattere
// $text4 = "?"; ok
// @text5 = "Perchè"; la variabile deve iniziare con il "$"
// $te-xt6 = '$text2'; il "-" non è consentito come carattere e per richiamare variabile servono i doppi apici
// $text 7 = 'bevuto'; non si possono inserire spazi nei nomi delle variabili
// $text8 = "tutto" manca il ";" finale

// CORRETTE
$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = "$text2";
$text7 = 'bevuto';
$text8 = "tutto";

// “Marco Hai sete? Perche' hai bevuto tutto.“

var_dump($text1 . " " . $text2 . " " . $text3 . $text4 . " " . $text6 . " " . $text7 . " " . $text8);

// esercizio 3


$words1 = 
[
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
        'oscura',
        'era',
        89,
        [
            'mezzo',
            [
                'cammin',
                'Nel',
                [
                    'selva',
                    'la',
                    [
                        'via',
                        'una',
                        true,
                    ]
                ],
            ]
        ],
        'ritrovai',
        'per'
    ],
    'diritta'
];
  
$words2 = 
[
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => 
    [
        'Virgilio',
        'smarrita',
        'ché'
    ]
];

  var_dump($words1[6][3][1][1] . " " . $words1[6][3][0] . " del " . $words1[6][3][1][0] . " di " . $words2["elemento2"] . " " . $words1[2] . " " . $words1[4] . " " . $words1[6][4] . " in " . $words1[6][3][1][2][2][1] . " " . $words1[6][3][1][2][0] . " " . $words1[6][0] . " " . $words2["elemento3"][2]. " " . $words1[6][3][1][2][1] . " " . $words1[7]. " " . $words1[6][3][1][2][2][0] . " " . $words1[6][1] . " " . $words2["elemento3"][1]);

