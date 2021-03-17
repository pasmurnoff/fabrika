<?php
require_once __DIR__  . '/manager.php';

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
