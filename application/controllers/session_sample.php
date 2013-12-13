<?php 
class Session_sample extends Controller{
	function Session_sample(){
		parent::Controller();
		header('Content-Type: text/html; charset=UTF-8');
		//セッションクラスのロード
		$this->load->library('session');
	}
	
	function index(){
		//セッションデータの読み取り
		if(!$this->session->userdata('count')){
			//セッションデータの保存：０回目
			$this->session->set_userdata('count',1);
		}else{
			$count = $this->session->userdata('count');
			$count++;
			$this->session->userdata('count', $count);
		}
		echo '訪問回数：' . $this->session->userdata('count');
	}
	
	function destroy(){
		$this->session->ses_destroy();
		echo 'セッションをクリアしました。';
	}
}
?>