<?php

class Articles {

    private int $idArticle;
    private string $upsArticle;
    private string $nameArticle;
    private float $costeArticle;
    private float $saleArticle;
    private int $categoryArticle;
    private int $departmentArticle;
    private string $imageArticle;
    private int $measureArticle;
    private string $internalReferenceArticle;
    private string $internalNotesArticle;
    private int $activeArticle;
    private string $createdArticle;
    private string $updatedArticle;

    public function __construct(int $idArticle, string $upsArticle, string $nameArticle, float $costeArticle, float $saleArticle, int $categoryArticle, int $departmentArticle, string $imageArticle, int $measureArticle, string $internalReferenceArticle, string $internalNotesArticle, int $activeArticle, string $createdArticle, string $updatedArticle) {
        $this->idArticle = $idArticle;
        $this->upsArticle = $upsArticle;
        $this->nameArticle = $nameArticle;
        $this->costeArticle = $costeArticle;
        $this->saleArticle = $saleArticle;
        $this->categoryArticle = $categoryArticle;
        $this->departmentArticle = $departmentArticle;
        $this->imageArticle = $imageArticle;
        $this->measureArticle = $measureArticle;
        $this->internalReferenceArticle = $internalReferenceArticle;
        $this->internalNotesArticle = $internalNotesArticle;
        $this->activeArticle = $activeArticle;
        $this->createdArticle = $createdArticle;
        $this->updatedArticle = $updatedArticle;
    }

    public function getIdArticle(): int {
        return $this->idArticle;
    }

    public function getUpsArticle(): string {
        return $this->upsArticle;
    }

    public function getNameArticle(): string {
        return $this->nameArticle;
    }

    public function getCosteArticle(): float {
        return $this->costeArticle;
    }

    public function getSaleArticle(): float {
        return $this->saleArticle;
    }

    public function getCategoryArticle(): int {
        return $this->categoryArticle;
    }

    public function getDepartmentArticle(): int {
        return $this->departmentArticle;
    }

    public function getImageArticle(): string {
        return $this->imageArticle;
    }

    public function getMeasureArticle(): int {
        return $this->measureArticle;
    }

    public function getInternalReferenceArticle(): string {
        return $this->internalReferenceArticle;
    }

    public function getInternalNotesArticle(): string {
        return $this->internalNotesArticle;
    }

    public function getActiveArticle(): int {
        return $this->activeArticle;
    }

    public function getCreatedArticle(): DateTime {
        return $this->createdArticle;
    }

    public function getUpdatedArticle(): DateTime {
        return $this->updatedArticle;
    }

    public function setIdArticle(int $idArticle): void {
        $this->idArticle = $idArticle;
    }

    public function setUpsArticle(string $upsArticle): void {
        $this->upsArticle = $upsArticle;
    }

    public function setNameArticle(string $nameArticle): void {
        $this->nameArticle = $nameArticle;
    }

    public function setCosteArticle(float $costeArticle): void {
        $this->costeArticle = $costeArticle;
    }

    public function setSaleArticle(float $saleArticle): void {
        $this->saleArticle = $saleArticle;
    }

    public function setCategoryArticle(int $categoryArticle): void {
        $this->categoryArticle = $categoryArticle;
    }

    public function setDepartmentArticle(int $departmentArticle): void {
        $this->departmentArticle = $departmentArticle;
    }

    public function setImageArticle(string $imageArticle): void {
        $this->imageArticle = $imageArticle;
    }

    public function setMeasureArticle(int $measureArticle): void {
        $this->measureArticle = $measureArticle;
    }

    public function setInternalReferenceArticle(string $internalReferenceArticle): void {
        $this->internalReferenceArticle = $internalReferenceArticle;
    }

    public function setInternalNotesArticle(string $internalNotesArticle): void {
        $this->internalNotesArticle = $internalNotesArticle;
    }

    public function setActiveArticle(int $activeArticle): void {
        $this->activeArticle = $activeArticle;
    }

    public function setCreatedArticle(DateTime $createdArticle): void {
        $this->createdArticle = $createdArticle;
    }

    public function setUpdatedArticle(DateTime $updatedArticle): void {
        $this->updatedArticle = $updatedArticle;
    }
}
