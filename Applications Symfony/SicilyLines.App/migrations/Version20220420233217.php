<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220420233217 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bateau DROP FOREIGN KEY FK_A664B05AB13FA634');
        $this->addSql('DROP INDEX IDX_A664B05AB13FA634 ON bateau');
        $this->addSql('ALTER TABLE bateau DROP proposer_id');
        $this->addSql('ALTER TABLE traversee ADD bateau_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE traversee ADD CONSTRAINT FK_B688F501A9706509 FOREIGN KEY (bateau_id) REFERENCES bateau (id)');
        $this->addSql('CREATE INDEX IDX_B688F501A9706509 ON traversee (bateau_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bateau ADD proposer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bateau ADD CONSTRAINT FK_A664B05AB13FA634 FOREIGN KEY (proposer_id) REFERENCES proposer (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_A664B05AB13FA634 ON bateau (proposer_id)');
        $this->addSql('ALTER TABLE traversee DROP FOREIGN KEY FK_B688F501A9706509');
        $this->addSql('DROP INDEX IDX_B688F501A9706509 ON traversee');
        $this->addSql('ALTER TABLE traversee DROP bateau_id');
    }
}
