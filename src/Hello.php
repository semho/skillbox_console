<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class Hello extends Command
{
    protected static $defaultName = 'say_hello';
	
    protected function configure(): void
    {
        $this
            ->addArgument('string', InputArgument::REQUIRED, 'enter the argument');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Привет ' . $input->getArgument('string'));

        return Command::SUCCESS;
    }
}
