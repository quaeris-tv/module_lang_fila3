<?php

declare(strict_types=1);

return [
    'fields' => [
        'geocomplete' => [
            'label' => 'Geocompletamento',
            'tooltip' => 'Inserisci un indirizzo o una posizione geografica.',
            'placeholder' => 'Es. Via Roma, Milano',
        ],
        'radius' => [
            'label' => 'Raggio',
            'tooltip' => 'Specifica il raggio in cui effettuare la ricerca.',
            'placeholder' => 'Es. 10 km',
        ],
        'unit' => [
            'label' => 'Unità',
            'tooltip' => 'Seleziona l\'unità di misura per il raggio.',
            'placeholder' => 'Es. chilometri o miglia',
        ],
        'activity' => [
            'label' => 'Attività',
            'tooltip' => 'Indica l\'attività correlata.',
            'placeholder' => 'Es. Sport, Lavoro, Altro',
        ],
        'notes' => [
            'label' => 'Note',
            'tooltip' => 'Aggiungi eventuali note aggiuntive.',
            'placeholder' => 'Scrivi le tue note qui...',
        ],
        'end_date' => [
            'label' => 'Data di Fine',
            'tooltip' => 'Inserisci la data di termine per l\'attività.',
            'placeholder' => 'GG/MM/AAAA',
        ],
        'failed_job_ids' => [
            'label' => 'ID Job Falliti',
            'tooltip' => 'Elenco degli ID dei job falliti (se presenti).',
            'placeholder' => 'Es. 123, 456',
        ],
        'competent_health_unit' => [
            'label' => 'Unità Sanitaria Competente',
            'tooltip' => 'Specifica l\'unità sanitaria competente.',
            'placeholder' => 'Inserisci il nome dell\'unità sanitaria',
        ],
        'vat_number' => [
            'label' => 'Partita IVA',
            'tooltip' => 'Inserisci la partita IVA dell\'azienda o dell\'utente.',
            'placeholder' => 'Es. 12345678901',
        ],
        'tax_code' => [
            'label' => 'Codice Fiscale',
            'tooltip' => 'Inserisci il codice fiscale dell\'utente.',
            'placeholder' => 'Es. RSSMRA85M01H501Z',
        ],
    ],
];
