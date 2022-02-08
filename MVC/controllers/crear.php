<?php
class crear extends Controller
{
    public function __construct()
    {
        $this->loadModel('usuario');
        $this->nameClass->insertar();
    }
}
