<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201122184649 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ask_for_adoption ADD housing_type_id INT NOT NULL, ADD have_garden_id INT NOT NULL, ADD is_active_id INT NOT NULL, ADD have_children_id INT NOT NULL, ADD have_allergy_id INT NOT NULL, ADD everyone_is_ok_id INT NOT NULL, ADD have_dog_id INT NOT NULL, ADD have_cat_id INT NOT NULL, ADD have_other_animal_id INT NOT NULL, ADD animal_sterilized_id INT DEFAULT NULL, ADD can_be_isolated_id INT DEFAULT NULL, ADD lunch_time_id INT DEFAULT NULL, ADD someone_can_help_id INT DEFAULT NULL, ADD dog_can_acces_garden_id INT DEFAULT NULL, ADD gender_id INT NOT NULL, ADD aggreed_term_id INT NOT NULL, ADD firstname VARCHAR(255) NOT NULL, ADD lastname VARCHAR(255) NOT NULL, ADD address VARCHAR(255) NOT NULL, ADD zipcode INT NOT NULL, ADD city VARCHAR(255) NOT NULL, ADD email VARCHAR(255) NOT NULL, ADD phone VARCHAR(255) NOT NULL, ADD phone_bis VARCHAR(255) DEFAULT NULL, ADD facebook_profile VARCHAR(255) DEFAULT NULL, ADD garden_aera INT DEFAULT NULL, ADD is_clotured TINYINT(1) DEFAULT NULL, ADD cloture_details LONGTEXT DEFAULT NULL, ADD age INT NOT NULL, ADD age_children VARCHAR(255) DEFAULT NULL, ADD job VARCHAR(255) NOT NULL, ADD partner_job VARCHAR(255) DEFAULT NULL, ADD allergy_details LONGTEXT DEFAULT NULL, ADD dog_details LONGTEXT DEFAULT NULL, ADD cat_details LONGTEXT DEFAULT NULL, ADD sterilized_detail LONGTEXT DEFAULT NULL, ADD veterinary LONGTEXT DEFAULT NULL, ADD lonely_hours_day INT DEFAULT NULL, ADD lonely_hours_morning INT DEFAULT NULL, ADD lonely_hours_afternoon INT DEFAULT NULL, ADD lonely_hours_evening INT DEFAULT NULL, ADD days_by_week INT DEFAULT NULL, ADD dog_housing VARCHAR(255) DEFAULT NULL, ADD night_housing_dog VARCHAR(255) DEFAULT NULL, ADD who_is_carring VARCHAR(255) DEFAULT NULL, ADD dog_walking_previsional LONGTEXT DEFAULT NULL, ADD motivation LONGTEXT NOT NULL, ADD note LONGTEXT DEFAULT NULL, ADD knowing_ami LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE ask_for_adoption ADD CONSTRAINT FK_5244A8C27CB1EF5B FOREIGN KEY (housing_type_id) REFERENCES housing (id)');
        $this->addSql('ALTER TABLE ask_for_adoption ADD CONSTRAINT FK_5244A8C2C04B8C81 FOREIGN KEY (have_garden_id) REFERENCES yes_no (id)');
        $this->addSql('ALTER TABLE ask_for_adoption ADD CONSTRAINT FK_5244A8C2203BEFA8 FOREIGN KEY (is_active_id) REFERENCES is_active (id)');
        $this->addSql('ALTER TABLE ask_for_adoption ADD CONSTRAINT FK_5244A8C2440805F0 FOREIGN KEY (have_children_id) REFERENCES yes_no (id)');
        $this->addSql('ALTER TABLE ask_for_adoption ADD CONSTRAINT FK_5244A8C232674A94 FOREIGN KEY (have_allergy_id) REFERENCES yes_no (id)');
        $this->addSql('ALTER TABLE ask_for_adoption ADD CONSTRAINT FK_5244A8C2C6722242 FOREIGN KEY (everyone_is_ok_id) REFERENCES yes_no (id)');
        $this->addSql('ALTER TABLE ask_for_adoption ADD CONSTRAINT FK_5244A8C2C66C5A49 FOREIGN KEY (have_dog_id) REFERENCES yes_no (id)');
        $this->addSql('ALTER TABLE ask_for_adoption ADD CONSTRAINT FK_5244A8C226F52CE1 FOREIGN KEY (have_cat_id) REFERENCES yes_no (id)');
        $this->addSql('ALTER TABLE ask_for_adoption ADD CONSTRAINT FK_5244A8C280323D13 FOREIGN KEY (have_other_animal_id) REFERENCES yes_no (id)');
        $this->addSql('ALTER TABLE ask_for_adoption ADD CONSTRAINT FK_5244A8C269619368 FOREIGN KEY (animal_sterilized_id) REFERENCES yes_no (id)');
        $this->addSql('ALTER TABLE ask_for_adoption ADD CONSTRAINT FK_5244A8C29EDA1C6F FOREIGN KEY (can_be_isolated_id) REFERENCES yes_no (id)');
        $this->addSql('ALTER TABLE ask_for_adoption ADD CONSTRAINT FK_5244A8C2B79D111D FOREIGN KEY (lunch_time_id) REFERENCES yes_no (id)');
        $this->addSql('ALTER TABLE ask_for_adoption ADD CONSTRAINT FK_5244A8C29F8D4810 FOREIGN KEY (someone_can_help_id) REFERENCES yes_no (id)');
        $this->addSql('ALTER TABLE ask_for_adoption ADD CONSTRAINT FK_5244A8C24521AD5 FOREIGN KEY (dog_can_acces_garden_id) REFERENCES yes_no (id)');
        $this->addSql('ALTER TABLE ask_for_adoption ADD CONSTRAINT FK_5244A8C2708A0E0 FOREIGN KEY (gender_id) REFERENCES gender (id)');
        $this->addSql('ALTER TABLE ask_for_adoption ADD CONSTRAINT FK_5244A8C276735566 FOREIGN KEY (aggreed_term_id) REFERENCES yes_no (id)');
        $this->addSql('CREATE INDEX IDX_5244A8C27CB1EF5B ON ask_for_adoption (housing_type_id)');
        $this->addSql('CREATE INDEX IDX_5244A8C2C04B8C81 ON ask_for_adoption (have_garden_id)');
        $this->addSql('CREATE INDEX IDX_5244A8C2203BEFA8 ON ask_for_adoption (is_active_id)');
        $this->addSql('CREATE INDEX IDX_5244A8C2440805F0 ON ask_for_adoption (have_children_id)');
        $this->addSql('CREATE INDEX IDX_5244A8C232674A94 ON ask_for_adoption (have_allergy_id)');
        $this->addSql('CREATE INDEX IDX_5244A8C2C6722242 ON ask_for_adoption (everyone_is_ok_id)');
        $this->addSql('CREATE INDEX IDX_5244A8C2C66C5A49 ON ask_for_adoption (have_dog_id)');
        $this->addSql('CREATE INDEX IDX_5244A8C226F52CE1 ON ask_for_adoption (have_cat_id)');
        $this->addSql('CREATE INDEX IDX_5244A8C280323D13 ON ask_for_adoption (have_other_animal_id)');
        $this->addSql('CREATE INDEX IDX_5244A8C269619368 ON ask_for_adoption (animal_sterilized_id)');
        $this->addSql('CREATE INDEX IDX_5244A8C29EDA1C6F ON ask_for_adoption (can_be_isolated_id)');
        $this->addSql('CREATE INDEX IDX_5244A8C2B79D111D ON ask_for_adoption (lunch_time_id)');
        $this->addSql('CREATE INDEX IDX_5244A8C29F8D4810 ON ask_for_adoption (someone_can_help_id)');
        $this->addSql('CREATE INDEX IDX_5244A8C24521AD5 ON ask_for_adoption (dog_can_acces_garden_id)');
        $this->addSql('CREATE INDEX IDX_5244A8C2708A0E0 ON ask_for_adoption (gender_id)');
        $this->addSql('CREATE INDEX IDX_5244A8C276735566 ON ask_for_adoption (aggreed_term_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ask_for_adoption DROP FOREIGN KEY FK_5244A8C27CB1EF5B');
        $this->addSql('ALTER TABLE ask_for_adoption DROP FOREIGN KEY FK_5244A8C2C04B8C81');
        $this->addSql('ALTER TABLE ask_for_adoption DROP FOREIGN KEY FK_5244A8C2203BEFA8');
        $this->addSql('ALTER TABLE ask_for_adoption DROP FOREIGN KEY FK_5244A8C2440805F0');
        $this->addSql('ALTER TABLE ask_for_adoption DROP FOREIGN KEY FK_5244A8C232674A94');
        $this->addSql('ALTER TABLE ask_for_adoption DROP FOREIGN KEY FK_5244A8C2C6722242');
        $this->addSql('ALTER TABLE ask_for_adoption DROP FOREIGN KEY FK_5244A8C2C66C5A49');
        $this->addSql('ALTER TABLE ask_for_adoption DROP FOREIGN KEY FK_5244A8C226F52CE1');
        $this->addSql('ALTER TABLE ask_for_adoption DROP FOREIGN KEY FK_5244A8C280323D13');
        $this->addSql('ALTER TABLE ask_for_adoption DROP FOREIGN KEY FK_5244A8C269619368');
        $this->addSql('ALTER TABLE ask_for_adoption DROP FOREIGN KEY FK_5244A8C29EDA1C6F');
        $this->addSql('ALTER TABLE ask_for_adoption DROP FOREIGN KEY FK_5244A8C2B79D111D');
        $this->addSql('ALTER TABLE ask_for_adoption DROP FOREIGN KEY FK_5244A8C29F8D4810');
        $this->addSql('ALTER TABLE ask_for_adoption DROP FOREIGN KEY FK_5244A8C24521AD5');
        $this->addSql('ALTER TABLE ask_for_adoption DROP FOREIGN KEY FK_5244A8C2708A0E0');
        $this->addSql('ALTER TABLE ask_for_adoption DROP FOREIGN KEY FK_5244A8C276735566');
        $this->addSql('DROP INDEX IDX_5244A8C27CB1EF5B ON ask_for_adoption');
        $this->addSql('DROP INDEX IDX_5244A8C2C04B8C81 ON ask_for_adoption');
        $this->addSql('DROP INDEX IDX_5244A8C2203BEFA8 ON ask_for_adoption');
        $this->addSql('DROP INDEX IDX_5244A8C2440805F0 ON ask_for_adoption');
        $this->addSql('DROP INDEX IDX_5244A8C232674A94 ON ask_for_adoption');
        $this->addSql('DROP INDEX IDX_5244A8C2C6722242 ON ask_for_adoption');
        $this->addSql('DROP INDEX IDX_5244A8C2C66C5A49 ON ask_for_adoption');
        $this->addSql('DROP INDEX IDX_5244A8C226F52CE1 ON ask_for_adoption');
        $this->addSql('DROP INDEX IDX_5244A8C280323D13 ON ask_for_adoption');
        $this->addSql('DROP INDEX IDX_5244A8C269619368 ON ask_for_adoption');
        $this->addSql('DROP INDEX IDX_5244A8C29EDA1C6F ON ask_for_adoption');
        $this->addSql('DROP INDEX IDX_5244A8C2B79D111D ON ask_for_adoption');
        $this->addSql('DROP INDEX IDX_5244A8C29F8D4810 ON ask_for_adoption');
        $this->addSql('DROP INDEX IDX_5244A8C24521AD5 ON ask_for_adoption');
        $this->addSql('DROP INDEX IDX_5244A8C2708A0E0 ON ask_for_adoption');
        $this->addSql('DROP INDEX IDX_5244A8C276735566 ON ask_for_adoption');
        $this->addSql('ALTER TABLE ask_for_adoption DROP housing_type_id, DROP have_garden_id, DROP is_active_id, DROP have_children_id, DROP have_allergy_id, DROP everyone_is_ok_id, DROP have_dog_id, DROP have_cat_id, DROP have_other_animal_id, DROP animal_sterilized_id, DROP can_be_isolated_id, DROP lunch_time_id, DROP someone_can_help_id, DROP dog_can_acces_garden_id, DROP gender_id, DROP aggreed_term_id, DROP firstname, DROP lastname, DROP address, DROP zipcode, DROP city, DROP email, DROP phone, DROP phone_bis, DROP facebook_profile, DROP garden_aera, DROP is_clotured, DROP cloture_details, DROP age, DROP age_children, DROP job, DROP partner_job, DROP allergy_details, DROP dog_details, DROP cat_details, DROP sterilized_detail, DROP veterinary, DROP lonely_hours_day, DROP lonely_hours_morning, DROP lonely_hours_afternoon, DROP lonely_hours_evening, DROP days_by_week, DROP dog_housing, DROP night_housing_dog, DROP who_is_carring, DROP dog_walking_previsional, DROP motivation, DROP note, DROP knowing_ami');
    }
}
