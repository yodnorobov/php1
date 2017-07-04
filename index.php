<?php

$notes['request']['notes']['add']=array(
    array(
        'element_id'=>15128010,
        'last_modified'=> time(),
        'element_type'=>3,//1 - контакт 2-сделка 3-компания
        'note_type'=>10,  //10 или 11, входящий или исходящий
        'text' => json_encode( //старый формат данных, чтобы не переписывать бекенд и фронтенд amoCRM
            array(
                'UNIQ' => '5d2d284cff911e60c8cfa0db03ea4cec', //строка с уникальным ID
                'LINK' => 'http://example.com/call_112.mp3', //прямая ссылка на запись звонка (optional)
                'PHONE' => '9998887766', //номер телефона
                'DURATION' => 555, //длительность в секундах
                'SRC'=>'test_widget', //идентификатор виджета телефонии
                'call_status' => '3', //статус
                'call_result' => 'Поговорили' //результат (необязательно)
            )
        )
    )
);

echo json_encode($notes);
