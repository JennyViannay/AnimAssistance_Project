<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201122122949 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE gender (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rescue ADD gender_id INT NOT NULL');
        $this->addSql('ALTER TABLE rescue ADD CONSTRAINT FK_FA71973B708A0E0 FOREIGN KEY (gender_id) REFERENCES gender (id)');
        $this->addSql('CREATE INDEX IDX_FA71973B708A0E0 ON rescue (gender_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rescue DROP FOREIGN KEY FK_FA71973B708A0E0');
        $this->addSql('DROP TABLE gender');
        $this->addSql('DROP INDEX IDX_FA71973B708A0E0 ON rescue');
        $this->addSql('ALTER TABLE rescue DROP gender_id');
    }
}
