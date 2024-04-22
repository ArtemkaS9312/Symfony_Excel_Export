<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240419152222 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE warehouse_balance_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE warehouse_balance (id BIGINT NOT NULL, warehouse VARCHAR(255) DEFAULT NULL, material_type VARCHAR(255) DEFAULT NULL, area VARCHAR(255) DEFAULT NULL, layer VARCHAR(255) DEFAULT NULL, profile VARCHAR(255) DEFAULT NULL, volume VARCHAR(255) DEFAULT NULL, date_availability TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, ad VARCHAR(255) DEFAULT NULL, vd VARCHAR(255) DEFAULT NULL, y VARCHAR(255) DEFAULT NULL, mark VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE warehouse_balance_id_seq CASCADE');
        $this->addSql('DROP TABLE warehouse_balance');
    }
}
