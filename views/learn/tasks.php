<?php
?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Цифровой тренажер</title>
  </head>
  <body>

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12 head">
                <ul>
                    <li class="navtitle">
                        Р3А
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #0065b3; border: none;">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" onclick="addIED()">IED</a>
                        </div>
                    </li>
                    <li class="navtitle">
                        Промышленные коммутаторы
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #0065b3; border: none;">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" onclick="addCommute()">Коммутатор</a>
                        </div>
                    </li>
                    <li class="navtitle">
                        Связи передачи данных
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #0065b3; border: none;">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" >Оптоволокно</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 content board">
                <div class="taskTime">

<form name=MyForm style="position: absolute;">
  <label for="" class="timer" >Время выполнения задания: </label>
  <input name=stopwatch size=10 value="00:00:00.00" disabled class="timer">
</form>
                </div>
               <!--  <div class="commute">
                    <p class="blocktitle" style="margin-left: 5px;margin-top: 1px; color: white;">Коммутатор</p>
                    <p class="port">Вход 1</p>
                    <p class="port">Вход 2</p>
                    <p class="port">Вход 3</p>
                    <p class="port">Вход 4</p>
                    <p class="port">Вход 5</p>
                    <button class="blockbutton bt">Сетевые настройки</button>
                </div> -->

                <div class="send-button hide" onClick="sendMail();">Отправить сообщение</div>
                <div class="goose-button" onClick="openSettingsGoose();">Подписки GOOSE-сообщений</div>


                <div class="task hide">
                    <div class="button" onclick="$('.task').toggleClass('hide');">Скрыть</div>
                    <div class="button2" onclick="$('.task').toggleClass('hide');">Показать</div>

                    <h1>Задание</h1>
                    <p>Выполните настройки IED на прием-передачу GOOSE-сообщений. Используя интерактивные интелектуальные электронные устройства, настройте передачу сообщения между двумя устройствами.</p>

<p>
                    Текст который идет дальше не несет установок к выполнение задачи, а имеет ознакомительный характер: В декабре 2018 года в компании ПАО «Россети» была утверждена концепция «Цифровая трансформация 2030»,
которая предполагает полное преобразование энергетической электросетевой инфраструктуры до 2030 года
посредством внедрения цифровых технологий. В рамках модернизации компании цифровая подстанция* будет
одним из основных элементов цифрового предприятия электросетевого комплекса. Все новые подстанции
должны быть спроектированы и построены как «цифровые», а действующие, по мере окончания срока
амортизации и (или) полного выхода из строя оборудования следует преобразовывать в «цифровые».</p>

