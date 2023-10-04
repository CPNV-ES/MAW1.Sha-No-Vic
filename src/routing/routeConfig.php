<?php
return [
    'Index' => [
        'path' => '/',
        'controller' => 'IndexController',
        'method' => 'index'
    ],
    'exercises' => [ //http://exercice-looper.mycpnv.ch/ button : Manage an exercise
        'path' => '/exercises',
        'controller' => 'exercisesController',
        'method' => 'exercises'
    ],
    'manageFields' => [ //http://exercice-looper.mycpnv.ch/exercises button : Manage fields
        'path' => '/exercises/:idExercise/fields',
        'controller' => 'exercisesController',
        'method' => 'manageFields'
    ],
    'destroyExercise' => [ //http://exercice-looper.mycpnv.ch/exercises http://exercice-looper.mycpnv.ch/exercises/:idExercise/fields button : Destroy 
        'path' => '/exercises',
        'controller' => 'exercisesController',
        'method' => 'destroyExercise'
    ],
    'publishExercise' => [ //http://exercice-looper.mycpnv.ch/exercises button : be ready for answers http://exercice-looper.mycpnv.ch/exercises/:idExercise/fields button : complete and be ready for answers
        'path' => '/exercises',
        'controller' => 'exercisesController',
        'method' => 'publishExercise'
    ],
    'newExercise' => [ //http://exercice-looper.mycpnv.ch button : create an exercise
        'path' => '/exercises/new',
        'controller' => 'exercisesController',
        'method' => 'newExercise'
    ],
    'createExercise' => [ //http://exercice-looper.mycpnv.ch/exercises/new button : create exercise
        'path' => '/exercises/:idExercise/fields',
        'controller' => 'exercisesController',
        'method' => 'createExercise'
    ],
    'createField' => [ //http://exercice-looper.mycpnv.ch/exercises/:idExercise/fields button : create field
        'path' => '/exercises/:idExercise/fields',
        'controller' => 'exercisesController',
        'method' => 'createField'
    ],
    'editField' => [ //http://exercice-looper.mycpnv.ch/exercises/:idExercise/fields button : edit field
        'path' => 'exercises/:idExercise/fields/:idField/edit',
        'controller' => 'exercisesController',
        'method' => 'createField'
    ],
    'showExerciseFullfilments' => [ //http://exercice-looper.mycpnv.ch/exercises button : show results
        'path' => '/exercises/:idExercise/results',
        'controller' => 'fulfillmentsController',
        'method' => 'showFulfillments'
    ],
    'showFulfillments' => [ // no url button : none
        'path' => '/exercises/:idExercise/fulfillments',
        'controller' => 'fulfillmentsController',
        'method' => 'showFulfillments'
    ],
    'showFieldFulfillments' => [ // http://exercice-looper.mycpnv.ch/exercises/:idExercise/results/ button : field name
        'path' => 'exercises/:idExercise/results/:idField',
        'controller' => 'fulfillmentsController',
        'method' => 'showFieldFulfillments'
    ],
];
