<?php

class ArticlesCategory {

    private int $idArticleCategory;
    private string $nameArticleCategory;
    private int $activeArticleCategory;
    private string $createdArticleCategory;
    private string $updatedArticleCategory;

    public function __construct(int $idArticleCategory, string $nameArticleCategory, int $activeArticleCategory, string $createdArticleCategory, string $updatedArticleCategory) {
        $this->idArticleCategory = $idArticleCategory;
        $this->nameArticleCategory = $nameArticleCategory;
        $this->activeArticleCategory = $activeArticleCategory;
        $this->createdArticleCategory = $createdArticleCategory;
        $this->updatedArticleCategory = $updatedArticleCategory;
    }

    public function getIdArticleCategory(): int {
        return $this->idArticleCategory;
    }

    public function getNameArticleCategory(): string {
        return $this->nameArticleCategory;
    }

    public function getActiveArticleCategory(): int {
        return $this->activeArticleCategory;
    }

    public function getCreatedArticleCategory(): string {
        return $this->createdArticleCategory;
    }

    public function getUpdatedArticleCategory(): string {
        return $this->updatedArticleCategory;
    }

    public function setIdArticleCategory(int $idArticleCategory): void {
        $this->idArticleCategory = $idArticleCategory;
    }

    public function setNameArticleCategory(string $nameArticleCategory): void {
        $this->nameArticleCategory = $nameArticleCategory;
    }

    public function setActiveArticleCategory(int $activeArticleCategory): void {
        $this->activeArticleCategory = $activeArticleCategory;
    }

    public function setCreatedArticleCategory(string $createdArticleCategory): void {
        $this->createdArticleCategory = $createdArticleCategory;
    }

    public function setUpdatedArticleCategory(string $updatedArticleCategory): void {
        $this->updatedArticleCategory = $updatedArticleCategory;
    }
}
