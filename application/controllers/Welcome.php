<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$dataevent = $this->coba->GeteventDB();
		$dataticket = $this->coba->GetticketDB();
		$dataeventticket = $this->coba->GeteventticketDB();		
		$dataattendee = $this->coba->GetattendeeDB();		
		$this->load->view('tabel',array('dataevent'=>$dataevent));		
		$this->load->view('tabel1',array('dataticket'=>$dataticket));
		$this->load->view('tabel2',array('dataeventticket'=>$dataeventticket));
		$this->load->view('tabel3',array('dataattendee'=>$dataattendee));
	}	
	public function insert(){
		$res = $this->coba->InsertData('cds',array(
			"titel" => "walk for today",
			"interpret" => "Oos",
			"jahr" => "1977"
		));		
		if ($res >= 1){
			echo "<h2>Insert berhasil !!</h>";
		}else{
			echo "<h2>Insert gagal !!</h2>";
		}
	}
	public function update(){
		$res = $this->coba->UpdateData('cds',array(
			"jahr" => "1976"
		),array('titel => "Oos"'));		
		if ($res >= 1){
			echo "<h2>Update berhasil !!</h>";
		}else{
			echo "<h2>update gagal !!</h2>";
		}
	}
	public function delete(){
		$res = $this->coba->DeleteData('cds',array('titel' => "Oos"));		
		if ($res >= 1){
			echo "<h2>Delete berhasil !!</h>";
		}else{
			echo "<h2>Delete gagal !!</h2>";
		}
	}
}
