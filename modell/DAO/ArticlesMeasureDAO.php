<?php

require 'modell/General/IMethods.php';
require 'modell/Entitys/ArticlesMeasure.php';

class ArticlesMeasureDAO implements IMethods {

    private string $table = 'table_articles';
    private string $columnID = 'id_article';

    public function Create(object $object): bool {
        
    }

    public function DeleteByID(int $id): bool {
        
    }

    public function ReadAll(): array {
        
    }

    public function ReadByID(int $id): ?object {
        
    }
}
