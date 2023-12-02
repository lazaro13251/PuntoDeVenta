<?php

class ArticlesMeasure {

    private int $idArticlesMeasure;
    private string $nameArticlesMeasure;
    private int $activeArticlesMeasure;
    private DateTime $createdArticlesMeasure;
    private DateTime $updatedArticlesMeasure;

    public function __construct(int $idArticlesMeasure, string $nameArticlesMeasure, int $activeArticlesMeasure, DateTime $createdArticlesMeasure, DateTime $updatedArticlesMeasure) {
        $this->idArticlesMeasure = $idArticlesMeasure;
        $this->nameArticlesMeasure = $nameArticlesMeasure;
        $this->activeArticlesMeasure = $activeArticlesMeasure;
        $this->createdArticlesMeasure = $createdArticlesMeasure;
        $this->updatedArticlesMeasure = $updatedArticlesMeasure;
    }

    public function getIdArticlesMeasure(): int {
        return $this->idArticlesMeasure;
    }

    public function getNameArticlesMeasure(): string {
        return $this->nameArticlesMeasure;
    }

    public function getActiveArticlesMeasure(): int {
        return $this->activeArticlesMeasure;
    }

    public function getCreatedArticlesMeasure(): DateTime {
        return $this->createdArticlesMeasure;
    }

    public function getUpdatedArticlesMeasure(): DateTime {
        return $this->updatedArticlesMeasure;
    }

    public function setIdArticlesMeasure(int $idArticlesMeasure): void {
        $this->idArticlesMeasure = $idArticlesMeasure;
    }

    public function setNameArticlesMeasure(string $nameArticlesMeasure): void {
        $this->nameArticlesMeasure = $nameArticlesMeasure;
    }

    public function setActiveArticlesMeasure(int $activeArticlesMeasure): void {
        $this->activeArticlesMeasure = $activeArticlesMeasure;
    }

    public function setCreatedArticlesMeasure(DateTime $createdArticlesMeasure): void {
        $this->createdArticlesMeasure = $createdArticlesMeasure;
    }

    public function setUpdatedArticlesMeasure(DateTime $updatedArticlesMeasure): void {
        $this->updatedArticlesMeasure = $updatedArticlesMeasure;
    }
}
