<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201122193022 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE question');
        $this->addSql('ALTER TABLE ask_for_adoption ADD garden_is_clotured_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ask_for_adoption ADD CONSTRAINT FK_5244A8C2E37208BA FOREIGN KEY (garden_is_clotured_id) REFERENCES yes_no (id)');
        $this->addSql('CREATE INDEX IDX_5244A8C2E37208BA ON ask_for_adoption (garden_is_clotured_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, text LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE ask_for_adoption DROP FOREIGN KEY FK_5244A8C2E37208BA');
        $this->addSql('DROP INDEX IDX_5244A8C2E37208BA ON ask_for_adoption');
        $this->addSql('ALTER TABLE ask_for_adoption DROP garden_is_clotured_id');
    }
}
