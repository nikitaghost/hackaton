<?php
    $this->title = 'Информация о заказе';
?>



<section class="" style="margin-top: 30px; margin-bottom: 50px">
    <div class="container">
        <div class="row">
            <div class="account-box">
                <h4>Заказ номер: <?=$dataOrder['id']?> </h4>

                <table class="order-list">
                    <tr>
                        <th colspan="2">Товар</th>
                        <th  style="text-align: center;">Цена</th>
                        <th  style="text-align: center;">Количество</th>
                        <th  style="text-align: center;">Всего</th>
                    </tr>
                    <?php foreach ($dataOrder['list'] as $p) { ?>
                    <tr>
                        <td style="width: 180px;"><a href="/product/<?=$p['url']?>"><div class="img" style="background-image: url('/img/product/<?=$p['img']?>')"></div></a></td>
                        <td><a href="/product/<?=$p['url']?>"><?=$p['name']?></a><div class="option" style="color: #9d9d9d;"><?php if(!empty($p['option'])){echo $p['option'];}?></div></td>
                        <td style="text-align: center;">₽<?=$p['price']?></td>
                        <td style="text-align: center;"><?=$p['count']?></td>
                        <td style="text-align: center;">₽<?=$p['total']?></td>
                    </tr>
                    <? } ?>
                </table>

                <h5 class="subtotal" style="text-align: right; margin-top: 30px;">Всего: ₽<?=$dataOrder['sum']?></h5>

                <div class="order-info">
                    <div>Статус заказа: <?= $dataOrder['status'] ?></div>
                    <div>Дата заказа: <?= date('d.m.Y H:i', strtotime($dataOrder['order_date']))?></div>
                    <div>Оплата: <?php if ($dataOrder['payment'] == 0) { echo "Заказ не оплачен.";} else { echo "Заказ оплачен"; } if (($dataOrder['payment'] == 0) and ($dataOrder['delivery'] != 0)) { echo " <a href='/payment/".$dataOrder['id']."'>Необходимо оплатить заказ</a>";} ?></div>
                    <div>Доставка: <?= $dataOrder['adress'] ?></div>
                    <?php if($dataOrder['delivery'] != 0) { ?><div>Для изменения адреса доставки после оформления заказа, обратитесь в <a href="/support">поддержку</a></div><? } ?>

                    <?php if(($dataOrder['payment'] == 0) and ($dataOrder['status'] != "Отменён")) { ?>
                    <div class="order-options">
                        <a href="/payment/<?=$dataOrder['id']?>" class="button">Оплатить заказ</a>
                        <a href="/cancel-order/<?=$dataOrder['id']?>" class="button btn-red" onclick="return confirm('Вы действительно хотите отменить заказ?');">Отменить заказ</a>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
</section>
