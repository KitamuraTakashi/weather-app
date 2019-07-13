<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LifeSocketPinpointCodeRepository")
 */
class LifeSocketPinpointCode
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
    private $pinpoint_code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pinpoint_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pinpoint_name_kana;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pref_code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pref_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pref_name_kana;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $region_code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $region_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $area_code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $area_name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPinpointCode(): ?string
    {
        return $this->pinpoint_code;
    }

    public function setPinpointCode(string $pinpoint_code): self
    {
        $this->pinpoint_code = $pinpoint_code;

        return $this;
    }

    public function getPinpointName(): ?string
    {
        return $this->pinpoint_name;
    }

    public function setPinpointName(string $pinpoint_name): self
    {
        $this->pinpoint_name = $pinpoint_name;

        return $this;
    }

    public function getPinpointNameKana(): ?string
    {
        return $this->pinpoint_name_kana;
    }

    public function setPinpointNameKana(string $pinpoint_name_kana): self
    {
        $this->pinpoint_name_kana = $pinpoint_name_kana;

        return $this;
    }

    public function getPrefCode(): ?string
    {
        return $this->pref_code;
    }

    public function setPrefCode(string $pref_code): self
    {
        $this->pref_code = $pref_code;

        return $this;
    }

    public function getPrefName(): ?string
    {
        return $this->pref_name;
    }

    public function setPrefName(string $pref_name): self
    {
        $this->pref_name = $pref_name;

        return $this;
    }

    public function getPrefNameKana(): ?string
    {
        return $this->pref_name_kana;
    }

    public function setPrefNameKana(string $pref_name_kana): self
    {
        $this->pref_name_kana = $pref_name_kana;

        return $this;
    }

    public function getRegionCode(): ?string
    {
        return $this->region_code;
    }

    public function setRegionCode(string $region_code): self
    {
        $this->region_code = $region_code;

        return $this;
    }

    public function getRegionName(): ?string
    {
        return $this->region_name;
    }

    public function setRegionName(string $region_name): self
    {
        $this->region_name = $region_name;

        return $this;
    }

    public function getAreaCode(): ?string
    {
        return $this->area_code;
    }

    public function setAreaCode(string $area_code): self
    {
        $this->area_code = $area_code;

        return $this;
    }

    public function getAreaName(): ?string
    {
        return $this->area_name;
    }

    public function setAreaName(string $area_name): self
    {
        $this->area_name = $area_name;

        return $this;
    }
}
