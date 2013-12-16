<?php
class Sample15 extends Controller{
    function index()
    {
        log_message('debug', 'logtestページへアクセス');
        echo 'ログテスト中';
    }
}
?>