<?php

namespace Bstools\Command;

use Pheanstalk\Pheanstalk;
use Pheanstalk\Contract\PheanstalkInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;

class Base extends Command
{
    public function __construct()
    {
        parent::__construct();
        $this->addOption('host', null, InputOption::VALUE_OPTIONAL, 'hostname of the beanstalk server', 'localhost');
        $this->addOption('port', 'p', InputOption::VALUE_OPTIONAL, 'port of the beanstalk server', PheanstalkInterface::DEFAULT_PORT);
    }

    /**
     * @param InputInterface $input
     * @return Pheanstalk
     */
    protected function createConnection(InputInterface $input)
    {
        return Pheanstalk::create(
            $input->getOption('host'),
            $input->getOption('port')

        );
    }
}
