<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class Publication extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Type de publication.
     *
     * @var string
     */
    protected $type;
    /**
     * Date de publication, au format AAAA-MM-JJ.
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * Contenu de la publication, avec les mentions correspondant à la recherche encerclée par une balise HTML <em>.
     *
     * @var string
     */
    protected $contenu;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Type de publication.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type de publication.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Date de publication, au format AAAA-MM-JJ.
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * Date de publication, au format AAAA-MM-JJ.
     */
    public function setDate(\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    /**
     * Contenu de la publication, avec les mentions correspondant à la recherche encerclée par une balise HTML <em>.
     */
    public function getContenu(): string
    {
        return $this->contenu;
    }

    /**
     * Contenu de la publication, avec les mentions correspondant à la recherche encerclée par une balise HTML <em>.
     */
    public function setContenu(string $contenu): self
    {
        $this->initialized['contenu'] = true;
        $this->contenu = $contenu;

        return $this;
    }
}
