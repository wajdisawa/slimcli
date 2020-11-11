<?php
/*
 * Wajdi AlSawafta <wajdee.sawaf@gmail.com>
 * THIS FILE IS PART OF A PRIVATE PROJECT slimcli
 * @copyright MIT 2020
 */

declare(strict_types=1);

namespace Wajdisawa\slimcli\Application\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class TestCommand extends Command
{
    /**
     * @var string
     */
    private const TEST_ARG = 'test';

    /**
     * @inheritDoc
     */
    public function configure(): void
    {
        $this
            ->setName('slimcli:validate_transform')
            ->setDescription('This is a test command.')
            ->addArgument(
                self::TEST_ARG,
                InputArgument::OPTIONAL,
                'testing having Args');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $progressBar = new ProgressBar($output, 100);
        if(self::TEST_ARG === $input->getArgument(self::TEST_ARG)){
            $output->writeln('Args received.');
        }
        $progressBar->start();
        $progressBar->finish();
        return 0;
    }
}
