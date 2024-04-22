<?php

namespace App\Entity;
use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use App\Repository\WarehouseBalanceRepository;

#[ORM\Entity(repositoryClass: WarehouseBalanceRepository::class)]
class WarehouseBalance
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\Column(type: Types::BIGINT)]
    private ?int $id = null;

    /**
     * @var string $warehouse Склад
     */
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $warehouse = null;

    /**
     * @var string $materialType Тип материала
     */
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $materialType = null;

    /**
     * @var string $area Участок
     */
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $area = null;

    /**
     * @var string $layer Пласт
     */
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $layer = null;

    /**
     * @var string $profile Профиль
     */
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $profile = null;

    /**
     * @var string $volume Объем
     */
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $volume = null;
    /**
     * @var data|null $dateAvailability Дата Доступности
     */
    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable: true)]
    private ?DateTimeImmutable $dateAvailability = null;
    /**
     * @var string $ad Ad
     */
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ad = null;

    /**
     * @var string $vd Vd
     */
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vd = null;

    /**
     * @var string $y Y
     */
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $y = null;

     /**
     * @var string $mark Марка
     */
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mark = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getWarehouse(): ?string
    {
        return $this->warehouse;
    }

    public function setWarehouse(?string $warehouse): static
    {
        $this->warehouse = $warehouse;

        return $this;
    }

    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    public function setMaterialType(?string $materialType): static
    {
        $this->materialType = $materialType;

        return $this;
    }


    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(?string $area): static
    {
        $this->area = $area;

        return $this;
    }

    public function getLayer(): ?string
    {
        return $this->layer;
    }

    public function setLayer(?string $layer): static
    {
        $this->layer = $layer;

        return $this;
    }

    public function getProfile(): ?string
    {
        return $this->profile;
    }

    public function setProfile(?string $profile): static
    {
        $this->profile = $profile;

        return $this;
    }

    public function getVolume(): ?string
    {
        return $this->volume;
    }

    public function setVolume(?string $volume): static
    {
        $this->volume = $volume;

        return $this;
    }

    public function getDateAvailability(): ?DateTimeImmutable
    {
        return $this->dateAvailability;
    }
    
    public function setDateAvailability(?DateTimeImmutable $dateAvailability): static
    {
        $this->dateAvailability = $dateAvailability;
    
        return $this;
    }
    
    public function getAd(): ?string
    {
        return $this->ad;
    }

    public function setAd(?string $ad): static
    {
        $this->ad = $ad;

        return $this;
    }

    public function getVd(): ?string
    {
        return $this->vd;
    }

    public function setVd(?string $vd): static
    {
        $this->vd = $vd;

        return $this;
    }

    public function getY(): ?string
    {
        return $this->y;
    }

    public function setY(?string $y): static
    {
        $this->y = $y;

        return $this;
    }
    public function getMark(): ?string
    {
        return $this->mark;
    }

    public function setMark(?string $mark): static
    {
        $this->mark = $mark;

        return $this;
    }

}
