<html>
<style>
    body {
        position: relative;
        font-family: Arial;
        font-size: 12px;
    }
    .text-right {
        text-align: right;
    }
    .footer {
        text-align:center;
    }
    table {
        border-collapse: collapse;
        border: none;


    }

    table, td, th {
        border: none;
    }
    header {
        width:100%;
		font-size: 10px;
    }
    .footer {
        font-size: 10px;
    }
    h1 {
        font-size: 14px;
    }
</style>
<body style="background: #fff; font-family:Calibri,calibri">
<htmlpageheader name="header" styl="width:100%">

            <div style="float: left; width:40%;"><img src="https://fabrikanoskov.ru/logo.png"  style="height:25px;  padding-top: 54px;"/>
            </div>
            <div style="float:right;text-align: right;  width:30%;font-weight: normal; font-size: 10px; padding-top: 60px; padding-left: 159px">
                Многоканальный телефон: 8 800 444 11 56<br/>
                Личный менеджер: <?php echo $manager->contact ?><br/>
                Email: <a href="mailto:mail@fabrikanoskov.ru" style="text-decoration:none">mail@fabrikanoskov.ru</a><br/>
                <a href="http://www.fabrikanoskov.ru" style="text-decoration:none">www.fabrikanoskov.ru</a><br/>
            </div>
            <div style="clear: both"></div>
</htmlpageheader>
<htmlpagefooter name="footer">
    <div class="footer">Ответственный сотрудник по заявке: <?php echo $manager->name . ', '. $manager->contact . ', ' . $manager->email ?></div>
</htmlpagefooter>

<sethtmlpageheader name="header" value="on" show-this-page="1" />
<sethtmlpagefooter name="footer" value="on" show-this-page="1" />

<br/>
<br/>
<br/>
<div class="text-right">
	Исх. номер: <?php echo $order_number ?><br/>
    <?php echo date('Y-m-d'); ?><br/>
    <br/>
    Отделу продаж<br/>
    <?php echo $fabric->name ?><br/>


</div>


<h1 style="text-align: center">Бланк заявка на производство № <?php echo $order_number ?></h1>
<h1 style="text-align: center; font-family: Arial ">Бланк заявка на производство № <?php echo $order_number ?></h1>
<h1 style="text-align: center; font-family: Calibri">Бланк заявка на производство № <?php echo $order_number ?></h1>

<br/>
<br/>
Просим рассмотреть возможность производства следующего вида изделий:<br/><br/>
<div style="font-family: Arial">Просим рассмотреть возможность производства следующего вида изделий:</div>
<div style="font-family: Calibri">Просим рассмотреть возможность производства следующего вида изделий:</div>
<strong>Наименование</strong>: <?php echo $item['style'] ?><br/>
<strong>Размеры</strong>: <?php echo $item['size'] ?><br/>
<strong>Состав</strong>: <?php echo $item['compose'] ?><br/>
<strong>Количество</strong>:  <?php echo $item['qty'] ?><br/>
<strong>Срок изготовления</strong>: <?php echo $item['term'] ?><br/>
<strong>Проходная цена</strong>: <?php echo $item['price'] ?><br/>
<br/><br/>
Изображение будущего изделия:
<?php if (!empty($item['images'])) : ?>

    <table cellpadding="30" cellspacing="20" width="100%">
        <tr>
            <?php foreach($item['images'] as $key => $image) : ?>
                <td width="33%" style="; padding: 10px;">
                    <img src="<?php echo str_replace("./tmp/","http://fabrikanoskov.ru/wp-content/themes/zoa-child/nikita/tmp/",$image['src']) ?>" style="width:100%; height: auto"/>
                </td>
                <?php if (($key+1) % 3 == 0 || (count($item['images']) == $key + 1))  {
					
                    echo "</tr/><tr>";
                } ?>
            <?php endforeach;?>
        </tr>
    </table>
<?php endif;?>


<p>
    Просим дать ответ по текущей заявки в рамках текущего рабочего дня. Если ваша фабрика не укладывается в указанные сроки просим предложить возможные сроки производства, а также при отсутствии необходимого цвета пряжи просим дать ответ по дате его возможного поступления.</p>

<p>Просьба предоставить ответ на заявку в ответном письме на наш запрос для сохранения истории переписки по заявке.</p>


