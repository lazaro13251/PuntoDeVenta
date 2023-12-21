<?php

class ArticlesCategory {

    private $idArticleCategory;
    private $nameArticleCategory;
    private $activeArticleCategory;
    private $createdArticleCategory;
    private $updatedArticleCategory;

    public function __construct($idArticleCategory, $nameArticleCategory, $activeArticleCategory, $createdArticleCategory, $updatedArticleCategory) {
        $this->idArticleCategory = $idArticleCategory;
        $this->nameArticleCategory = $nameArticleCategory;
        $this->activeArticleCategory = $activeArticleCategory;
        $this->createdArticleCategory = $createdArticleCategory;
        $this->updatedArticleCategory = $updatedArticleCategory;
    }

    public function getIdArticleCategory() {
        return $this->idArticleCategory;
    }

    public function getNameArticleCategory() {
        return $this->nameArticleCategory;
    }

    public function getActiveArticleCategory() {
        return $this->activeArticleCategory;
    }

    public function getCreatedArticleCategory() {
        return $this->createdArticleCategory;
    }

    public function getUpdatedArticleCategory() {
        return $this->updatedArticleCategory;
    }

    public function setIdArticleCategory($idArticleCategory): void {
        $this->idArticleCategory = $idArticleCategory;
    }

    public function setNameArticleCategory($nameArticleCategory): void {
        $this->nameArticleCategory = $nameArticleCategory;
    }

    public function setActiveArticleCategory($activeArticleCategory): void {
        $this->activeArticleCategory = $activeArticleCategory;
    }

    public function setCreatedArticleCategory($createdArticleCategory): void {
        $this->createdArticleCategory = $createdArticleCategory;
    }

    public function setUpdatedArticleCategory($updatedArticleCategory): void {
        $this->updatedArticleCategory = $updatedArticleCategory;
    }
}
