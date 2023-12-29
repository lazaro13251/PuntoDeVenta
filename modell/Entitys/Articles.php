<?php

class Articles {

    public $idArticle;
    public $upsArticle;
    public $nameArticle;
    public $costeArticle;
    public $saleArticle;
    public $categoryArticle;
    public $departmentArticle;
    public $imageArticle;
    public $measureArticle;
    public $internalReferenceArticle;
    public $internalNotesArticle;
    public $activeArticle;
    public $createdArticle;
    public $updatedArticle;

    public function __construct($idArticle, $upsArticle, $nameArticle, $costeArticle, $saleArticle, $categoryArticle, $departmentArticle, $imageArticle, $measureArticle, $internalReferenceArticle, $internalNotesArticle, $activeArticle, $createdArticle, $updatedArticle) {
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

    public function getIdArticle() {
        return $this->idArticle;
    }

    public function getUpsArticle() {
        return $this->upsArticle;
    }

    public function getNameArticle() {
        return $this->nameArticle;
    }

    public function getCosteArticle() {
        return $this->costeArticle;
    }

    public function getSaleArticle() {
        return $this->saleArticle;
    }

    public function getCategoryArticle() {
        return $this->categoryArticle;
    }

    public function getDepartmentArticle() {
        return $this->departmentArticle;
    }

    public function getImageArticle() {
        return $this->imageArticle;
    }

    public function getMeasureArticle() {
        return $this->measureArticle;
    }

    public function getInternalReferenceArticle() {
        return $this->internalReferenceArticle;
    }

    public function getInternalNotesArticle() {
        return $this->internalNotesArticle;
    }

    public function getActiveArticle() {
        return $this->activeArticle;
    }

    public function getCreatedArticle() {
        return $this->createdArticle;
    }

    public function getUpdatedArticle() {
        return $this->updatedArticle;
    }

    public function setIdArticle($idArticle): void {
        $this->idArticle = $idArticle;
    }

    public function setUpsArticle($upsArticle): void {
        $this->upsArticle = $upsArticle;
    }

    public function setNameArticle($nameArticle): void {
        $this->nameArticle = $nameArticle;
    }

    public function setCosteArticle($costeArticle): void {
        $this->costeArticle = $costeArticle;
    }

    public function setSaleArticle($saleArticle): void {
        $this->saleArticle = $saleArticle;
    }

    public function setCategoryArticle($categoryArticle): void {
        $this->categoryArticle = $categoryArticle;
    }

    public function setDepartmentArticle($departmentArticle): void {
        $this->departmentArticle = $departmentArticle;
    }

    public function setImageArticle($imageArticle): void {
        $this->imageArticle = $imageArticle;
    }

    public function setMeasureArticle($measureArticle): void {
        $this->measureArticle = $measureArticle;
    }

    public function setInternalReferenceArticle($internalReferenceArticle): void {
        $this->internalReferenceArticle = $internalReferenceArticle;
    }

    public function setInternalNotesArticle($internalNotesArticle): void {
        $this->internalNotesArticle = $internalNotesArticle;
    }

    public function setActiveArticle($activeArticle): void {
        $this->activeArticle = $activeArticle;
    }

    public function setCreatedArticle($createdArticle): void {
        $this->createdArticle = $createdArticle;
    }

    public function setUpdatedArticle($updatedArticle): void {
        $this->updatedArticle = $updatedArticle;
    }
}
