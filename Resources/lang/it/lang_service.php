<?php

declare(strict_types=1);

return [
    'fields' => [
        'created_at' => [
            'label' => 'Data di creazione',
            'placeholder' => 'Seleziona data',
            'tooltip' => 'Data in cui è stato creato il record',
        ],
        'values' => [
            'label' => 'Valori',
            'placeholder' => 'Inserisci i valori',
            'tooltip' => 'Lista dei valori associati',
        ],
        'value' => [
            'label' => 'Valore',
            'placeholder' => 'Inserisci un valore',
            'tooltip' => 'Valore singolo',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'esempio@dominio.it',
            'tooltip' => 'Indirizzo email valido',
        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => 'Inserisci la password',
            'tooltip' => 'Password di accesso',
        ],
        'remember' => [
            'label' => 'Ricordami',
            'tooltip' => 'Mantieni la sessione attiva',
        ],
        'description' => [
            'label' => 'Descrizione',
            'placeholder' => 'Inserisci una descrizione',
            'tooltip' => 'Breve descrizione dell\'elemento',
        ],
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'tooltip' => 'Nome dell\'elemento',
        ],
        'id' => [
            'label' => 'ID',
            'tooltip' => 'Identificativo univoco',
        ],
        'updated_at' => [
            'label' => 'Ultima modifica',
            'tooltip' => 'Data dell\'ultima modifica',
        ],
        'workgroup' => [
            'denominazione' => [
                'label' => 'Gruppo di lavoro',
                'placeholder' => 'Seleziona il gruppo',
                'tooltip' => 'Gruppo di lavoro associato',
            ],
        ],
        'data_inizio_esecuzione' => [
            'label' => 'Data inizio esecuzione',
            'placeholder' => 'Seleziona la data di inizio',
            'tooltip' => 'Data di inizio dell\'esecuzione',
        ],
        'data_fine_esecuzione' => [
            'label' => 'Data fine esecuzione',
            'placeholder' => 'Seleziona la data di fine',
            'tooltip' => 'Data di fine dell\'esecuzione',
        ],
        'toggleColumns' => [
            'label' => 'toggleColumns',
        ],
        'reorderRecords' => [
            'label' => 'reorderRecords',
        ],
        'resetFilters' => [
            'label' => 'resetFilters',
        ],
        'applyFilters' => [
            'label' => 'applyFilters',
        ],
        'openFilters' => [
            'label' => 'openFilters',
        ],
    ],
    'actions' => [
        'save' => [
            'label' => 'Salva',
            'tooltip' => 'Salva le modifiche',
        ],
        'cancel' => [
            'label' => 'Annulla',
            'tooltip' => 'Annulla le modifiche',
        ],
        'create' => [
            'label' => 'Crea nuovo',
            'tooltip' => 'Crea un nuovo elemento',
        ],
        'createAnother' => [
            'label' => 'Crea un altro',
            'tooltip' => 'Crea un altro elemento dopo questo',
        ],
        'edit' => [
            'label' => 'Modifica',
            'tooltip' => 'Modifica questo elemento',
        ],
        'delete' => [
            'label' => 'Elimina',
            'tooltip' => 'Elimina questo elemento',
        ],
        'associate' => [
            'label' => 'Associa',
            'tooltip' => 'Associa ad un elemento esistente',
        ],
        'dissociate' => [
            'label' => 'Dissocia',
            'tooltip' => 'Rimuovi l\'associazione',
        ],
        'attach' => [
            'label' => 'Collega',
            'tooltip' => 'Collega ad un elemento esistente',
        ],
        'detach' => [
            'label' => 'Scollega',
            'tooltip' => 'Rimuovi il collegamento',
        ],
    ],
];
