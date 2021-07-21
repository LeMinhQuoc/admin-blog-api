<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210721074649 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE image');
        $this->addSql('ALTER TABLE blog DROP FOREIGN KEY FK_C01551433DA5256D');
        $this->addSql('DROP INDEX IDX_C01551433DA5256D ON blog');
        $this->addSql('ALTER TABLE blog DROP image_id');
        $this->addSql("INSERT INTO kuma_user(id, username,username_canonical,email,_canonical,enabled,salt,password,last_login,confirmation_token,password_requested_at,roles,admin_locale,password_changed,google_id, created_at,created_by) VALUES (1,'admin','admin','minhquoc7a3a@gmail.com','minhquoc7a3a@gmail.com',1,'jqCX0mJgFiaQ3hh.n.wximG/x1JdZFvNWlrdQHsIT90','$2y$13$jNVr8LD0S6pZgqndgp4L.eYLAodApJ0kcWjizBWVphpX/th/QczEu',2021-07-21 07:26:59,NULL, NULL,'a:1:{i:0;s:16:“ROLE_SUPER_ADMIN”;}','en',1 ,NULL,'2021-07-06 06:28:23' ,'CMS installation')");
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, id_blog_id INT DEFAULT NULL, image_link VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, image_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_C53D045F47DD7E7 (id_blog_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F47DD7E7 FOREIGN KEY (id_blog_id) REFERENCES blog (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE blog ADD image_id BIGINT DEFAULT NULL');
        $this->addSql('ALTER TABLE blog ADD CONSTRAINT FK_C01551433DA5256D FOREIGN KEY (image_id) REFERENCES kuma_media (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_C01551433DA5256D ON blog (image_id)');
    }
}
