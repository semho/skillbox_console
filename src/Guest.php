<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;

class Guest extends Command
{
    protected static $defaultName = 'app:quest';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $helper = $this->getHelper('question');
        $question1 = new Question('Введите Ваше имя: ', 'Guest');
        $question2 = new Question('Введите Ваш возраст: ', 'undefined');
        $question3 = new ChoiceQuestion(
            'Ваш пол (м)',
            ['м', 'ж'],
            0
        );
        $question3->setErrorMessage('Пол выбран не верно!');
        $nameUser = $helper->ask($input, $output, $question1);
        $oldUser = $helper->ask($input, $output, $question2);
        $gender = $helper->ask($input, $output, $question3);


        $output->writeln('Здраствуйте, ' . $nameUser . '. Ваш возраст: ' . $oldUser . '. Ваш пол: ' . $gender);

        return Command::SUCCESS;
    }
}
