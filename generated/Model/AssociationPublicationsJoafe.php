<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class AssociationPublicationsJoafe extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Numéro de parution JOAFE.
     *
     * @var string
     */
    protected $numeroParution;
    /**
     * Date de parution JOAFE au format AAAA-MM-JJ.
     *
     * @var string
     */
    protected $dateParution;
    /**
     * Date de déclaration au format AAAA-MM-JJ.
     *
     * @var string
     */
    protected $dateDeclaration;
    /**
     * Numéro de l'annonce JOAFE.
     *
     * @var int
     */
    protected $numeroAnnonce;
    /**
     * Nom de l'association.
     *
     * @var string
     */
    protected $titre;
    /**
     * Type d'annonce (Création, Modification, Dissolution).
     *
     * @var string
     */
    protected $type;
    /**
     * Lieu de la déclaration.
     *
     * @var string
     */
    protected $prefecture;
    /**
     * Description de l'association.
     *
     * @var string
     */
    protected $objet;
    /**
     * Lien du site web.
     *
     * @var string
     */
    protected $siteWeb;
    /**
     * Adresse de l'association.
     *
     * @var string
     */
    protected $adresse;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Numéro de parution JOAFE.
     */
    public function getNumeroParution(): string
    {
        return $this->numeroParution;
    }

    /**
     * Numéro de parution JOAFE.
     */
    public function setNumeroParution(string $numeroParution): self
    {
        $this->initialized['numeroParution'] = true;
        $this->numeroParution = $numeroParution;

        return $this;
    }

    /**
     * Date de parution JOAFE au format AAAA-MM-JJ.
     */
    public function getDateParution(): string
    {
        return $this->dateParution;
    }

    /**
     * Date de parution JOAFE au format AAAA-MM-JJ.
     */
    public function setDateParution(string $dateParution): self
    {
        $this->initialized['dateParution'] = true;
        $this->dateParution = $dateParution;

        return $this;
    }

    /**
     * Date de déclaration au format AAAA-MM-JJ.
     */
    public function getDateDeclaration(): string
    {
        return $this->dateDeclaration;
    }

    /**
     * Date de déclaration au format AAAA-MM-JJ.
     */
    public function setDateDeclaration(string $dateDeclaration): self
    {
        $this->initialized['dateDeclaration'] = true;
        $this->dateDeclaration = $dateDeclaration;

        return $this;
    }

    /**
     * Numéro de l'annonce JOAFE.
     */
    public function getNumeroAnnonce(): int
    {
        return $this->numeroAnnonce;
    }

    /**
     * Numéro de l'annonce JOAFE.
     */
    public function setNumeroAnnonce(int $numeroAnnonce): self
    {
        $this->initialized['numeroAnnonce'] = true;
        $this->numeroAnnonce = $numeroAnnonce;

        return $this;
    }

    /**
     * Nom de l'association.
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * Nom de l'association.
     */
    public function setTitre(string $titre): self
    {
        $this->initialized['titre'] = true;
        $this->titre = $titre;

        return $this;
    }

    /**
     * Type d'annonce (Création, Modification, Dissolution).
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type d'annonce (Création, Modification, Dissolution).
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Lieu de la déclaration.
     */
    public function getPrefecture(): string
    {
        return $this->prefecture;
    }

    /**
     * Lieu de la déclaration.
     */
    public function setPrefecture(string $prefecture): self
    {
        $this->initialized['prefecture'] = true;
        $this->prefecture = $prefecture;

        return $this;
    }

    /**
     * Description de l'association.
     */
    public function getObjet(): string
    {
        return $this->objet;
    }

    /**
     * Description de l'association.
     */
    public function setObjet(string $objet): self
    {
        $this->initialized['objet'] = true;
        $this->objet = $objet;

        return $this;
    }

    /**
     * Lien du site web.
     */
    public function getSiteWeb(): string
    {
        return $this->siteWeb;
    }

    /**
     * Lien du site web.
     */
    public function setSiteWeb(string $siteWeb): self
    {
        $this->initialized['siteWeb'] = true;
        $this->siteWeb = $siteWeb;

        return $this;
    }

    /**
     * Adresse de l'association.
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * Adresse de l'association.
     */
    public function setAdresse(string $adresse): self
    {
        $this->initialized['adresse'] = true;
        $this->adresse = $adresse;

        return $this;
    }
}
