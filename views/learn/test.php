<?php
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<div>

    <style>
        input[type="radio"]{
            width: 25px;
            height: 25px
        }

        div[type="question"] {
            border-radius: 15px;
        }

        .question {

        }

    </style>

    <h4 class="display-3 text-center" style="margin-top: 40px; margin-bottom: 40px; font-size: 40px; font-weight: 700;">Тестирование</h4>


<div type="question" class="container p-5 mx-my-auto shadow-lg mb-4" >
    <p class="blockquote text-center">1) Как расшифровывается аббревиатура IED</p>
    <input class="ml-lg-5" type="radio" name="r1" id="Answer" data-value='0'><label class="ml-4 ">Информационно электронное реле</label><br>
    <input class="ml-lg-5" type="radio" name="r1" id="Answer" data-value='0'><label class="ml-4 text-md-center">Интеллектуальное устройство
    учета</label><br>
    <input class="ml-lg-5" type="radio" name="r1" id="Answer" data-value='1'><label class="ml-4 text-md-center">Интеллектуальное электронное
    устройство</label><br>
    <input class="ml-lg-5" type="radio" name="r1" id="Answer" data-value='0'><label class="ml-4 text-md-center">Международный энергетический
    департамент</label><br>
</div>


<div type="question" class="container p-5 mx-my-auto shadow-lg mb-4" >
    <p class="blockquote text-center">2) Какие сетевые настройки IED влияют на передачу GOOSE-сообщений?</p>
    <input class="ml-lg-5" type="radio" name="r2" id="Answer" data-value='0'><label class="ml-4 text-md-center">MAC –адрес и IP – адрес</label><br>
    <input class="ml-lg-5" type="radio" name="r2" id="Answer" data-value='0'><label class="ml-4 text-md-center">IP-адрес и VLAN</label><br>
    <input class="ml-lg-5" type="radio" name="r2" id="Answer" data-value='0'><label class="ml-4 text-md-center">MAC-адрес и APPID</label><br>
    <input class="ml-lg-5" type="radio" name="r2" id="Answer" data-value='1'><label class="ml-4 text-md-center">Все вместе</label><br>
</div>

<div type="question" class="container p-5 mx-my-auto shadow-lg mb-4" >
    <p class="blockquote text-center">3) К какому механизму передачи данных относятся GOOSE-сообщения?</p>
    <input class="ml-lg-5" type="radio" name="r3" id="Answer" data-value='0'><label class="ml-4 text-md-center">Клиент-сервер</label><br>
    <input class="ml-lg-5" type="radio" name="r3" id="Answer" data-value='0'><label class="ml-4 text-md-center">Master-slave</label><br>
    <input class="ml-lg-5" type="radio" name="r3" id="Answer" data-value='1'><label class="ml-4 text-md-center">Издатель-подписчик</label><br>
    <input class="ml-lg-5" type="radio" name="r3" id="Answer" data-value='0'><label class="ml-4 text-md-center">Точка-точка</label><br>
</div>


<div type="question" class="container p-5 mx-my-auto shadow-lg mb-4" >
    <p class="blockquote text-center">4) Какие первоначальные четыре октета MAC-адреса зарезервировано за ТК57 МЭК?</p>
    <input class="ml-lg-5" type="radio" name="r4" id="Answer" data-value='0'><label class="ml-4 text-md-center">01:0D:BB:01</label><br>
    <input class="ml-lg-5" type="radio" name="r4" id="Answer" data-value='0'><label class="ml-4 text-md-center">00:0С:ВB:01</label><br>
    <input class="ml-lg-5" type="radio" name="r4" id="Answer" data-value='0'><label class="ml-4 text-md-center">01:0С:CD:04</label><br>
    <input class="ml-lg-5" type="radio" name="r4" id="Answer" data-value='1'><label class="ml-4 text-md-center">01:0C:CD:01</label><br>
</div>


<div type="question" class="container p-5 mx-my-auto shadow-lg mb-4" >
    <p class="blockquote text-center">5) В каком диапазоне можно задавать VLAN для устройств, обменивающихся GOOSE сообщении?</p>
    <input class="ml-lg-5" type="radio" name="r5" id="Answer" data-value='0'><label class="ml-4 text-md-center">0-9999</label><br>
    <input class="ml-lg-5" type="radio" name="r5" id="Answer" data-value='1'><label class="ml-4 text-md-center">0-4095</label><br>
    <input class="ml-lg-5" type="radio" name="r5" id="Answer" data-value='0'><label class="ml-4 text-md-center">0-1000</label><br>
    <input class="ml-lg-5" type="radio" name="r5" id="Answer" data-value='0'><label class="ml-4 text-md-center">0-512</label><br>
