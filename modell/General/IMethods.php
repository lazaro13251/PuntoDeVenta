<?php

require_once __DIR__ . '/../DBConn.php';
require_once __DIR__ . '/../Tables.php';

interface IMethods {

    public function buildTable(): Tables;

    public function Create(object $object): bool;

    public function ReadAll(): array;

    public function ReadByID(int $id): ?object;

    public function DeleteByID(int $id): bool;
}
