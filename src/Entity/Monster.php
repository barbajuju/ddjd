<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MonsterRepository")
 */
class Monster
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $size;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $subtype;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $alignment;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $armorClass;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hitPoints;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $hitDice;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $speed;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $strength;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $dexterity;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $constitution;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $intelligence;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $wisdom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $constitutionSave;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $intelligenceSave;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $wisdomSave;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $history;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $perception;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $conditionImmunities;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $senses;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $languages;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=3, nullable=true)
     */
    private $challengesRating;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $charisma;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $medicine;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $religion;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $dexteritySave;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $charismaSave;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stealth;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $persuasion;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $insight;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $deception;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $arcana;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $athletics;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $acrobatics;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $strengthSave;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $survival;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $investigation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nature;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $intimidation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $performance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $damageVulnerabilities;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $damageResistances;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $damageImmunities;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reactionsName;

    /**
     * @ORM\Column(type="string", length=1500, nullable=true)
     */
    private $reactionsDesc;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $reactionsAttackBonus;

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(?string $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSubtype(): ?string
    {
        return $this->subtype;
    }

    public function setSubtype(?string $subtype): self
    {
        $this->subtype = $subtype;

        return $this;
    }

    public function getAlignment(): ?string
    {
        return $this->alignment;
    }

    public function setAlignment(?string $alignment): self
    {
        $this->alignment = $alignment;

        return $this;
    }

    public function getArmorClass(): ?int
    {
        return $this->armorClass;
    }

    public function setArmorClass(?int $armorClass): self
    {
        $this->armorClass = $armorClass;

        return $this;
    }

    public function getHitPoints(): ?int
    {
        return $this->hitPoints;
    }

    public function setHitPoints(?int $hitPoints): self
    {
        $this->hitPoints = $hitPoints;

        return $this;
    }

    public function getHitDice(): ?string
    {
        return $this->hitDice;
    }

    public function setHitDice(?string $hitDice): self
    {
        $this->hitDice = $hitDice;

        return $this;
    }

    public function getSpeed(): ?string
    {
        return $this->speed;
    }

    public function setSpeed(?string $speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    public function getStrengh(): ?int
    {
        return $this->strengh;
    }

    public function setStrengh(?int $strengh): self
    {
        $this->strengh = $strengh;

        return $this;
    }

    public function getDexterity(): ?int
    {
        return $this->dexterity;
    }

    public function setDexterity(?int $dexterity): self
    {
        $this->dexterity = $dexterity;

        return $this;
    }

    public function getConstitution(): ?int
    {
        return $this->constitution;
    }

    public function setConstitution(?int $constitution): self
    {
        $this->constitution = $constitution;

        return $this;
    }

    public function getIntelligence(): ?int
    {
        return $this->intelligence;
    }

    public function setIntelligence(?int $intelligence): self
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    public function getWisdom(): ?int
    {
        return $this->wisdom;
    }

    public function setWisdom(?int $wisdom): self
    {
        $this->wisdom = $wisdom;

        return $this;
    }

    public function getConstitutionSave(): ?int
    {
        return $this->constitutionSave;
    }

    public function setConstitutionSave(?int $constitutionSave): self
    {
        $this->constitutionSave = $constitutionSave;

        return $this;
    }

    public function getIntelligenceSave(): ?int
    {
        return $this->intelligenceSave;
    }

    public function setIntelligenceSave(?int $intelligenceSave): self
    {
        $this->intelligenceSave = $intelligenceSave;

        return $this;
    }

    public function getWisdomSave(): ?int
    {
        return $this->wisdomSave;
    }

    public function setWisdomSave(?int $wisdomSave): self
    {
        $this->wisdomSave = $wisdomSave;

        return $this;
    }

    public function getHistory(): ?int
    {
        return $this->history;
    }

    public function setHistory(?int $history): self
    {
        $this->history = $history;

        return $this;
    }

    public function getPerception(): ?int
    {
        return $this->perception;
    }

    public function setPerception(?int $perception): self
    {
        $this->perception = $perception;

        return $this;
    }

    public function getConditionImmunities(): ?string
    {
        return $this->conditionImmunities;
    }

    public function setConditionImmunities(?string $conditionImmunities): self
    {
        $this->conditionImmunities = $conditionImmunities;

        return $this;
    }

    public function getSenses(): ?string
    {
        return $this->senses;
    }

    public function setSenses(?string $senses): self
    {
        $this->senses = $senses;

        return $this;
    }

    public function getLanguages(): ?string
    {
        return $this->languages;
    }

    public function setLanguages(?string $languages): self
    {
        $this->languages = $languages;

        return $this;
    }

    public function getChallengesRating()
    {
        return $this->challengesRating;
    }

    public function setChallengesRating($challengesRating): self
    {
        $this->challengesRating = $challengesRating;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getCharisma(): ?int
    {
        return $this->charisma;
    }

    public function setCharisma(?int $charisma): self
    {
        $this->charisma = $charisma;

        return $this;
    }

    public function getMedicine(): ?int
    {
        return $this->medicine;
    }

    public function setMedicine(?int $medicine): self
    {
        $this->medicine = $medicine;

        return $this;
    }

    public function getReligion(): ?int
    {
        return $this->religion;
    }

    public function setReligion(?int $religion): self
    {
        $this->religion = $religion;

        return $this;
    }

    public function getDexteritySave(): ?int
    {
        return $this->dexteritySave;
    }

    public function setDexteritySave(?int $dexteritySave): self
    {
        $this->dexteritySave = $dexteritySave;

        return $this;
    }

    public function getCharismaSave(): ?int
    {
        return $this->charismaSave;
    }

    public function setCharismaSave(?int $charismaSave): self
    {
        $this->charismaSave = $charismaSave;

        return $this;
    }

    public function getStealth(): ?int
    {
        return $this->stealth;
    }

    public function setStealth(?int $stealth): self
    {
        $this->stealth = $stealth;

        return $this;
    }

    public function getPersuasion(): ?int
    {
        return $this->persuasion;
    }

    public function setPersuasion(?int $persuasion): self
    {
        $this->persuasion = $persuasion;

        return $this;
    }

    public function getInsight(): ?int
    {
        return $this->insight;
    }

    public function setInsight(?int $insight): self
    {
        $this->insight = $insight;

        return $this;
    }

    public function getDeception(): ?int
    {
        return $this->deception;
    }

    public function setDeception(?int $deception): self
    {
        $this->deception = $deception;

        return $this;
    }

    public function getArcana(): ?int
    {
        return $this->arcana;
    }

    public function setArcana(?int $arcana): self
    {
        $this->arcana = $arcana;

        return $this;
    }

    public function getAthletics(): ?int
    {
        return $this->athletics;
    }

    public function setAthletics(?int $athletics): self
    {
        $this->athletics = $athletics;

        return $this;
    }

    public function getAcrobatics(): ?int
    {
        return $this->acrobatics;
    }

    public function setAcrobatics(?int $acrobatics): self
    {
        $this->acrobatics = $acrobatics;

        return $this;
    }

    public function getStrengthSave(): ?int
    {
        return $this->strengthSave;
    }

    public function setStrengthSave(?int $strengthSave): self
    {
        $this->strengthSave = $strengthSave;

        return $this;
    }

    public function getSurvival(): ?int
    {
        return $this->survival;
    }

    public function setSurvival(?int $survival): self
    {
        $this->survival = $survival;

        return $this;
    }

    public function getInvestigation(): ?int
    {
        return $this->investigation;
    }

    public function setInvestigation(?int $investigation): self
    {
        $this->investigation = $investigation;

        return $this;
    }

    public function getNature(): ?int
    {
        return $this->nature;
    }

    public function setNature(?int $nature): self
    {
        $this->nature = $nature;

        return $this;
    }

    public function getIntimidation(): ?int
    {
        return $this->intimidation;
    }

    public function setIntimidation(?int $intimidation): self
    {
        $this->intimidation = $intimidation;

        return $this;
    }

    public function getPerformance(): ?int
    {
        return $this->performance;
    }

    public function setPerformance(?int $performance): self
    {
        $this->performance = $performance;

        return $this;
    }

    public function getDamageVulnerabilities(): ?string
    {
        return $this->damageVulnerabilities;
    }

    public function setDamageVulnerabilities(?string $damageVulnerabilities): self
    {
        $this->damageVulnerabilities = $damageVulnerabilities;

        return $this;
    }

    public function getDamageResistances(): ?string
    {
        return $this->damageResistances;
    }

    public function setDamageResistances(?string $damageResistances): self
    {
        $this->damageResistances = $damageResistances;

        return $this;
    }

    public function getDamageImmunities(): ?string
    {
        return $this->damageImmunities;
    }

    public function setDamageImmunities(?string $damageImmunities): self
    {
        $this->damageImmunities = $damageImmunities;

        return $this;
    }

    public function getReactionsName(): ?string
    {
        return $this->reactionsName;
    }

    public function setReactionsName(?string $reactionsName): self
    {
        $this->reactionsName = $reactionsName;

        return $this;
    }

    public function getReactionsDesc(): ?string
    {
        return $this->reactionsDesc;
    }

    public function setReactionsDesc(?string $reactionsDesc): self
    {
        $this->reactionsDesc = $reactionsDesc;

        return $this;
    }

    public function getReactionsAttackBonus(): ?int
    {
        return $this->reactionsAttackBonus;
    }

    public function setReactionsAttackBonus(?int $reactionsAttackBonus): self
    {
        $this->reactionsAttackBonus = $reactionsAttackBonus;

        return $this;
    }
}
