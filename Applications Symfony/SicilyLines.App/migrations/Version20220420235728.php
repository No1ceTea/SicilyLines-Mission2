<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220420235728 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE proposer ADD equipement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE proposer ADD CONSTRAINT FK_21866C15806F0F5C FOREIGN KEY (equipement_id) REFERENCES equipement (id)');
        $this->addSql('CREATE INDEX IDX_21866C15806F0F5C ON proposer (equipement_id)');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495519EB6921');
        $this->addSql('DROP INDEX IDX_42C8495519EB6921 ON reservation');
        $this->addSql('ALTER TABLE reservation DROP client_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE proposer DROP FOREIGN KEY FK_21866C15806F0F5C');
        $this->addSql('DROP INDEX IDX_21866C15806F0F5C ON proposer');
        $this->addSql('ALTER TABLE proposer DROP equipement_id');
        $this->addSql('ALTER TABLE reservation ADD client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495519EB6921 FOREIGN KEY (client_id) REFERENCES client (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_42C8495519EB6921 ON reservation (client_id)');
    }
}
