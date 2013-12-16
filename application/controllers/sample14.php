<?php
    class Sample14 extends Controller{
    
        function sample14()
        {
            parent::Controller();
            
            $this->output->enable_profiler(TRUE);
        }
     
        function index()
        {
            echo 'プロファイラのテスト中';
        }
    }
?>