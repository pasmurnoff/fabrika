<?php
class CronManager
{
    protected $arguments;
    protected $functionName;

    public function __construct(array $arguments, string $functionName)
    {
        $this->arguments = $arguments;
        $this->functionName = $functionName;

        $this->add();
    }

    public function addTime($schedules)
    {
        $schedules[$this->arguments['timeName']] = [
            'interval' => $this->arguments['time'],
            'display' => $this->arguments['timeDisplay']
        ];

        return $schedules;
    }

    public function cronActivation()
    {
        if (!wp_next_scheduled($this->arguments['taskName'])) {
            wp_schedule_event(time(), $this->arguments['timeName'], $this->arguments['taskName']);
        }
    }

    public function add()
    {
        if (function_exists($this->functionName)) {
            /**
             * регистрируем интервалы для крона
             */
            add_filter('cron_schedules', [$this, 'addTime']);

            /**
             * добавляем в крон новые таски
             */
            add_action('wp', [$this, 'cronActivation']);

            /**
             * регистрируем новую таску для крона
             */
            add_action($this->arguments['taskName'], $this->functionName);
        }
    }
}

//function test2()
//{
//    wp_insert_post([
//        'post_title' => date('H-i-s'),
//        'post_content' => 'test',
//        'post_status' => 'publish',
//        'post_author' => 1,
//        'post_type' => 'post',
//    ]);
//}
//
//new CronManager([
//    'timeName' => 'pyatak',
//    'timeDisplay' => 'pyatak',
//    'taskName' => 'pyatak',
//    'time' => 60,
//], 'test2');

function generateByButton()
{
//    if (isset($_POST['XLSGenerate'])) {
//        generatePriceList();
//    }
    generatePriceList();
}
add_action('generateXLS', 'generateByButton');

new CronManager([
    'timeName' => 'vinny',
    'timeDisplay' => 'vinny',
    'taskName' => 'vinny',
    'time' => 60,
], 'generateByButton');
