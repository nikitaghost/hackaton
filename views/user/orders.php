<?php
    $this->title = "Личный кабинет";
?>

<section class="" style="margin-top: 30px; margin-bottom: 50px">
    <div class="container">
        <div class="row">
            <div class="account-box">
                <h4>Ваши заказы</h4>
                <div class="orders">
                    <?php if (!empty($dataOrders)) {
                        foreach ($dataOrders as $o) { ?>
                        <div class="order">
                            <div class="number">Номер заказа: <?=$o['id']?></div>
                            <div class="date">Дата заказа: <?= date('d.m.Y H:i', strtotime($o['order_date']))?></div>
                            <div class="sum">Сумма к оплате: <?=$o['sum']?> рублей. </div>
                            <div class="payment">Статус оплаты: <?=$o['payment']?></div>
                            <div class="delivery">Доставка: <?=$o['delivery']?></div>
                            <div class="status">Статус заказа: <?=$o['status']?></div>
                            <a href="/user/order/<?=$o['id']?>">Полная информацио о заказе</a>
                        </div>
                    <?php } } ?>
                </div>
            </div>
        </div>
    </div>
</section>