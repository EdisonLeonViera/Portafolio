<?php 
    interface IModel{
        //interfas: permite definir metodos que seran implementados (ej: crud)
        //como se llamara la funcion
        public function save();
        public function getAll();
        public function get($id);
        public function delete($id);
        public function update();
        public function from($array);
    }


?>