<?php

namespace App\Core;

use App\Core\Database;
use App\Core\Pagination;


class AppServiceProvider
{

      public $db;
      public static AppServiceProvider $app;

      // public Pagination $pagination;

      public function __construct($config = [])
      {
            
            self::$app = $this;

            $Database = Database::getInstance();
            $this->db = $Database->getConnection();

            $this->pagination = new Pagination();
      }
}