<p>Один из главных вызовов – не допустить разрыва между вводом новых современных электросетевых объектов
(цифровых подстанций) и компетенциями специалистов. И решить эту задачу необходимо максимально быстро.
Компания ПАО «Россети Ленэнерго» ищет возможности разработки специализированного онлайн тренажера
«Цифровая подстанция» для дистанционного обучения профильных специалистов, который, исходя из задания,
должен моделировать практические действия по выбору необходимых элементов цифровой подстанции, их
наладку и настройку.</p>
                </div>
            </div>


            <div class="b-popup device-settings hide" style="z-index: 99999;">
                <div class="b-popup-content back">
                    <div class="close" onclick="closeSettingsDevice();">X</div>
                    <div class="headup"></div>
                    <div class="headown"></div>
                    <div class="device-name">IED1</div>
                    <div class="device-form">
                        <div class="form-group" style="display: none;">
                            <label>ID</label>
                            <input type="text" name="id">
                        </div>
                        <div class="form-group">
                            <label>Имя GCB</label>
                            <input type="text" name="nameGCB">
                        </div>
                        <div class="form-group">
                            <label>GOOSE ID</label>
                            <input type="text" name="gooseId">
                        </div>
                        <div class="form-group">
                            <label>MAC адрес</label>
                            <input type="text" name="mac">
                        </div>
                        <div class="form-group">
                            <label>APP ID</label>
                            <input type="text" name="appId">
                        </div>
                        <div class="form-group">
                            <label>VLAN ID</label>
                            <input type="text" name="vlanId">
                        </div>
                        <div class="form-group">
                            <label>Min Time</label>
                            <input type="text" name="minTime">
                        </div>
                        <div class="form-group">
                            <label>Max Time</label>
                            <input type="text" name="maxTime">
                        </div>
                        <button class="blockbutton"  onClick="saveSettingsDevice();"><p style="margin-top: -5px;">Сохранить</p>
                        </button>

                    </div>
                </div>
            </div>

            <div class="b-popup сommute-settings cs hide" style="z-index: 99999;">
                <div class="b-popup-content back" style="background-color: #292929 !important; width: 650px">
                    <div class="close" onclick="closeSettingsCommute();">X</div>
                    <div class="device-name1">Сетевые настройки</div>
                    <div class="headup1"></div>
                    <div class="headown1"></div>
                    <div class="device-form">
                        <div class="row form">
                           <!--  <div class="col-md-12">
                                <div class="titleIED" style="float: left;"><h5>IED1</h5></div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="ipTitle" id="1">IP Адрес</div>
                                    </div>
                                    <div class="col-md-8">
                                        <input class="input2" type="text" name="ip" id="1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px; margin-bottom: 10px;">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="ipTitle">Маска</div>
                                    </div>
                                    <div class="col-md-8">
                                        <input class="input2" type="text" name="mask" id="1">
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <button class="blockbutton"  onClick="saveSettingsCommute();"><p style="margin-top: -5px;">Сохранить</p>
                        </button>

                    </div>
                </div>
            </div>



           <div class="send-result good hide">
                <a href="http://artemiavasenko.mcdir.ru/learn/test">Сообщение отправленно!<br>
                Нажите для прохождения</a>
            </div>

            <div class="send-result error hide" onclick="$('.send-result').addClass('hide'); $('.send-result').removeClass('show'); ">
                Сообщение не отправлено!
            </div>

            <div class="erors_bord hide">
                <h1>Сообщение не отравленно</h1>
                <h2>Ваши ошибки:</h2>
                <ul>

                </ul>
                <button onclick="location.reload();">Начать заново</button>
                <button onclick="hideError();">Продолжить</button>
            </div>

            <div class="b-popup goose-settings gs hide" style="z-index: 99999;">
                <div class="b-popup-content back">
                    <div class="close" onclick="closeSettingsGoose();">X</div>
                    <div class="headup"></div>
                    <div class="headown">Подписки GOOSE-сообщений</div>
                    <div class="goose-form">

                        <div class="col-md-12">
                            <div class="row">
                                    <div class="title col-md-12">Выходы IED1</div>
                                    <div class="col-md-3">Выходы IED2</div>
                                    <div class="col-md-3">Выход 1</div>
                                    <div class="col-md-3">Выход 2</div>
                                    <div class="col-md-3">Выход 3</div>

                                    <div class="col-md-3">Выход 1</div>
                                    <div class="col-md-3"><input type="checkbox"></div>
                                    <div class="col-md-3"><input type="checkbox"></div>
                                    <div class="col-md-3"><input type="checkbox"></div>

                                    <div class="col-md-3">Выход 2</div>
                                    <div class="col-md-3"><input type="checkbox"></div>
                                    <div class="col-md-3"><input type="checkbox"></div>
                                    <div class="col-md-3"><input type="checkbox"></div>

                                    <div class="col-md-3">Выход 3</div>
                                    <div class="col-md-3"><input type="checkbox"></div>
                                    <div class="col-md-3"><input type="checkbox"></div>
                                    <div class="col-md-3"><input type="checkbox"></div>
                            </div>

                            <div class="row">
                                    <div class="title col-md-12">Выходы IED2</div>
                                    <div class="col-md-3">Выходы IED1</div>
                                    <div class="col-md-3">Выход 1</div>
                                    <div class="col-md-3">Выход 2</div>
                                    <div class="col-md-3">Выход 3</div>

                                    <div class="col-md-3">Выход 1</div>
                                    <div class="col-md-3"><input type="checkbox"></div>
                                    <div class="col-md-3"><input type="checkbox"></div>
                                    <div class="col-md-3"><input type="checkbox"></div>

                                    <div class="col-md-3">Выход 2</div>
                                    <div class="col-md-3"><input type="checkbox"></div>
                                    <div class="col-md-3"><input type="checkbox"></div>
                                    <div class="col-md-3"><input type="checkbox"></div>

                                    <div class="col-md-3">Выход 3</div>
                                    <div class="col-md-3"><input type="checkbox"></div>
                                    <div class="col-md-3"><input type="checkbox"></div>
                                    <div class="col-md-3"><input type="checkbox"></div>
                            </div>

                        </div>


                    <button class="blockbutton" onClick="saveSettingsGoose();"><p style="margin-top: -5px;">Сохранить</p>
                    </button>

                    </div>
                </div>
            </div>

        </div>
    </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
  src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"
  integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="/js/main.js"></script>
    <script src="/js/mask.js"></script>
    <script src="/js/time.js"></script>


  </body>
</html>

