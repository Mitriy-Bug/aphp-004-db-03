<?php
declare(strict_types=1);
namespace class;
// Класс для работы с таблицей клиентов
use PDO;

class Client extends BaseTable {
    public function __construct(PDO $pdo) {
        parent::__construct($pdo, 'client');
    }
}