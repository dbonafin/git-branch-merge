<?php 
    $cities = [
        [
            'name' => 'Pisa',
            'country' => 'Italy',
            'picture' => `https://static2-viaggi.corriereobjects.it/wp-content/uploads/2015/06/pisa-getty-1080x794.jpg?v=136980`
        ],
        [
            'name' => 'Roma',
            'country' => 'Italy',
            'picture' => `https://www.italia.it/content/dam/tdh/it/interests/lazio/roma/roma-in-48-ore/media/20220127150143-colosseo-roma-lazio-shutterstock-756032350.jpg.transform/w_1600/h_900/image.jpeg`
        ],
        [
            'name' => 'Napoli',
            'country' => 'Italy',
            'picture' => `https://siviaggia.it/wp-content/uploads/sites/2/2020/08/napoli-a-piedi.jpg`
        ],
        [
            'name' => 'Milano',
            'country' => 'Italy',
            'picture' => `https://img.ilgcdn.com/sites/default/files/styles/xl/public/foto/2022/05/02/1651509563-milano-duomo-1.jpg?_=1651509563`
        ],
        [
            'name' => 'Torino',
            'country' => 'Italy',
            'picture' => `https://images.musement.com/cover/0002/45/view-of-turin-center-with-mole-antonelliana-italy_header-144980.jpeg`
        ],
        [
            'name' => 'Ascoli',
            'country' => 'Italy',
            'picture' => `https://www.italia.it/content/dam/tdh/it/interests/marche/ascoli-piceno/ascoli-piceno/media/20210309144349-ascoli-piceno.jpg.transform/w_1600/h_480/image.jpeg`
        ],
        [
            'name' => 'New York',
            'country' => 'United States',
            'picture' => `https://www.viaggi-usa.it/wp-content/uploads/2013/11/cosa-fare-a-new-york.jpg`
        ],
        [
            'name' => 'Los Angeles',
            'country' => 'United States',
            'picture' => `https://www.tusoperator.it/wp-content/uploads/2015/06/LOS-ANGELES_cosa-vedere-assolutamente-in-un-giorno.jpg`
        ],
        [
            'name' => 'Las Vegas',
            'country' => 'United States',
            'picture' => `https://www.viaggi-usa.it/wp-content/uploads/2014/03/Cosa-vedere-a-Las-Vegas.jpg`
        ],
        [
            'name' => 'Washington DC',
            'country' => 'United States',
            'picture' => `https://www.flytap.com/-/media/Flytap/new-tap-pages/destinations/north-america/united-states/washington/destinations-washington-banner-mobile-1024x553.jpg`
        ],
        [
            'name' => 'San Francisco',
            'country' => 'United States',
            'picture' => `https://static2-viaggi.corriereobjects.it/wp-content/uploads/2015/06/san-francisco1.jpg?v=134092`
        ]
    ];
    header('Content-Type: application/json');
    echo json_encode($cities);

    // var_dump($cities);
?>