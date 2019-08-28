<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190726104916 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE myjisc_users_communication_preference ADD events_is_checked VARCHAR(255) DEFAULT NULL, ADD market_research_is_checked VARCHAR(255) DEFAULT NULL, CHANGE communication_preferences headlines_is_checked VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE myjisc_users_interests ADD further_education_is_checked VARCHAR(255) DEFAULT NULL, ADD research_is_checked VARCHAR(255) DEFAULT NULL, ADD curriculum_is_checked VARCHAR(255) DEFAULT NULL, ADD it_networks_is_checked VARCHAR(255) DEFAULT NULL, ADD libraries_is_checked VARCHAR(255) DEFAULT NULL, ADD rd_activity_is_checked VARCHAR(255) DEFAULT NULL, ADD products_service_is_checked VARCHAR(255) DEFAULT NULL, ADD advice_guidance VARCHAR(255) DEFAULT NULL, CHANGE interests higher_education_is_checked VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE myjisc_users_communication_preference ADD communication_preferences VARCHAR(255) DEFAULT NULL COLLATE utf8_general_ci, DROP headlines_is_checked, DROP events_is_checked, DROP market_research_is_checked');
        $this->addSql('ALTER TABLE myjisc_users_interests ADD interests VARCHAR(255) DEFAULT NULL COLLATE utf8_general_ci, DROP higher_education_is_checked, DROP further_education_is_checked, DROP research_is_checked, DROP curriculum_is_checked, DROP it_networks_is_checked, DROP libraries_is_checked, DROP rd_activity_is_checked, DROP products_service_is_checked, DROP advice_guidance');
    }
}
