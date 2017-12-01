<?php
Class Cat {
  public $sex;
  public $name;
  public $age;
  public $color = 'Black';
  public function AgeCheck(){
  if($this->age<12){
    return $answer='Годен';
  }else{
    return $answer='Не годен';
  }

}
}
