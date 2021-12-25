<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211221142506 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE aeroport (aeroport_code VARCHAR(255) NOT NULL, City VARCHAR(255) NOT NULL, PRIMARY KEY(aeroport_code)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE flight (flight_number VARCHAR(255) NOT NULL, departure VARCHAR(255) NOT NULL, arrival VARCHAR(255) NOT NULL, flight_status LONGTEXT NOT NULL, time_to_destination TIME NOT NULL, flight_price INT NOT NULL, PRIMARY KEY(flight_number)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE passenger (passport INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(passport)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE aeroport');
        $this->addSql('DROP TABLE flight');
        $this->addSql('DROP TABLE passenger');
    }
}
