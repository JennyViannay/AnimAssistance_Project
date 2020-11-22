<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201121221642 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image ADD rescue_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F577D92CC FOREIGN KEY (rescue_id) REFERENCES rescue (id)');
        $this->addSql('CREATE INDEX IDX_C53D045F577D92CC ON image (rescue_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F577D92CC');
        $this->addSql('DROP INDEX IDX_C53D045F577D92CC ON image');
        $this->addSql('ALTER TABLE image DROP rescue_id');
    }
}
