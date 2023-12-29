<?php

class ControllerArticles {

    public function ViewArticlesMain() {
        require_once __DIR__ . '/../view/Articles/MainArticles.php';
    }

    public function ViewCategoryMain() {
        require_once __DIR__ . '/../view/Category/MainCategory.php';
    }

    public function ViewEditCategoryArticles() {
        require_once __DIR__ . '/../view/Category/EditCategory.php';
    }

    public function ViewMeasureMain() {
        require_once __DIR__ . '/../view/Measure/MainMeasure.php';
    }

    public function ViewEditMeasureArticles() {
        require_once __DIR__ . '/../view/Measure/EditMeasure.php';
    }
}
