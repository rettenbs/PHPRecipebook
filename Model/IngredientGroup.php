<?php
App::uses('AppModel', 'Model');
/**
 * IngredientGroup Model
 */
class IngredientGroup extends AppModel {

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
            'Recipe' => array(
                    'className' => 'Recipe',
                    'foreignKey' => 'recipe_id',
            ),
    );

    public $hasMany = array(
        'IngredientMapping' => array(
            'className' => 'IngredientMapping',
            'foreignKey' => 'group_id',
            'order' => 'IngredientMapping.sort_order',
            'dependent' => true
        )
    );
    
}
