<?php

declare(strict_types=1);

return [
    'fields' => [
        'created_at' => [
            'label' => 'Data di creazione',
            'placeholder' => 'Seleziona data',
            'tooltip' => 'Data in cui è stato creato il record',
        ],
        'updated_at' => [
            'label' => 'Ultima modifica',
            'placeholder' => 'Seleziona data',
            'tooltip' => 'Data dell\'ultima modifica',
        ],
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'tooltip' => 'Nome dell\'elemento',
        ],
        'description' => [
            'label' => 'Descrizione',
            'placeholder' => 'Inserisci una descrizione',
            'tooltip' => 'Breve descrizione dell\'elemento',
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
            'placeholder' => '\\u2022\\u2022\\u2022\\u2022\\u2022\\u2022\\u2022\\u2022',
            'tooltip' => 'Password di accesso',
        ],
        'password_expires_at' => [
            'label' => 'Scadenza password',
            'placeholder' => 'Seleziona data',
            'tooltip' => 'Data di scadenza della password',
        ],
        'email_verified_at' => [
            'label' => 'Email verificata il',
            'placeholder' => 'Data verifica',
            'tooltip' => 'Data di verifica dell\'email',
        ],
        'remember' => [
            'label' => 'Ricordami',
            'tooltip' => 'Mantieni la sessione attiva',
        ],
        'id' => [
            'label' => 'ID',
            'tooltip' => 'Identificativo univoco',
        ],
        'isActive' => [
            'label' => 'Attivo',
            'tooltip' => 'Indica se l\'elemento è attivo',
        ],
        'file' => [
            'label' => 'File',
            'placeholder' => 'Seleziona file',
            'tooltip' => 'Seleziona un file da caricare',
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
            'label' => 'Gestisci colonne',
            'tooltip' => 'Mostra/Nascondi colonne della tabella',
        ],
        'reorderRecords' => [
            'label' => 'Riordina',
            'tooltip' => 'Riordina gli elementi',
        ],
        'resetFilters' => [
            'label' => 'Reimposta filtri',
            'tooltip' => 'Rimuovi tutti i filtri applicati',
        ],
        'applyFilters' => [
            'label' => 'Applica filtri',
            'tooltip' => 'Applica i filtri selezionati',
        ],
        'openFilters' => [
            'label' => 'Filtri',
            'tooltip' => 'Apri il pannello dei filtri',
        ],
        'longitude' => [
            'label' => 'longitude',
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
        'authenticate' => [
            'label' => 'Accedi',
            'tooltip' => 'Effettua l\'accesso',
        ],
        'downloadExample' => [
            'label' => 'Scarica esempio',
            'tooltip' => 'Scarica un file di esempio',
        ],
    ],
];
