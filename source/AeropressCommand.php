<?php

namespace AsyncPHP\Aeropress;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class AeropressCommand extends Command
{
    protected function configure()
    {
        $this->setName("aeropress")
            ->setDescription("Creates an Aerys application")
            ->addArgument("name", InputArgument::REQUIRED, "What do you want to call the application?");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("making...");
    }
}
