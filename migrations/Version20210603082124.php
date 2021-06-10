<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210603082124 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE job_offer DROP INDEX UNIQ_288A3A4E50E81DB, ADD INDEX IDX_288A3A4E50E81DB (job_category_id_id)');
        $this->addSql('ALTER TABLE job_offer DROP INDEX UNIQ_288A3A4E1B3F89BD, ADD INDEX IDX_288A3A4E1B3F89BD (job_type_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE job_offer DROP INDEX IDX_288A3A4E1B3F89BD, ADD UNIQUE INDEX UNIQ_288A3A4E1B3F89BD (job_type_id_id)');
        $this->addSql('ALTER TABLE job_offer DROP INDEX IDX_288A3A4E50E81DB, ADD UNIQUE INDEX UNIQ_288A3A4E50E81DB (job_category_id_id)');
    }
}
