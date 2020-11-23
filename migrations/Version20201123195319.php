<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201123195319 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ask_for_adoption CHANGE housing_type_id housing_type_id INT DEFAULT NULL, CHANGE have_garden_id have_garden_id INT DEFAULT NULL, CHANGE is_active_id is_active_id INT DEFAULT NULL, CHANGE have_children_id have_children_id INT DEFAULT NULL, CHANGE have_allergy_id have_allergy_id INT DEFAULT NULL, CHANGE everyone_is_ok_id everyone_is_ok_id INT DEFAULT NULL, CHANGE have_dog_id have_dog_id INT DEFAULT NULL, CHANGE have_cat_id have_cat_id INT DEFAULT NULL, CHANGE have_other_animal_id have_other_animal_id INT DEFAULT NULL, CHANGE gender_id gender_id INT DEFAULT NULL, CHANGE aggreed_term_id aggreed_term_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ask_for_adoption CHANGE housing_type_id housing_type_id INT NOT NULL, CHANGE have_garden_id have_garden_id INT NOT NULL, CHANGE is_active_id is_active_id INT NOT NULL, CHANGE have_children_id have_children_id INT NOT NULL, CHANGE have_allergy_id have_allergy_id INT NOT NULL, CHANGE everyone_is_ok_id everyone_is_ok_id INT NOT NULL, CHANGE have_dog_id have_dog_id INT NOT NULL, CHANGE have_cat_id have_cat_id INT NOT NULL, CHANGE have_other_animal_id have_other_animal_id INT NOT NULL, CHANGE gender_id gender_id INT NOT NULL, CHANGE aggreed_term_id aggreed_term_id INT NOT NULL');
    }
}
