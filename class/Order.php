<?php
declare(strict_types=1);
namespace class;
// Класс для работы с таблицей заказов
use PDO;

class Order extends BaseTable {
    public function __construct(PDO $pdo) {
        parent::__construct($pdo, 'order');
    }
}