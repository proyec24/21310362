<?php
class carritoP implements JsonSerializable {
        public $id;
        public $total;

        public function __construct($id, $total){
            $this->id = $id;
            $this->total = $total;
        }
        public function jsonSerialize(){
            return get_object_vars($this);
        }
    }
    ?>