<?php

class ArticlesMeasure {

    private $idArticlesMeasure;
    private $nameArticlesMeasure;
    private $activeArticlesMeasure;
    private $createdArticlesMeasure;
    private $updatedArticlesMeasure;

    public function __construct($idArticlesMeasure, $nameArticlesMeasure, $activeArticlesMeasure, $createdArticlesMeasure, $updatedArticlesMeasure) {
        $this->idArticlesMeasure = $idArticlesMeasure;
        $this->nameArticlesMeasure = $nameArticlesMeasure;
        $this->activeArticlesMeasure = $activeArticlesMeasure;
        $this->createdArticlesMeasure = $createdArticlesMeasure;
        $this->updatedArticlesMeasure = $updatedArticlesMeasure;
    }

    public function getIdArticlesMeasure() {
        return $this->idArticlesMeasure;
    }

    public function getNameArticlesMeasure() {
        return $this->nameArticlesMeasure;
    }

    public function getActiveArticlesMeasure() {
        return $this->activeArticlesMeasure;
    }

    public function getCreatedArticlesMeasure() {
        return $this->createdArticlesMeasure;
    }

    public function getUpdatedArticlesMeasure() {
        return $this->updatedArticlesMeasure;
    }

    public function setIdArticlesMeasure($idArticlesMeasure): void {
        $this->idArticlesMeasure = $idArticlesMeasure;
    }

    public function setNameArticlesMeasure($nameArticlesMeasure): void {
        $this->nameArticlesMeasure = $nameArticlesMeasure;
    }

    public function setActiveArticlesMeasure($activeArticlesMeasure): void {
        $this->activeArticlesMeasure = $activeArticlesMeasure;
    }

    public function setCreatedArticlesMeasure($createdArticlesMeasure): void {
        $this->createdArticlesMeasure = $createdArticlesMeasure;
    }

    public function setUpdatedArticlesMeasure($updatedArticlesMeasure): void {
        $this->updatedArticlesMeasure = $updatedArticlesMeasure;
    }
}
