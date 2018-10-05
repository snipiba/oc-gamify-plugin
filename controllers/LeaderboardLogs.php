<?php namespace Octobro\Gamify\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Leaderboard Logs Back-end Controller
 */
class LeaderboardLogs extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Octobro.Gamify', 'gamify', 'leaderboardlogs');
    }
}