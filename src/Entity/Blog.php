<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blog
 *
 * @ORM\Table(name="blog", indexes={@ORM\Index(name="IDX_C01551432EE78D6C", columns={"id_owner_id"}), @ORM\Index(name="IDX_C01551439CE5D6FC", columns={"id_tag_id"})})
 * @ORM\Entity
 */
class Blog
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=0, nullable=false)
     */
    private $content;

    /**
     * @var int
     *
     * @ORM\Column(name="view", type="integer", nullable=false)
     */
    private $view;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_owner_id", referencedColumnName="id")
     * })
     */
    private $idOwner;

    /**
     * @var \Tag
     *
     * @ORM\ManyToOne(targetEntity="Tag")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tag_id", referencedColumnName="id")
     * })
     */
    private $idTag;


}
