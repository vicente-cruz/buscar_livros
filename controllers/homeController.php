<?php
class homeController extends Controller
{
    public function index()
    {
        echo "homeController::index";
    }
    
    public function teste($param1 = 0, $param2 = 0)
    {
        echo "homeController::teste - param1: ".$param1." param2: ".$param2;
    }
}
?>