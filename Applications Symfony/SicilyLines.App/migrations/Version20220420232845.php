<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220420232845 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE proposer ADD bateau_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE proposer ADD CONSTRAINT FK_21866C15A9706509 FOREIGN KEY (bateau_id) REFERENCES bateau (id)');
        $this->addSql('CREATE INDEX IDX_21866C15A9706509 ON proposer (bateau_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE proposer DROP FOREIGN KEY FK_21866C15A9706509');
        $this->addSql('DROP INDEX IDX_21866C15A9706509 ON proposer');
        $this->addSql('ALTER TABLE proposer DROP bateau_id');
    }
}
