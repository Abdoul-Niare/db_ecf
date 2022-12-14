<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221214094952 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE marque (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE computer ADD marque_id INT NOT NULL');
        $this->addSql('ALTER TABLE computer ADD CONSTRAINT FK_A298A7A64827B9B2 FOREIGN KEY (marque_id) REFERENCES brand (id)');
        $this->addSql('CREATE INDEX IDX_A298A7A64827B9B2 ON computer (marque_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE marque');
        $this->addSql('ALTER TABLE computer DROP FOREIGN KEY FK_A298A7A64827B9B2');
        $this->addSql('DROP INDEX IDX_A298A7A64827B9B2 ON computer');
        $this->addSql('ALTER TABLE computer DROP marque_id');
    }
}
