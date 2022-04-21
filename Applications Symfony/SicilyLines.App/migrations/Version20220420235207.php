<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220420235207 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participer ADD reservation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE participer ADD CONSTRAINT FK_EDBE16F8B83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id)');
        $this->addSql('CREATE INDEX IDX_EDBE16F8B83297E7 ON participer (reservation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participer DROP FOREIGN KEY FK_EDBE16F8B83297E7');
        $this->addSql('DROP INDEX IDX_EDBE16F8B83297E7 ON participer');
        $this->addSql('ALTER TABLE participer DROP reservation_id');
    }
}
