<?php

namespace Route;

Class Web {

    private $path = [

        '/' => 'IndexController@index',
        '/hello' => 'IndexController@hello',

    ];

    private function checkControllerAndUrl() {

        //Получаем URL
        $url = $_SERVER['REQUEST_URI'];


        //Ищем его в массиве
        if($this->path[$url]) {

            //Если найден

            //Разделим строку.
            //Первый элемент название контроллера
            //Второй элемент название метода в контроллере

            $controller = explode('@', $this->path[$url]);

            //Проверим Файл контроллера на существоавание

            if (file_exists('app/controllers/'.$controller[0].'.php')) {

                //Если контроллер найден
                return $controller;

            } else {

                exit('Контроллер не найден');

            }


        } else {

            //Если не найден 404
            exit('404');

        }

    }


     public function run() {

        $array = $this->checkControllerAndUrl();


        //Имя класса
        $className = "\Controllers\\".$array[0];

        //Объявить класс
        $controller = new $className();

        //Проверим есть ли метод

        if (method_exists($controller, $array[1])) {

            $methodName = $array[1];

            //Если найден, вызываем
            $controller->$methodName();

        } else {

            exit('Метод не найден!');

        }


    }



}
