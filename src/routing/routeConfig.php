<?php
return [
    'Index' => [
        'path' => '/',
        'controller' => 'IndexController',
        'method' => 'index',
        'httpMethod' => 'GET'
    ],
    'takeAnExercise' => [ //http://exercice-looper.mycpnv.ch/ button : take an exercise
        'path' => '/exercises/answering',
        'controller' => 'ExercisesController',
        'method' => 'takeExercises',
        'httpMethod' => 'GET'

    ],
    'takeOneExercise' => [ //http://exercice-looper.mycpnv.ch/ button : take an exercise
        'path' => '/exercises/:id/fulfillments/new',
        'controller' => 'ExercisesController',
        'method' => 'takeOneExercise',
        'httpMethod' => 'GET'
    ],
    'saveExerciseFullfilment' => [ //http://exercice-looper.mycpnv.ch/exercises/29/fulfillments/new button : save
        'path' => '/exercises/:idExercise/fulfillments',
        'controller' => 'ExercisesController',
        'method' => 'SaveExerciseFullfilment',
        'httpMethod' => 'POST'
    ],
    'editExerciseFullfilment' => [ //http://exercice-looper.mycpnv.ch/exercises/29/fulfillments/new button : save
        'path' => '/exercises/:idExercise/fulfillments/:id/edit',
        'controller' => 'ExercisesController',
        'method' => 'editExerciseFullfilment',
        'httpMethod' => 'POST'
    ],
    'exercises' => [ //http://exercice-looper.mycpnv.ch/ button : Manage an exercise
        'path' => '/exercises',
        'controller' => 'ExercisesController',
        'method' => 'manageExercises',
        'httpMethod' => 'GET'
    ],

    'manageFields' => [ //http://exercice-looper.mycpnv.ch/exercises button : Manage fields
        'path' => '/exercises/:idExercise/fields',
        'controller' => 'ExercisesController',
        'method' => 'manageFields',
        'httpMethod' => 'GET'
    ],
    'destroyExercise' => [ //http://exercice-looper.mycpnv.ch/exercises http://exercice-looper.mycpnv.ch/exercises/:idExercise/fields button : Destroy 
        'path' => '/exercises',
        'controller' => 'exercisesController',
        'method' => 'destroyExercise',
        'httpMethod' => 'DELETE'
    ],
    'publishExercise' => [ //http://exercice-looper.mycpnv.ch/exercises button : be ready for answers http://exercice-looper.mycpnv.ch/exercises/:idExercise/fields button : complete and be ready for answers
        'path' => '/exercises',
        'controller' => 'exercisesController',
        'method' => 'publishExercise',
        'httpMethod' => 'PUT'
    ],
    'closeExercise' => [ //http://exercice-looper.mycpnv.ch/exercises button : be ready for answers http://exercice-looper.mycpnv.ch/exercises/:idExercise/fields button : complete and be ready for answers
        'path' => '/exercises',
        'controller' => 'exercisesController',
        'method' => 'publishExercise',
        'httpMethod' => 'PUT'
    ],
    'newExercise' => [ //http://exercice-looper.mycpnv.ch button : create an exercise
        'path' => '/exercises/new',
        'controller' => 'exercisesController',
        'method' => 'newExercise',
        'httpMethod' => 'GET'
    ],
    'createExercise' => [ //http://exercice-looper.mycpnv.ch/exercises/new button : create exercise
        'path' => '/exercises/:idExercise/fields',
        'controller' => 'exercisesController',
        'method' => 'createExercise',
        'httpMethod' => 'POST'
    ],
    'createField' => [ //http://exercice-looper.mycpnv.ch/exercises/:idExercise/fields button : create field
        'path' => '/exercises/:idExercise/fields',
        'controller' => 'exercisesController',
        'method' => 'createField',
        'httpMethod' => 'POST'
    ],
    'editField' => [ //http://exercice-looper.mycpnv.ch/exercises/:idExercise/fields button : edit field
        'path' => 'exercises/:idExercise/fields/:idField/edit',
        'controller' => 'exercisesController',
        'method' => 'createField',
        'httpMethod' => 'GET'
    ],
    'updateField' => [ //http://exercice-looper.mycpnv.ch/exercises/:idExercise/fields button : update field
        'path' => 'exercises/:idExercise/fields/:idField',
        'controller' => 'exercisesController',
        'method' => 'createField',
        'httpMethod' => 'POST'
    ],
    'deleteField' => [ //http://exercice-looper.mycpnv.ch/exercises/:idExercise/fields button : edit field
        'path' => 'exercises/:idExercise/fields/:idField',
        'controller' => 'exercisesController',
        'method' => 'createField',
        'httpMethod' => 'DELETE'
    ],
    'showExerciseFullfilments' => [ //http://exercice-looper.mycpnv.ch/exercises button : show results
        'path' => '/exercises/:idExercise/results',
        'controller' => 'fulfillmentsController',
        'method' => 'showFulfillments',
        'httpMethod' => 'GET'
    ],
    'showFulfillments' => [ // no url button : none
        'path' => '/exercises/:idExercise/fulfillments',
        'controller' => 'fulfillmentsController',
        'method' => 'showFulfillments',
        'httpMethod' => 'GET'
    ],
    'showFieldFulfillments' => [ // http://exercice-looper.mycpnv.ch/exercises/:idExercise/results/ button : field name
        'path' => 'exercises/:idExercise/results/:idField',
        'controller' => 'fulfillmentsController',
        'method' => 'showFieldFulfillments',
        'httpMethod' => 'GET'
    ],
];
