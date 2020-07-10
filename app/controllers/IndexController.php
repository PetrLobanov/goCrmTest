<?php

namespace Controllers;

use Models\SendMail;


Class IndexController extends BaseController {

    public function index() {


        //Если форма отправлена
        if (isset($_POST) && !empty($_POST)) {


            $model = new SendMail();

            $send = $model->send($_POST['email'], $_POST['city']);

            if ($send === 'ok') {

                echo 'Сообщение отправлено!';

            } else {

                print_r($send);

            }

            return false;

        }


        //Загрузить интерфейс
        $this->view('index', 'index-layout', ['test' => '1123', 'hello' => '22', 'title'=> 'title']);

    }

    public function hello() {

    }

}