</div>


<div type="question" class="container p-5 mx-my-auto shadow-lg mb-4" >
    <p class="blockquote text-center">6) В какой главе серии стандартов МЭК 61850 описывается механизм передачи GOOSE сообщений?</p>
    <input class="ml-lg-5" type="radio" name="r6" id="Answer" data-value='0'><label class="ml-4 text-md-center">МЭК 61850-6</label><br>
    <input class="ml-lg-5" type="radio" name="r6" id="Answer" data-value='0'><label class="ml-4 text-md-center">МЭК 61850-7-4</label><br>
    <input class="ml-lg-5" type="radio" name="r6" id="Answer" data-value='1'><label class="ml-4 text-md-center">МЭК 61850-8-1</label><br>
    <input class="ml-lg-5" type="radio" name="r6" id="Answer" data-value='0'><label class="ml-4 text-md-center">МЭК 61850-9-2</label><br>
</div>


<div type="question" class="container p-5 mx-my-auto shadow-lg mb-4" >
    <p class="blockquote text-center">7) Можно ли задавать одинаковые MAC-адреса разным IED?</p>
    <input class="ml-lg-5" type="radio" name="r7" id="Answer" data-value='0'><label class="ml-4 text-md-center">ДА</label><br>
    <input class="ml-lg-5" type="radio" name="r7" id="Answer" data-value='1'><label class="ml-4 text-md-center">НЕТ</label><br>
</div>


<div type="question" class="container p-5 mx-my-auto shadow-lg mb-4" >
    <p class="blockquote text-center">8) Как расшифровывается аббревиатура GOOSE?</p>
    <input class="ml-lg-5" type="radio" name="r8" id="Answer" data-value='1'><label class="ml-4 text-md-center">Общее объектно-ориентированное событие на
    подстанции</label><br>
    <input class="ml-lg-5" type="radio" name="r8" id="Answer" data-value='0'><label class="ml-4 text-md-center">Быстрое сообщение релейной защиты</label><br>
    <input class="ml-lg-5" type="radio" name="r8" id="Answer" data-value='0'><label class="ml-4 text-md-center">Никак не расшифровывается, это название
    птицы</label><br>
    <input class="ml-lg-5" type="radio" name="r8" id="Answer" data-value='0'><label class="ml-4 text-md-center">Сообщение для передачи объема данных в
    энергетике</label><br>
</div>


<div type="question" class="container p-5 mx-my-auto shadow-lg mb-4" >
    <p class="blockquote text-center">9) К какому методу передачи трафика относится GOOSE-сообщения?</p>
    <input class="ml-lg-5" type="radio" name="r9" id="Answer" data-value='0'><label class="ml-4 text-md-center">Unicast</label><br>
    <input class="ml-lg-5" type="radio" name="r9" id="Answer" data-value='0'><label class="ml-4 text-md-center">Broadcast</label><br>
    <input class="ml-lg-5" type="radio" name="r9" id="Answer" data-value='1'><label class="ml-4 text-md-center">Multicast</label><br>
</div>


<div type="question" class="container p-5 mx-my-auto shadow-lg mb-4" >
    <p class="blockquote text-center">10) По какому интерфейсу передаются GOOSE – сообщения?</p>
    <input class="ml-lg-5" type="radio" name="r10" id="Answer" data-value='0'><label class="ml-4 text-md-center">RS-485</label><br>
    <input class="ml-lg-5" type="radio" name="r10" id="Answer" data-value='0'><label class="ml-4 text-md-center">RS-422</label><br>
    <input class="ml-lg-5" type="radio" name="r10" id="Answer" data-value='1'><label class="ml-4 text-md-center">Ethernet</label><br>
    <input class="ml-lg-5" type="radio" name="r10" id="Answer" data-value='0'><label class="ml-4 text-md-center">RS-232</label><br>
</div>


<div type="question" class="container p-5 mx-my-auto shadow-lg mb-4" >
    <p class="blockquote text-center">11) Какое минимальное время между дублирующими GOOSE-сообщениями типа 1А может быть установлено согласно
        «Корпоративному профилю МЭК 61850»?</p>
    <input class="ml-lg-5" type="radio" name="r11" id="Answer" data-value='1'><label class="ml-4 text-md-center">4 мс</label><br>
    <input class="ml-lg-5" type="radio" name="r11" id="Answer" data-value='0'><label class="ml-4 text-md-center">10 мс</label><br>
    <input class="ml-lg-5" type="radio" name="r11" id="Answer" data-value='0'><label class="ml-4 text-md-center">1 мс</label><br>
    <input class="ml-lg-5" type="radio" name="r11" id="Answer" data-value='0'><label class="ml-4 text-md-center">1 мкс</label><br>
