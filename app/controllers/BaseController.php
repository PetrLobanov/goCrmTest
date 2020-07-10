<?php

namespace Controllers;

class BaseController {

    public function view($nameView, $layout, $arguments) {

        //Проверим есть ли данные
        if (isset($arguments)) {

            //Преобразуем в переменне
            extract($arguments, EXTR_PREFIX_SAME, 'var');
        }

        $content = function () use ($nameView, $arguments) {

            if (isset($arguments)) {

                extract($arguments, EXTR_PREFIX_SAME, 'var');

            }

            if ($nameView && file_exists('app/views/'.$nameView.'.php')) {

                require_once('app/views/'.$nameView.'.php');

            } else {

                exit('Представление не найдено!');

            }

        };

        //Если есть шаблон
        if ($layout && file_exists('app/views/layouts/'.$layout.'.php')) {

            require_once('app/views/layouts/'.$layout.'.php');

        } else {

            //Вызовем контент

            $content();

        }



    }

}
