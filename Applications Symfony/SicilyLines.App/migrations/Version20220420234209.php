<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220420234209 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tarifer ADD liaison_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tarifer ADD CONSTRAINT FK_6904C4FFED31185 FOREIGN KEY (liaison_id) REFERENCES liaison (id)');
        $this->addSql('CREATE INDEX IDX_6904C4FFED31185 ON tarifer (liaison_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tarifer DROP FOREIGN KEY FK_6904C4FFED31185');
        $this->addSql('DROP INDEX IDX_6904C4FFED31185 ON tarifer');
        $this->addSql('ALTER TABLE tarifer DROP liaison_id');
    }
}
