<?php


class crudStationConfigue extends DataBase {

    private $id;
    private $nameOfStation;
    private $cityOfStation;

    // public function __construct($nameOfStation,$cityOfStation)
    // {
    //     $this->nameOfStation = $nameOfStation;
    //     $this->cityOfStation = $cityOfStation;
    // }
    public function setIdOfStation($IdOfStation){
        $this->id = $IdOfStation;
    }

    public function getIdOfStation($IdOfStation){
        return $this->id ;
    }

    public function setNameOfStation($nameOfStation){
        $this->nameOfStation = $nameOfStation;
    }

    public function getNameOfStation(){
        return $this->nameOfStation ;
    }

    public function setCityOfStation($cityOfStation){
        $this->cityOfStation = $cityOfStation;
    }

    public function getCityOfStation(){
        return $this->cityOfStation ;
    }

    public function insertData(){
        $stmt=$this->connect()->prepare("INSERT INTO `stations`(`station`,`city`) VALUES (?,?)");
        $stmt->execute([$this->nameOfStation,$this->cityOfStation]);
    }

    public function fetchAll() {
        $stmt = $this->connect()->prepare("SELECT * FROM `stations`");
        $stmt->execute();
        return $stmt->fetchAll();
        // $cc[]=$stmt->execute();
        // return $cc;
    }
  
    public function fetchone(){
        $stmt = $this->connect()->prepare("SELECT * FROM `stations` WHERE id=? "); 
        $stmt->execute($this->id);
        return $stmt->fetchAll();
    }

    public function update(){
        $stmt = $this->connect()->prepare("UPDATE `stations` SET `station`=?,`city`=? WHERE id =?");

        $stmt->execute([$this->nameOfStation,$this->cityOfStation,$this->id]);
    }

    public function delete(){
        $stmt = $this->connect()->prepare("DELETE FROM `stations` WHERE id=?");
        $stmt->execute([$this->id]);
        return $stmt->fetchAll();
    }



}