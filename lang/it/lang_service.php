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
        'email' => [
            'label' => 'Email',
            'placeholder' => 'esempio@dominio.it',
            'tooltip' => 'Indirizzo email valido',
        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => '\u2022\u2022\u2022\u2022\u2022\u2022\u2022\u2022',
            'tooltip' => 'Password di accesso',
        ],
        'file' => [
            'label' => 'File',
            'placeholder' => 'Seleziona file',
            'tooltip' => 'Seleziona un file da caricare',
        ],
        'data_scadenza' => [
            'label' => 'Data di scadenza',
        ],
        'address' => [
            'label' => 'Indirizzo',
        ],
        'phone' => [
            'label' => 'Telefono',
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
        'delete' => [
            'label' => 'Elimina',
            'tooltip' => 'Elimina questo elemento',
        ],
        'authenticate' => [
            'label' => 'Accedi',
            'tooltip' => 'Effettua l\'accesso',
        ],
    ],
];
