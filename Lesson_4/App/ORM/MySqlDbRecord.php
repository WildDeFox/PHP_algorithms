<?php


namespace ORM;


use Contracts\DbRecordInterface;

class MySqlDbRecord extends BaseMySqlORM implements DbRecordInterface
{

    public function getOne()
    {
        // TODO: Implement getOne() method.
    }

    public function insertOne()
    {
        echo 'Добавляю запись в таблицу MySQL базы данных' . PHP_EOL;
    }

    public function updateOne()
    {
        // TODO: Implement updateOne() method.
    }

    public function deleteONe()
    {
        // TODO: Implement deleteONe() method.
    }
}