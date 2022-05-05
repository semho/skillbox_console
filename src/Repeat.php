<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class Repeat extends Command
{
    protected static $defaultName = 'string-repeat';

    protected function configure(): void
    {
        $this
            ->addArgument('string', InputArgument::REQUIRED, 'enter the string you want to output')
            ->addArgument('option', InputArgument::OPTIONAL, 'output number of repetitions');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        if (!empty($input->getArgument('option'))) {
            $option = $input->getArgument('option');
        } else {
            $option = 2;
        }

        for ($i = 1; $i <= $option; $i++) {
            $output->writeln($input->getArgument('string'));
        }

        return Command::SUCCESS;
    }
}
