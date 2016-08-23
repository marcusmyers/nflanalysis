<?php namespace Mox\Commands;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Command extends SymfonyCommand {

  const SCHEDULE_URL = "http://www.nfl.com/ajax/scorestrip?";
  public function __construct()
  {
    parent::__construct();
  }

  public static function getScheduleUrl($year, $week, $seasonType) {
    return self::SCHEDULE_URL . "season=$year&seasonType=$seasonType&week=$week";
  }
}
