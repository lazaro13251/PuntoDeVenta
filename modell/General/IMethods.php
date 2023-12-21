<?php

require 'modell/DBConn.php';
require 'modell/Tables.php';

interface IMethods {

    public function buildTable(): Tables;

    public function Create(object $object): bool;

    public function ReadAll(): array;

    public function ReadByID(int $id): ?object;

    public function DeleteByID(int $id): bool;
}
