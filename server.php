<?php 
    $cities = [
        [
            'name' => 'Pisa',
            'country' => 'Italy',
            'picture' => `https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Pisa_-_veduta_dall%27aereo_4.JPG/1024px-Pisa_-_veduta_dall%27aereo_4.JPG`
        ],
        [
            'name' => 'Roma',
            'country' => 'Italy',
            'picture' => `https://it.wikipedia.org/wiki/Roma#/media/File:Roma_dall'aereo.JPG`
        ],
        [
            'name' => 'Napoli',
            'country' => 'Italy',
            'picture' => `https://it.wikipedia.org/wiki/Citt%C3%A0_metropolitana_di_Napoli#/media/File:Isla_de_Isquia_Bah%C3%ADa_de_N%C3%A1poles_y_Vesubio.jpg`
        ],
        [
            'name' => 'Milano',
            'country' => 'Italy',
            'picture' => 'https://it.wikipedia.org/wiki/Milano#/media/File:Milano,_Duomo_with_Milan_Cathedral_and_Galleria_Vittorio_Emanuele_II,_2016.jpg'
        ],
        [
            'name' => 'Torino',
            'country' => 'Italy',
            'picture' => 'https://upload.wikimedia.org/wikipedia/commons/6/62/Turin_monte_cappuccini.jpg'
        ],
        [
            'name' => 'Ascoli',
            'country' => 'Italy',
            'picture' => 'https://it.wikipedia.org/wiki/Ascoli_Piceno#/media/File:Ascoli_Piceno_2015_by-RaBoe_069.jpg'
        ],
        [
            'name' => 'New York',
            'country' => 'United States',
            'picture' => 'https://upload.wikimedia.org/wikipedia/commons/f/f7/Lower_Manhattan_skyline_-_June_2017.jpg'
        ],
        [
            'name' => 'Los Angeles',
            'country' => 'United States',
            'picture' => 'https://it.wikipedia.org/wiki/Los_Angeles#/media/File:Los_Angeles_with_Mount_Baldy.jpg'
        ],
        [
            'name' => 'Las Vegas',
            'country' => 'United States',
            'picture' => 'https://it.wikipedia.org/wiki/Las_Vegas#/media/File:Las_Vegas_strip.jpg'
        ],
        [
            'name' => 'Washington DC',
            'country' => 'United States',
            'picture' => 'https://it.wikipedia.org/wiki/Washington#/media/File:DCmontage3.jpg'
        ],
        [
            'name' => 'San Francisco',
            'country' => 'United States',
            'picture' => 'https://it.wikipedia.org/wiki/San_Francisco#/media/File:GoldenGateBridge-001.jpg'
        ]
    ];
    header('Content-Type: application/json');
    echo json_encode($cities);

    // var_dump($cities);
?>