<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220103140409 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE category ADD title VARCHAR(255) NOT NULL, ADD description LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE club ADD spot_id INT DEFAULT NULL, ADD title VARCHAR(150) NOT NULL, ADD size INT NOT NULL, ADD maded_at DATE NOT NULL, ADD cover_filename VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE club ADD CONSTRAINT FK_B8EE38722DF1D37C FOREIGN KEY (spot_id) REFERENCES spot (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_B8EE38722DF1D37C ON club (spot_id)');
        $this->addSql('ALTER TABLE spot ADD first_name VARCHAR(255) NOT NULL, ADD last_name VARCHAR(255) NOT NULL, ADD made_date DATE DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE category DROP title, DROP description');
        $this->addSql('ALTER TABLE club DROP FOREIGN KEY FK_B8EE38722DF1D37C');
        $this->addSql('DROP INDEX IDX_B8EE38722DF1D37C ON club');
        $this->addSql('ALTER TABLE club DROP spot_id, DROP title, DROP size, DROP maded_at, DROP cover_filename');
        $this->addSql('ALTER TABLE spot DROP first_name, DROP last_name, DROP made_date');
    }
}
