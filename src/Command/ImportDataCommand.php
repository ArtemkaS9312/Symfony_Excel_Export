<?php

namespace App\Command;

use App\Entity\WarehouseBalance;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Shared\Date;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ImportDataCommand extends Command
{
    protected static $defaultName = 'app:import-data';
    
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    protected function configure()
    {
        $this->setName('app:import-data');
        $this->setDescription('Import data from Excel file.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $reader = new Xlsx();
        $filePath = 'D:\test\im\src\Импорт.Остатки.2024.02.14.xlsx';
        $spreadsheet = $reader->load($filePath);

        $sheet = $spreadsheet->getActiveSheet();

        foreach ($sheet->getRowIterator() as $row) {
            if ($row->getRowIndex() === 1) {
                continue;
            }
            $cellIterator = $row->getCellIterator();
            $data = [];
            foreach ($cellIterator as $cell) {
                $data[] = $cell->getValue();
            }
            $warehouseBalance = new WarehouseBalance();

            $warehouseBalance->setWarehouse($data[0]);
            $warehouseBalance->setMaterialType($data[1]);
            $warehouseBalance->setArea($data[2]);
            $warehouseBalance->setLayer($data[3]);
            $warehouseBalance->setProfile($data[4]);
            $warehouseBalance->setVolume($data[5]);

            $dateValue = ($data[6] - 25569) * 86400;
            if ($dateValue > 59) {
                $dateValue += 86399;
            }
            $date = new DateTimeImmutable(date('d.m.Y', $dateValue)); 
            $warehouseBalance->setDateAvailability($date);
            // $output->writeln($data[6]);

            $warehouseBalance->setAd($data[7]);
            $warehouseBalance->setVd($data[8]);
            $warehouseBalance->setY($data[9]);
            $warehouseBalance->setMark($data[10]);
            $this->entityManager->persist($warehouseBalance);
        }

        $this->entityManager->flush();

        $output->writeln('Data imported successfully.');

        return Command::SUCCESS;
    }
}
