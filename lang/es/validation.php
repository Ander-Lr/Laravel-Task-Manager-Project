<?php

return [

    'required' => 'El campo :attribute es obligatorio.',
    'min' => [
        'string' => 'El campo :attribute debe contener al menos :min caracteres.',
    ],
    'max' => [
        'string' => 'El campo :attribute no debe exceder :max caracteres.',
    ],
    'date' => 'El campo :attribute no es una fecha válida.',
    'after_or_equal' => 'El campo :attribute debe ser igual o posterior a hoy.',

    'attributes' => [
        'title' => 'título',
        'description' => 'descripción',
        'due_date' => 'fecha límite',
    ],
];
