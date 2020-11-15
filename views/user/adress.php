<?php
    $this->title = "Мои адреса доставки";
?>

<section class="" style="margin-top: 30px; margin-bottom: 50px">
    <div class="container">
        <div class="row">
            <div class="account-box">
                <h4>Адреса доставки</h4>

                <div class="row">
                    <?php if (!empty($dataAdress)) { foreach ($dataAdress as $key => $a) { ?>
                    <div class="col-md-4"  data-adress="<?=$key?>">
                        <div class="adress_card">
                            <p><?=$a?></p>
                            <div class="del" onclick="removeAdress(<?=$key?>);"><i class="ti-close"></i></div>
                        </div>
                    </div>
                    <?php } } ?>
                    <div class="col-md-4" id="new">
                        <div class="adress_card new_card">
                            <div class="new"><button><i class="ti-plus" style="font-size: 20px; line-height: 56px; margin-left: 1px;"></i></button></div>
                        </div>
                    </div>

                    <div class="col-md-4" style="display: none;" id="new_form">
                        <div class="adress_card form_card">
                            <h4>Новый адрес</h4>
                            <form method="GET" id="formx" action="javascript:void(null);" onsubmit="call()">
                                <label>ФИО</label>
                                <input type="text" name="fio">
                                <label>Страна</label>
                                <input type="text" name="country">
                                <label>Республика</label>
                                <input type="text" name="region">
                                <label>Город</label>
                                <input type="text" name="city">
                                <label>Улица</label>
                                <input type="text" name="street">
                                <label>Дом</label>
                                <input type="text" name="house">
                                <label>Квартира</label>
                                <input type="text" name="condo">
                                <label>Почтовый индекс</label>
                                <input type="text" name="p_index">
                                <label>Телефон</label>
                                <input type="text" name="phone">
                                <button>Добавить</button>
                            </form>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</section>