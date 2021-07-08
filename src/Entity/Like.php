<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Like
 *
 * @ORM\Table(name="`like`", indexes={@ORM\Index(name="IDX_AC6340B379F37AE5", columns={"id_user_id"}), @ORM\Index(name="IDX_AC6340B39514AA5C", columns={"id_post_id"})})
 * @ORM\Entity
 */
class Like
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
     protected $id;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user_id", referencedColumnName="id")
     * })
     */
    protected $idUser;

    /**
     * @var \Blog
     *
     * @ORM\ManyToOne(targetEntity="Blog")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_post_id", referencedColumnName="id")
     * })
     */
    protected $idPost;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return \User
     */
    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    /**
     * @param \User $idUser
     */
    public function setIdUser(\User $idUser): void
    {
        $this->idUser = $idUser;
    }

    /**
     * @return \Blog
     */
    public function getIdPost(): ?Blog
    {
        return $this->idPost;
    }

    /**
     * @param \Blog $idPost
     */
    public function setIdPost(\Blog $idPost): void
    {
        $this->idPost = $idPost;
    }

}
