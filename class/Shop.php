<?php
declare(strict_types=1);
namespace class;
// Класс для работы с таблицей магазинов
use PDO;

class Shop extends BaseTable {
    public function __construct(PDO $pdo) {
        parent::__construct($pdo, 'shop');
    }
}