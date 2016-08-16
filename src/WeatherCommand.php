<?php namespace Mox;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use GuzzleHttp\Client;

class WeatherCommand extends Command {
  public function __construct()
  {
    parent::__construct();
  }

  public function configure()
  {
    $this->setName('weather')
         ->setDescription('Get weather for nfl games');

  }

  public function execute(InputInterface $input, OutputInterface $output)
  {
    $client = new Client();
    $res = $client->request('GET', 'http://www.fantasyfootballnerd.com/service/weather/json/8kkhihv4vmvj/');

    echo json_decode($res->getBody());
  }
}
