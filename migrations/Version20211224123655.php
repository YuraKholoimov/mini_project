<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211224123655 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE passenger ADD id INT AUTO_INCREMENT NOT NULL, ADD surname TINYTEXT NOT NULL, ADD second_name TINYTEXT NOT NULL, ADD passport_number INT NOT NULL, CHANGE name name TINYTEXT NOT NULL, CHANGE passport passport_serial INT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE passenger MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE passenger DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE passenger ADD passport INT NOT NULL, DROP id, DROP surname, DROP second_name, DROP passport_serial, DROP passport_number, CHANGE name name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE passenger ADD PRIMARY KEY (passport)');
    }
}
