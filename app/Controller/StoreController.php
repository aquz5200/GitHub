<?php
class StoreController extends AppController{

    public function index(){
        //set('送信する変数名',$this->Model名->find('条件'));
        $this->set('Store',$this->Store->find('all'));
    }
}
