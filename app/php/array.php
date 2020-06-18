<?php
$array = [
    'menu' => [
        'Home' => 'home.php',
        'Top-5' => 'top5.php',
        'All' => 'all.php',
        'Search' => 'search.php',
        'Contact' => 'contact.php',
    ],
    'sodybos' => [
       [
            'sodybos_id' => 1,
            'reitingas' => 10,
            'sodybos_pavadinimas' => 'Latakuciai',
            'sodybos_adresas' => 'Latakuciu km. 2',
            'namuku_skaicius' => 3,
            'miegamos_vietos' => 12,
        ],
        [
            'sodybos_id' => 2,
            'reitingas' => 5,
            'sodybos_pavadinimas' => 'Nemunėlio',
            'sodybos_adresas' => 'Kauno raj. 15',
            'namuku_skaicius' => 1,
            'miegamos_vietos' => 5,
        ],
        [
            'sodybos_id' => 3,
            'reitingas' => 9,
            'sodybos_pavadinimas' => 'Vasaros',
            'sodybos_adresas' => 'Vilniaus g. 33',
            'namuku_skaicius' => 4,
            'miegamos_vietos' => 10,
        ],
       [
            'sodybos_id' => 4,
            'reitingas' => 5,
            'sodybos_pavadinimas' => 'Žvaigždyno',
            'sodybos_adresas' => 'Vasaros g. 56',
            'namuku_skaicius' => 6,
            'miegamos_vietos' => 23,
        ],
        [
            'sodybos_id' => 5,
            'reitingas' => 8,
            'sodybos_pavadinimas' => 'Dangaus',
            'sodybos_adresas' => 'Drujos g. 56',
            'namuku_skaicius' => 10,
            'miegamos_vietos' => 35,
        ],
      [
            'sodybos_id' => 6,
            'reitingas' => 7,
            'sodybos_pavadinimas' => 'Raganaites',
            'sodybos_adresas' => 'Vanago g. 56',
            'namuku_skaicius' => 13,
            'miegamos_vietos' => 55,
        ],
      [
            'sodybos_id' => 7,
            'reitingas' => 7,
            'sodybos_pavadinimas' => 'Ąžuolo',
            'sodybos_adresas' => 'Vanago g. 56',
            'namuku_skaicius' => 13,
            'miegamos_vietos' => 55,
        ],
        [
            'sodybos_id' => 8,
            'reitingas' => 10,
            'sodybos_pavadinimas' => 'Gerulio',
            'sodybos_adresas' => 'Gerulio g. 6',
            'namuku_skaicius' => 10,
            'miegamos_vietos' => 10,
        ],
        [
            'sodybos_id' => 9,
            'reitingas' => 6,
            'sodybos_pavadinimas' => 'Gegutės',
            'sodybos_adresas' => 'Gegutės g. 10',
            'namuku_skaicius' => 2,
            'miegamos_vietos' => 4,
        ],
       [
            'sodybos_id' => 10,
            'reitingas' => 7,
            'sodybos_pavadinimas' => 'Rabarbarų',
            'sodybos_adresas' => 'Rabarbarų g. 10',
            'namuku_skaicius' => 4,
            'miegamos_vietos' => 8,
        ],
    ],
    'form' => [
        'inputs' => [
            'user_name' => [
                'type' => 'text',
                'placeholder' => 'User name:',
                'name' => 'user_name',
            ],
            'user_email' => [
                'type' => 'email',
                'placeholder' => 'User email:',
                'name' => 'user_email',
            ],
            'user_phone' => [
                'type' => 'phone_number',
                'placeholder' => 'Phone number:',
                'name' => 'user_number',
            ],
            'textarea' => [
                'placeholder' => 'Your message:',
                'name' => 'textarea',
            ],
        ],
        'buttons' => [
            'send' => [
                'type' => 'submit',
                'value' => 'Send message',
            ],
        ],
    ],
];

?>

