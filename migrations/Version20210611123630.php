<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210611123630 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE job_offer DROP FOREIGN KEY FK_288A3A4E50E81DB');
        $this->addSql('ALTER TABLE job_offer ADD CONSTRAINT FK_288A3A4E50E81DB FOREIGN KEY (job_category_id_id) REFERENCES job_category (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE job_offer DROP FOREIGN KEY FK_288A3A4E50E81DB');
        $this->addSql('ALTER TABLE job_offer ADD CONSTRAINT FK_288A3A4E50E81DB FOREIGN KEY (job_category_id_id) REFERENCES job_category (id) ON DELETE CASCADE');
    }
}
