<?php

declare(strict_types=1);

return [
    'fields' => [
        'id' => [
            'label' => 'ID',
            'tooltip' => 'Identificativo univoco',
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
        'email' => [
            'label' => 'Email',
            'placeholder' => 'esempio@dominio.it',
            'tooltip' => 'Indirizzo email valido',
        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => '••••••••',
            'tooltip' => 'Password di accesso',
        ],
        'created_at' => [
            'label' => 'Data di creazione',
            'placeholder' => 'Seleziona data',
            'tooltip' => 'Data in cui è stato creato il record',
        ],
        'updated_at' => [
            'label' => 'Ultima modifica',
            'tooltip' => 'Data dell\'ultima modifica',
        ],
        'geocomplete' => [
            'label' => 'Geolocalizzazione',
            'tooltip' => 'Inserisci una posizione geografica',
        ],
        'radius' => [
            'label' => 'Raggio',
            'tooltip' => 'Raggio di ricerca',
        ],
        'unit' => [
            'label' => 'Unità',
            'tooltip' => 'Unità di misura',
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
        'vat_number' => [
            'label' => 'vat_number',
        ],
        'activity' => [
            'label' => 'activity',
        ],
        'failed_job_ids' => [
            'label' => 'failed_job_ids',
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
        'edit' => [
            'label' => 'Modifica',
            'tooltip' => 'Modifica questo elemento',
        ],
        'delete' => [
            'label' => 'Elimina',
            'tooltip' => 'Elimina questo elemento',
        ],
        'authenticate' => [
            'label' => 'Accedi',
            'tooltip' => 'Effettua l\'accesso',
        ],
    ],
    'filters' => [
        'reset' => [
            'label' => 'Reimposta filtri',
            'tooltip' => 'Reimposta tutti i filtri',
        ],
        'apply' => [
            'label' => 'Applica filtri',
            'tooltip' => 'Applica i filtri selezionati',
        ],
        'open' => [
            'label' => 'Apri filtri',
            'tooltip' => 'Mostra/Nascondi pannello filtri',
        ],
    ],
];
