<?php
new CronManager([
    'timeName' => 'once_a_day',
    'timeDisplay' => 'Раз в сутки',
    'taskName' => 'generate_price_list',
    'time' => 60*60*24,
], 'generatePriceList');

new CronManager([
    'timeName' => 'once_a_day',
    'timeDisplay' => 'Раз в сутки',
    'taskName' => 'generate_price_list_PDF',
    'time' => 60*60*24,
], 'priceListPdf');
