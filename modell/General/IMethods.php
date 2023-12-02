<?php

require 'modell/DBConn.php';

interface IMethods {

    public function Create(object $object): bool;

    public function ReadAll(): array;

    public function ReadByID(int $id): ?object;

    public function DeleteByID(int $id): bool;
}
