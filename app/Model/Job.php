<?php
class Job extends AppModel{
    public $validate = array(
        'company' => array(
            'rule' => array('minLength', '3'),
            'message' => 'Mindestens 3 Zeichen angeben'
        ),
        'vacancy' => array(
            'rule' => array('minLength', '5'),
            'message' => 'Mindestens 5 Zeichen angeben'
        ),
        'description' => array(
            'rule' => array('minLength', '8'),
            'message' => 'Mindestens 8 Zeichen angeben'
        ),
        'email' => 'email'
    );
}
