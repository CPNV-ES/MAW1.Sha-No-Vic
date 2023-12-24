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
        'path' => '/exercises/:id/fulfillments',
        'controller' => 'FulfillmentsController',
        'method' => 'save',
        'httpMethod' => 'POST'
    ],
    'editExerciseFulfillment' => [ //http://exercice-looper.mycpnv.ch/exercises/29/fulfillments/edit button : save
        'path' => '/exercises/:id/fulfillments/:id/edit',
        'controller' => 'FulfillmentsController',
        'method' => 'editExerciseFulfillment',
        'httpMethod' => 'GET'
    ],
    'updateExerciseFulfillment' => [ //http://exercice-looper.mycpnv.ch/exercises/29/fulfillments/edit button : save
        'path' => '/exercises/:id/fulfillments/:id/edit',
        'controller' => 'FulfillmentsController',
        'method' => 'updateExerciseFulfillment',
        'httpMethod' => 'PUT'
    ],
    'exercises' => [ //http://exercice-looper.mycpnv.ch/ button : Manage an exercise
        'path' => '/exercises',
        'controller' => 'ExercisesController',
        'method' => 'manageExercises',
        'httpMethod' => 'GET'
    ],

    'manageFields' => [ //http://exercice-looper.mycpnv.ch/exercises button : Manage fields
        'path' => '/exercises/:id/fields',
        'controller' => 'QuestionsController',
        'method' => 'manageQuestions',
        'httpMethod' => 'GET'
    ],
    'destroyExercise' => [ //http://exercice-looper.mycpnv.ch/exercises http://exercice-looper.mycpnv.ch/exercises/:idExercise/fields button : Destroy 
        'path' => '/exercises/:id',
        'controller' => 'exercisesController',
        'method' => 'destroyExercise',
        'httpMethod' => 'DELETE'
    ],
    'changeExerciseStatus' => [ //http://exercice-looper.mycpnv.ch/exercises button : be ready for answers http://exercice-looper.mycpnv.ch/exercises/:idExercise/fields button : complete and be ready for answers
        'path' => '/exercises/:id',
        'controller' => 'exercisesController',
        'method' => 'changeExerciseStatus',
        'httpMethod' => 'PUT'
    ],
    'newExercise' => [ //http://exercice-looper.mycpnv.ch button : create an exercise
        'path' => '/exercises/new',
        'controller' => 'exercisesController',
        'method' => 'newExercise',
        'httpMethod' => 'GET'
    ],
    'createExercise' => [ //http://exercice-looper.mycpnv.ch/exercises/new button : create exercise
        'path' => '/exercises',
        'controller' => 'exercisesController',
        'method' => 'createExercise',
        'httpMethod' => 'POST'
    ],
    'createQuestion' => [ //http://exercice-looper.mycpnv.ch/exercises/:idExercise/fields button : create field
        'path' => '/exercises/:id/fields',
        'controller' => 'QuestionsController',
        'method' => 'createQuestion',
        'httpMethod' => 'POST'
    ],
    'editField' => [ //http://exercice-looper.mycpnv.ch/exercises/:idExercise/fields button : edit field
        'path' => '/exercises/:id/fields/:id',
        'controller' => 'QuestionsController',
        'method' => 'editQuestion',
        'httpMethod' => 'GET'
    ],
    'updateField' => [ //http://exercice-looper.mycpnv.ch/exercises/:idExercise/fields button : update field
        'path' => '/exercises/:id/fields/:id',
        'controller' => 'QuestionsController',
        'method' => 'updateQuestion',
        'httpMethod' => 'POST'
    ],
    'deleteField' => [ //http://exercice-looper.mycpnv.ch/exercises/:idExercise/fields button : edit field
        'path' => '/exercises/:id/fields/:id',
        'controller' => 'QuestionsController',
        'method' => 'deleteQuestion',
        'httpMethod' => 'DELETE'
    ],
    'showExerciseFullfilments' => [ //http://exercice-looper.mycpnv.ch/exercises button : show results
        'path' => '/exercises/:idExercise/results',
        'controller' => 'fulfillmentsController',
        'method' => 'showFulfillments',
        'httpMethod' => 'GET'
    ],
    'showFulfillments' => [ //http://exercice-looper.mycpnv.ch/exercises button : show results
        'path' => '/exercises/:id/results',
        'controller' => 'fulfillmentsController',
        'method' => 'showFulfillments',
        'httpMethod' => 'GET'
    ],
    'showFullfilment' => [ // http://exercice-looper.mycpnv.ch/exercises/:idExercise/results/ button : field name
        'path' => '/exercises/:id/fulfillments/:id',
        'controller' => 'fulfillmentsController',
        'method' => 'showFullfilment',
        'httpMethod' => 'GET'
    ],
    'showFieldFulfillments' => [ // http://exercice-looper.mycpnv.ch/exercises/:idExercise/results/ button : field name
        'path' => '/exercises/:id/results/:id',
        'controller' => 'fulfillmentsController',
        'method' => 'showFieldFulfillments',
        'httpMethod' => 'GET'
    ],
    'manageFulfillments' => [ // http://exercice-looper.mycpnv.ch/exercises/:idExercise/results/ button : field name
        'path' => '/exercises/:id/fulfillments',
        'controller' => 'fulfillmentsController',
        'method' => 'manageFulfillments',
        'httpMethod' => 'GET'
    ],
    'deleteFulfillment' => [ // http://exercice-looper.mycpnv.ch/exercises/:idExercise/results/ button : field name
        'path' => '/exercises/:id/fulfillments/:id',
        'controller' => 'fulfillmentsController',
        'method' => 'deleteFulfillment',
        'httpMethod' => 'DELETE'
    ],
];
