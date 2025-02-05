<?php

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
            'label' => 'Longitude',
        ],
        'latitude' => [
            'label' => 'Latitude',
        ],
        'unit' => [
            'label' => 'Unità',
        ],
        'deleted_at' => [
            'label' => 'Data di eliminazione',
        ],
        'radius' => [
            'label' => 'Raggio',
        ],
        'polizza_convenzione_pratica_sconto' => [
            'label' => 'Polizza convenzione pratica sconto',
        ],
        'data_pagamento' => [
            'label' => 'Data pagamento',
        ],
        'polizza_convenzione_istanza' => [
            'polizza_convenzione' => [
                'compagnia_assicurativa' => [
                    'nome' => [
                        'label' => 'Nome compagnia assicurativa',
                    ],
                ],
                'nome' => [
                    'label' => 'Nome polizza convenzione',
                ],
            ],
        ],
        'stato_pratica' => [
            'descrizione' => [
                'label' => 'Descrizione stato pratica',
            ],
        ],
        'cliente' => [
            'nominativo' => [
                'label' => 'Nominativo cliente',
            ],
        ],
        'data_scadenza' => [
            'label' => 'Data di scadenza',
        ],
        'roles' => [
            'name' => [
                'label' => 'roles.name',
            ],
        ],
        'competent_health_unit' => [
            'label' => 'competent_health_unit',
        ],
        'tax_code' => [
            'label' => 'tax_code',
        ],
        'vat_number' => [
            'label' => 'vat_number',
        ],
        'company_office' => [
            'label' => 'company_office',
        ],
        'business_closed' => [
            'label' => 'business_closed',
        ],
        'company_name' => [
            'label' => 'company_name',
        ],
        'address' => [
            'label' => 'address',
        ],
        'street_number' => [
            'label' => 'street_number',
        ],
        'province' => [
            'label' => 'province',
        ],
        'postal_code' => [
            'label' => 'postal_code',
        ],
        'phone' => [
            'label' => 'phone',
        ],
        'fax' => [
            'label' => 'fax',
        ],
        'mobile' => [
            'label' => 'mobile',
        ],
        'notes' => [
            'label' => 'notes',
        ],
        'activity' => [
            'label' => 'activity',
        ],
        'determina' => [
            'label' => 'determina',
        ],
        'data_aggiudicazione' => [
            'label' => 'data_aggiudicazione',
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
