<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211225165120 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tiket DROP FOREIGN KEY FK_873E079D4502E565');
        $this->addSql('DROP INDEX IDX_873E079D4502E565 ON tiket');
        $this->addSql('ALTER TABLE tiket ADD passenger VARCHAR(255) NOT NULL, DROP passenger_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tiket ADD passenger_id INT DEFAULT NULL, DROP passenger');
        $this->addSql('ALTER TABLE tiket ADD CONSTRAINT FK_873E079D4502E565 FOREIGN KEY (passenger_id) REFERENCES passenger (id)');
        $this->addSql('CREATE INDEX IDX_873E079D4502E565 ON tiket (passenger_id)');
    }
}