</div>


<div type="question" class="container p-5 mx-my-auto shadow-lg mb-4" >
    <p class="blockquote text-center">12) На каком уровне модели OSI передаются GOOSE – сообщения?</p>
    <input class="ml-lg-5" type="radio" name="r12" id="Answer" data-value='1'><label class="ml-4 text-md-center">Канальный</label><br>
    <input class="ml-lg-5" type="radio" name="r12" id="Answer" data-value='0'><label class="ml-4 text-md-center">Транспортный</label><br>
    <input class="ml-lg-5" type="radio" name="r12" id="Answer" data-value='0'><label class="ml-4 text-md-center">Прикладной</label><br>
    <input class="ml-lg-5" type="radio" name="r12" id="Answer" data-value='0'><label class="ml-4 text-md-center">Сетевой</label><br>
</div>


<div type="question" class="container p-5 mx-my-auto shadow-lg mb-4" >
    <p class="blockquote text-center">13) Как обозначается устройство на цифровой подстанции передающее/принимающее информации и имеющее хотя бы один
        процессор?</p>
    <input class="ml-lg-5" type="radio" name="r13" id="Answer" data-value='1'><label class="ml-4 text-md-center">IED</label><br>
    <input class="ml-lg-5" type="radio" name="r13" id="Answer" data-value='0'><label class="ml-4 text-md-center">LED</label><br>
    <input class="ml-lg-5" type="radio" name="r13" id="Answer" data-value='0'><label class="ml-4 text-md-center">VMA</label><br>
    <input class="ml-lg-5" type="radio" name="r13" id="Answer" data-value='0'><label class="ml-4 text-md-center">STP</label><br>
</div>


<div type="question" class="container p-5 mx-my-auto shadow-lg mb-4" >
    <p class="blockquote text-center">14) На каком уровне передается информация посредством GOOSE – сообщений?</p>
    <input class="ml-lg-5" type="radio" name="r14" id="Answer" data-value='0'><label class="ml-4 text-md-center">Кольцевой</label><br>
    <input class="ml-lg-5" type="radio" name="r14" id="Answer" data-value='1'><label class="ml-4 text-md-center">Горизонтальный</label><br>
    <input class="ml-lg-5" type="radio" name="r14" id="Answer" data-value='0'><label class="ml-4 text-md-center">Вертикальный</label><br>
    <input class="ml-lg-5" type="radio" name="r14" id="Answer" data-value='0'><label class="ml-4 text-md-center">Сквозной</label><br>
</div>


<div type="question" class="container p-5 mx-my-auto shadow-lg mb-4" >
    <p class="blockquote text-center">15) По какому механизму передачи данных работают GOOSE-сообщения?</p>
    <input class="ml-lg-5" type="radio" name="r15" id="Answer" data-value='0'><label class="ml-4 text-md-center">TPAA</label><br>
    <input class="ml-lg-5" type="radio" name="r15" id="Answer" data-value='1'><label class="ml-4 text-md-center">MCAA</label><br>
    <input class="ml-lg-5" type="radio" name="r15" id="Answer" data-value='0'><label class="ml-4 text-md-center">P2P</label><br>
    <input class="ml-lg-5" type="radio" name="r15" id="Answer" data-value='0'><label class="ml-4 text-md-center">По всем перечисленным</label><br>
</div>

<div  class=" container mx-my-auto mb-4">
    <button id="btnResutl" class="btn rounded-pill btn-success btn-block blockquote text">Закончить тестирование</button>
</div>
<div id="resultFild" style="text-align: center; margin-top: 50px; margin-bottom: 80px"></div>

<script language="JavaScript">
    var btnResutl = document.getElementById('btnResutl');
    var resultFild = document.getElementById('resultFild');
    var inputFild = document.getElementsByTagName('input');
    btnResutl.addEventListener('click', function () {
        let resultedInputs = document.querySelectorAll("input[type='radio']:checked");
        let result = 0;
        Array.prototype.map.call(resultedInputs, (el) => {
            result += parseInt(el.dataset.value);
        });
        console.log(result);
        resultFild.innerHTML = "Результат "+result + ' из 15 баллов';
        alert("Результат "+result + ' из 15 баллов');
        window.location.href = "/learn";
    });</script>

</div>
