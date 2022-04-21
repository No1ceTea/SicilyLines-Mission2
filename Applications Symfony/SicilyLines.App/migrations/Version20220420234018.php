<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220420234018 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participer ADD type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE participer ADD CONSTRAINT FK_EDBE16F8C54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
        $this->addSql('CREATE INDEX IDX_EDBE16F8C54C8C93 ON participer (type_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participer DROP FOREIGN KEY FK_EDBE16F8C54C8C93');
        $this->addSql('DROP INDEX IDX_EDBE16F8C54C8C93 ON participer');
        $this->addSql('ALTER TABLE participer DROP type_id');
    }
}
