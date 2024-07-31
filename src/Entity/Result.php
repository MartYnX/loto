<?php

namespace App\Entity;

use App\Repository\ResultRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResultRepository::class)]
class Result
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $annee_numero_de_tirage = null;

    #[ORM\Column(length: 20)]
    private ?string $jour_de_tirage = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_de_tirage = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_de_forclusion = null;

    #[ORM\Column(length: 3)]
    private ?string $boule_1 = null;

    #[ORM\Column(length: 3)]
    private ?string $boule_2 = null;

    #[ORM\Column(length: 3)]
    private ?string $boule_3 = null;

    #[ORM\Column(length: 3)]
    private ?string $boule_4 = null;

    #[ORM\Column(length: 3)]
    private ?string $boule_5 = null;

    #[ORM\Column(length: 2)]
    private ?string $numero_chance = null;

    #[ORM\Column(length: 40)]
    private ?string $combinaison_gagnante_en_ordre_croissant = null;

    #[ORM\Column(length: 2)]
    private ?string $nombre_de_gagnant_au_rang1 = null;

    #[ORM\Column(length: 15)]
    private ?string $rapport_du_rang1 = null;

    #[ORM\Column(length: 2)]
    private ?string $nombre_de_gagnant_au_rang2 = null;

    #[ORM\Column(length: 15)]
    private ?string $rapport_du_rang2 = null;

    #[ORM\Column(length: 2)]
    private ?string $nombre_de_gagnant_au_rang3 = null;

    #[ORM\Column]
    private ?float $rapport_du_rang3 = null;

    #[ORM\Column(length: 2)]
    private ?string $nombre_de_gagnant_au_rang4 = null;

    #[ORM\Column]
    private ?float $rapport_du_rang4 = null;

    #[ORM\Column(length: 2)]
    private ?string $nombre_de_gagnant_au_rang5 = null;

    #[ORM\Column]
    private ?float $rapport_du_rang5 = null;

    #[ORM\Column(length: 2)]
    private ?string $nombre_de_gagnant_au_rang6 = null;

    #[ORM\Column]
    private ?float $rapport_du_rang6 = null;

    #[ORM\Column(length: 2)]
    private ?string $nombre_de_gagnant_au_rang7 = null;

    #[ORM\Column]
    private ?float $rapport_du_rang7 = null;

    #[ORM\Column(length: 2)]
    private ?string $nombre_de_gagnant_au_rang8 = null;

    #[ORM\Column]
    private ?float $rapport_du_rang8 = null;

    #[ORM\Column(length: 2)]
    private ?string $nombre_de_gagnant_au_rang9 = null;

    #[ORM\Column]
    private ?float $rapport_du_rang9 = null;

    #[ORM\Column]
    private ?float $nombre_de_codes_gagnants = null;

    #[ORM\Column]
    private ?float $rapport_codes_gagnants = null;

    #[ORM\Column(length: 255)]
    private ?string $codes_gagnants = null;

    #[ORM\Column]
    private ?float $boule_1_second_tirage = null;

    #[ORM\Column]
    private ?float $boule_2_second_tirage = null;

    #[ORM\Column]
    private ?float $boule_3_second_tirage = null;

    #[ORM\Column]
    private ?float $boule_4_second_tirage = null;

    #[ORM\Column]
    private ?float $boule_5_second_tirage = null;

    #[ORM\Column(length: 30)]
    private ?string $promotion_second_tirage = null;

    #[ORM\Column(length: 30)]
    private ?string $combinaison_gagnant_second_tirage_en_ordre_croissant = null;

    #[ORM\Column]
    private ?float $nombre_de_gagnant_au_rang_1_second_tirage = null;

    #[ORM\Column]
    private ?float $rapport_du_rang1_second_tirage = null;

    #[ORM\Column]
    private ?float $nombre_de_gagnant_au_rang_2_second_tirage = null;

    #[ORM\Column]
    private ?float $rapport_du_rang2_second_tirage = null;

    #[ORM\Column]
    private ?float $nombre_de_gagnant_au_rang_3_second_tirage = null;

    #[ORM\Column]
    private ?float $rapport_du_rang3_second_tirage = null;

    #[ORM\Column]
    private ?float $nombre_de_gagnant_au_rang_4_second_tirage = null;

    #[ORM\Column]
    private ?float $rapport_du_rang4_second_tirage = null;

    #[ORM\Column(length: 35)]
    private ?string $numero_jokerplus = null;

    #[ORM\Column(length: 5)]
    private ?string $devise = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnneeNumeroDeTirage(): ?string
    {
        return $this->annee_numero_de_tirage;
    }

    public function setAnneeNumeroDeTirage(string $annee_numero_de_tirage): static
    {
        $this->annee_numero_de_tirage = $annee_numero_de_tirage;

        return $this;
    }

    public function getJourDeTirage(): ?string
    {
        return $this->jour_de_tirage;
    }

    public function setJourDeTirage(string $jour_de_tirage): static
    {
        $this->jour_de_tirage = $jour_de_tirage;

        return $this;
    }

    public function getDateDeTirage(): ?\DateTimeInterface
    {
        return $this->date_de_tirage;
    }

    public function setDateDeTirage(\DateTimeInterface $date_de_tirage): static
    {
        $this->date_de_tirage = $date_de_tirage;

        return $this;
    }

    public function getDateDeForclusion(): ?\DateTimeInterface
    {
        return $this->date_de_forclusion;
    }

    public function setDateDeForclusion(\DateTimeInterface $date_de_forclusion): static
    {
        $this->date_de_forclusion = $date_de_forclusion;

        return $this;
    }

    public function getBoule1(): ?string
    {
        return $this->boule_1;
    }

    public function setBoule1(string $boule_1): static
    {
        $this->boule_1 = $boule_1;

        return $this;
    }

    public function getBoule2(): ?string
    {
        return $this->boule_2;
    }

    public function setBoule2(string $boule_2): static
    {
        $this->boule_2 = $boule_2;

        return $this;
    }

    public function getBoule3(): ?string
    {
        return $this->boule_3;
    }

    public function setBoule3(string $boule_3): static
    {
        $this->boule_3 = $boule_3;

        return $this;
    }

    public function getBoule4(): ?string
    {
        return $this->boule_4;
    }

    public function setBoule4(string $boule_4): static
    {
        $this->boule_4 = $boule_4;

        return $this;
    }

    public function getBoule5(): ?string
    {
        return $this->boule_5;
    }

    public function setBoule5(string $boule_5): static
    {
        $this->boule_5 = $boule_5;

        return $this;
    }

    public function getNumeroChance(): ?string
    {
        return $this->numero_chance;
    }

    public function setNumeroChance(string $numero_chance): static
    {
        $this->numero_chance = $numero_chance;

        return $this;
    }

    public function getCombinaisonGagnanteEnOrdreCroissant(): ?string
    {
        return $this->combinaison_gagnante_en_ordre_croissant;
    }

    public function setCombinaisonGagnanteEnOrdreCroissant(string $combinaison_gagnante_en_ordre_croissant): static
    {
        $this->combinaison_gagnante_en_ordre_croissant = $combinaison_gagnante_en_ordre_croissant;

        return $this;
    }

    public function getNombreDeGagnantAuRang1(): ?string
    {
        return $this->nombre_de_gagnant_au_rang1;
    }

    public function setNombreDeGagnantAuRang1(string $nombre_de_gagnant_au_rang1): static
    {
        $this->nombre_de_gagnant_au_rang1 = $nombre_de_gagnant_au_rang1;

        return $this;
    }

    public function getRapportDuRang1(): ?string
    {
        return $this->rapport_du_rang1;
    }

    public function setRapportDuRang1(string $rapport_du_rang1): static
    {
        $this->rapport_du_rang1 = $rapport_du_rang1;

        return $this;
    }

    public function getNombreDeGagnantAuRang2(): ?string
    {
        return $this->nombre_de_gagnant_au_rang2;
    }

    public function setNombreDeGagnantAuRang2(string $nombre_de_gagnant_au_rang2): static
    {
        $this->nombre_de_gagnant_au_rang2 = $nombre_de_gagnant_au_rang2;

        return $this;
    }

    public function getRapportDuRang2(): ?string
    {
        return $this->rapport_du_rang2;
    }

    public function setRapportDuRang2(string $rapport_du_rang2): static
    {
        $this->rapport_du_rang2 = $rapport_du_rang2;

        return $this;
    }

    public function getNombreDeGagnantAuRang3(): ?string
    {
        return $this->nombre_de_gagnant_au_rang3;
    }

    public function setNombreDeGagnantAuRang3(string $nombre_de_gagnant_au_rang3): static
    {
        $this->nombre_de_gagnant_au_rang3 = $nombre_de_gagnant_au_rang3;

        return $this;
    }

    public function getRapportDuRang3(): ?float
    {
        return $this->rapport_du_rang3;
    }

    public function setRapportDuRang3(float $rapport_du_rang3): static
    {
        $this->rapport_du_rang3 = $rapport_du_rang3;

        return $this;
    }

    public function getNombreDeGagnantAuRang4(): ?string
    {
        return $this->nombre_de_gagnant_au_rang4;
    }

    public function setNombreDeGagnantAuRang4(string $nombre_de_gagnant_au_rang4): static
    {
        $this->nombre_de_gagnant_au_rang4 = $nombre_de_gagnant_au_rang4;

        return $this;
    }

    public function getRapportDuRang4(): ?float
    {
        return $this->rapport_du_rang4;
    }

    public function setRapportDuRang4(float $rapport_du_rang4): static
    {
        $this->rapport_du_rang4 = $rapport_du_rang4;

        return $this;
    }

    public function getNombreDeGagnantAuRang5(): ?string
    {
        return $this->nombre_de_gagnant_au_rang5;
    }

    public function setNombreDeGagnantAuRang5(string $nombre_de_gagnant_au_rang5): static
    {
        $this->nombre_de_gagnant_au_rang5 = $nombre_de_gagnant_au_rang5;

        return $this;
    }

    public function getRapportDuRang5(): ?float
    {
        return $this->rapport_du_rang5;
    }

    public function setRapportDuRang5(float $rapport_du_rang5): static
    {
        $this->rapport_du_rang5 = $rapport_du_rang5;

        return $this;
    }

    public function getNombreDeGagnantAuRang6(): ?string
    {
        return $this->nombre_de_gagnant_au_rang6;
    }

    public function setNombreDeGagnantAuRang6(string $nombre_de_gagnant_au_rang6): static
    {
        $this->nombre_de_gagnant_au_rang6 = $nombre_de_gagnant_au_rang6;

        return $this;
    }

    public function getRapportDuRang6(): ?float
    {
        return $this->rapport_du_rang6;
    }

    public function setRapportDuRang6(float $rapport_du_rang6): static
    {
        $this->rapport_du_rang6 = $rapport_du_rang6;

        return $this;
    }

    public function getNombreDeGagnantAuRang7(): ?string
    {
        return $this->nombre_de_gagnant_au_rang7;
    }

    public function setNombreDeGagnantAuRang7(string $nombre_de_gagnant_au_rang7): static
    {
        $this->nombre_de_gagnant_au_rang7 = $nombre_de_gagnant_au_rang7;

        return $this;
    }

    public function getRapportDuRang7(): ?float
    {
        return $this->rapport_du_rang7;
    }

    public function setRapportDuRang7(float $rapport_du_rang7): static
    {
        $this->rapport_du_rang7 = $rapport_du_rang7;

        return $this;
    }

    public function getNombreDeGagnantAuRang8(): ?string
    {
        return $this->nombre_de_gagnant_au_rang8;
    }

    public function setNombreDeGagnantAuRang8(string $nombre_de_gagnant_au_rang8): static
    {
        $this->nombre_de_gagnant_au_rang8 = $nombre_de_gagnant_au_rang8;

        return $this;
    }

    public function getRapportDuRang8(): ?float
    {
        return $this->rapport_du_rang8;
    }

    public function setRapportDuRang8(float $rapport_du_rang8): static
    {
        $this->rapport_du_rang8 = $rapport_du_rang8;

        return $this;
    }

    public function getNombreDeGagnantAuRang9(): ?string
    {
        return $this->nombre_de_gagnant_au_rang9;
    }

    public function setNombreDeGagnantAuRang9(string $nombre_de_gagnant_au_rang9): static
    {
        $this->nombre_de_gagnant_au_rang9 = $nombre_de_gagnant_au_rang9;

        return $this;
    }

    public function getRapportDuRang9(): ?float
    {
        return $this->rapport_du_rang9;
    }

    public function setRapportDuRang9(float $rapport_du_rang9): static
    {
        $this->rapport_du_rang9 = $rapport_du_rang9;

        return $this;
    }

    public function getNombreDeCodesGagnants(): ?float
    {
        return $this->nombre_de_codes_gagnants;
    }

    public function setNombreDeCodesGagnants(float $nombre_de_codes_gagnants): static
    {
        $this->nombre_de_codes_gagnants = $nombre_de_codes_gagnants;

        return $this;
    }

    public function getRapportCodesGagnants(): ?float
    {
        return $this->rapport_codes_gagnants;
    }

    public function setRapportCodesGagnants(float $rapport_codes_gagnants): static
    {
        $this->rapport_codes_gagnants = $rapport_codes_gagnants;

        return $this;
    }

    public function getCodesGagnants(): ?string
    {
        return $this->codes_gagnants;
    }

    public function setCodesGagnants(string $codes_gagnants): static
    {
        $this->codes_gagnants = $codes_gagnants;

        return $this;
    }

    public function getBoule1SecondTirage(): ?float
    {
        return $this->boule_1_second_tirage;
    }

    public function setBoule1SecondTirage(float $boule_1_second_tirage): static
    {
        $this->boule_1_second_tirage = $boule_1_second_tirage;

        return $this;
    }

    public function getBoule2SecondTirage(): ?float
    {
        return $this->boule_2_second_tirage;
    }

    public function setBoule2SecondTirage(float $boule_2_second_tirage): static
    {
        $this->boule_2_second_tirage = $boule_2_second_tirage;

        return $this;
    }

    public function getBoule3SecondTirage(): ?float
    {
        return $this->boule_3_second_tirage;
    }

    public function setBoule3SecondTirage(float $boule_3_second_tirage): static
    {
        $this->boule_3_second_tirage = $boule_3_second_tirage;

        return $this;
    }

    public function getBoule4SecondTirage(): ?float
    {
        return $this->boule_4_second_tirage;
    }

    public function setBoule4SecondTirage(float $boule_4_second_tirage): static
    {
        $this->boule_4_second_tirage = $boule_4_second_tirage;

        return $this;
    }

    public function getBoule5SecondTirage(): ?float
    {
        return $this->boule_5_second_tirage;
    }

    public function setBoule5SecondTirage(float $boule_5_second_tirage): static
    {
        $this->boule_5_second_tirage = $boule_5_second_tirage;

        return $this;
    }

    public function getPromotionSecondTirage(): ?string
    {
        return $this->promotion_second_tirage;
    }

    public function setPromotionSecondTirage(string $promotion_second_tirage): static
    {
        $this->promotion_second_tirage = $promotion_second_tirage;

        return $this;
    }

    public function getCombinaisonGagnantSecondTirageEnOrdreCroissant(): ?string
    {
        return $this->combinaison_gagnant_second_tirage_en_ordre_croissant;
    }

    public function setCombinaisonGagnantSecondTirageEnOrdreCroissant(string $combinaison_gagnant_second_tirage_en_ordre_croissant): static
    {
        $this->combinaison_gagnant_second_tirage_en_ordre_croissant = $combinaison_gagnant_second_tirage_en_ordre_croissant;

        return $this;
    }

    public function getNombreDeGagnantAuRang1SecondTirage(): ?float
    {
        return $this->nombre_de_gagnant_au_rang_1_second_tirage;
    }

    public function setNombreDeGagnantAuRang1SecondTirage(float $nombre_de_gagnant_au_rang_1_second_tirage): static
    {
        $this->nombre_de_gagnant_au_rang_1_second_tirage = $nombre_de_gagnant_au_rang_1_second_tirage;

        return $this;
    }

    public function getRapportDuRang1SecondTirage(): ?float
    {
        return $this->rapport_du_rang1_second_tirage;
    }

    public function setRapportDuRang1SecondTirage(float $rapport_du_rang1_second_tirage): static
    {
        $this->rapport_du_rang1_second_tirage = $rapport_du_rang1_second_tirage;

        return $this;
    }

    public function getNombreDeGagnantAuRang2SecondTirage(): ?float
    {
        return $this->nombre_de_gagnant_au_rang_2_second_tirage;
    }

    public function setNombreDeGagnantAuRang2SecondTirage(float $nombre_de_gagnant_au_rang_2_second_tirage): static
    {
        $this->nombre_de_gagnant_au_rang_2_second_tirage = $nombre_de_gagnant_au_rang_2_second_tirage;

        return $this;
    }

    public function getRapportDuRang2SecondTirage(): ?float
    {
        return $this->rapport_du_rang2_second_tirage;
    }

    public function setRapportDuRang2SecondTirage(float $rapport_du_rang2_second_tirage): static
    {
        $this->rapport_du_rang2_second_tirage = $rapport_du_rang2_second_tirage;

        return $this;
    }

    public function getNombreDeGagnantAuRang3SecondTirage(): ?float
    {
        return $this->nombre_de_gagnant_au_rang_3_second_tirage;
    }

    public function setNombreDeGagnantAuRang3SecondTirage(float $nombre_de_gagnant_au_rang_3_second_tirage): static
    {
        $this->nombre_de_gagnant_au_rang_3_second_tirage = $nombre_de_gagnant_au_rang_3_second_tirage;

        return $this;
    }

    public function getRapportDuRang3SecondTirage(): ?float
    {
        return $this->rapport_du_rang3_second_tirage;
    }

    public function setRapportDuRang3SecondTirage(float $rapport_du_rang3_second_tirage): static
    {
        $this->rapport_du_rang3_second_tirage = $rapport_du_rang3_second_tirage;

        return $this;
    }

    public function getNombreDeGagnantAuRang4SecondTirage(): ?float
    {
        return $this->nombre_de_gagnant_au_rang_4_second_tirage;
    }

    public function setNombreDeGagnantAuRang4SecondTirage(float $nombre_de_gagnant_au_rang_4_second_tirage): static
    {
        $this->nombre_de_gagnant_au_rang_4_second_tirage = $nombre_de_gagnant_au_rang_4_second_tirage;

        return $this;
    }

    public function getRapportDuRang4SecondTirage(): ?float
    {
        return $this->rapport_du_rang4_second_tirage;
    }

    public function setRapportDuRang4SecondTirage(float $rapport_du_rang4_second_tirage): static
    {
        $this->rapport_du_rang4_second_tirage = $rapport_du_rang4_second_tirage;

        return $this;
    }

    public function getNumeroJokerplus(): ?string
    {
        return $this->numero_jokerplus;
    }

    public function setNumeroJokerplus(string $numero_jokerplus): static
    {
        $this->numero_jokerplus = $numero_jokerplus;

        return $this;
    }

    public function getDevise(): ?string
    {
        return $this->devise;
    }

    public function setDevise(string $devise): static
    {
        $this->devise = $devise;

        return $this;
    }
}
