<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quote
 *
 * @ORM\Table(name="quote")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuoteRepository")
 */
class Quote
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="castMember", type="string", length=255)
     */
    private $castMember;

    /**
     * @var string
     *
     * @ORM\Column(name="quote", type="string", length=255)
     */
    private $quote;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set castMember
     *
     * @param string $castMember
     *
     * @return Quote
     */
    public function setCastMember($castMember)
    {
        $this->castMember = $castMember;

        return $this;
    }

    /**
     * Get castMember
     *
     * @return string
     */
    public function getCastMember()
    {
        return $this->castMember;
    }

    /**
     * Set quote
     *
     * @param string $quote
     *
     * @return Quote
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;

        return $this;
    }

    /**
     * Get quote
     *
     * @return string
     */
    public function getQuote()
    {
        return $this->quote;
    }
}

