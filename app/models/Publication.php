<?php

namespace app\models;

use PDO;


class Publication extends \app\core\Model
{
    public $publication_id;
    public $admin_id;
    public $text;
    public $title;
    public $timestamp;

    //creat
    public function insert() {
        //statement 
        $SQL = 'INSERT INTO Publication (admin_id,title,text,timestamp) 
            VALUE (:admin_id,:title,:text,:timestamp,)';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(
            ['admin_id'=>$this->admin_id,
            'title'=>$this->title,
            'text'=>$this->text,
            'timestamp'=>$this->timestamp
            ]
        );
    }

    public function getAll() {
        $SQL = 'SELECT * FROM Publication';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();

        $STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Publication');//set the type of data returned by fetches
		return $STMT->fetchAll();
    }

    public function getById($publication_id) {
        $SQL = 'SELECT * FROM Publication WHERE publication_id = :publication_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['publication_id'=>$publication_id]);
        
        $STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Publication');
        return $STMT->fetch();
    }
    
    //search by title
    public function getByTitle($title) {
        $SQL = 'SELECT *
                FROM Publication
                WHERE title LIKE :title';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['title' => '%' . $title . '%']);
    
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Publication');
        return $STMT->fetchAll();
    }
    
    //search by keyword
    public function getByContent($text) {
        $SQL = 'SELECT *
                FROM Publication
                WHERE text LIKE :text';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['text' => '%' . $text . '%']);
    
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Publication');
        return $STMT->fetchAll();
    }
    
    //update
    public function update($publication_id) {
        $SQL = 'UPDATE Publication SET title=:title, text=:text WHERE publication_id = :publication_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            'publication_id'=>$publication_id,
            'title'=>$this->title,
            'text'=>$this->text,
        ]);
    }
    
    //delete
    public function delete($publication_id) {
        $SQL = 'DELETE FROM Publication WHERE publication_id = :publication_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['publication_id'=> $publication_id] //no
		);
    }

}