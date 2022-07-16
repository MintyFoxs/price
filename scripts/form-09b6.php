<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Отправка новой формы',
    'email_message' => 'У вас есть новая отправка формы',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'report@mifyx.ru',
    'to' => 'report@mifyx.ru'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Никнейм',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Никнейм\' is required.'
    )
    ),
    'me' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'Выбрать что вы хотите',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Выбрать что вы хотите\' is required.'
    )
    ),
    'me-num' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Сколько вы хотите?',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Сколько вы хотите?\' is required.'
    )
    ),
    'he' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Выбрать что Вы отдадите',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Выбрать что Вы отдадите\' is required.'
    )
    ),
    'me-num-1' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'Сколько Вы отдадите?',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Сколько Вы отдадите?\' is required.'
    )
    ),
    'message' => array(
    'order' => 6,
    'type' => 'string',
    'label' => 'Комментарий',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Комментарий\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>