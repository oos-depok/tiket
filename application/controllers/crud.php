<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function index() {
		$dataevent = $this->coba->GeteventDB();
		$this->load->view('tabel',array('dataevent'=>$dataevent));		
	}
	public function Add(){
		$this->load->view('add');
	}
	public function insert(){
		$event_name = $_POST['event_name'];
		$event_type = $_POST['event_type'];
		$event_status = $_POST['event_status'];
		$artist_type = $_POST['artist_type'];
		$event_date = $_POST['event_date'];
		$event_location = $_POST['event_location'];
		$data_insert = array(
			'event_name' => $event_name,
			'event_type' => $event_type,
			'event_status' => $event_status,
			'artist_type' => $artist_type,
			'event_date' => $event_date,
			'event_location' => $event_location			
		);
		$res = $this->coba->InsertData('event',$data_insert);
		if($res>=1){
			redirect('/');
		}else{
			echo "<h2>Data gagal masuk</h2>";
		}
	}
	
	public function edit($event_id){
		$event = $this->coba->GeteventDB("where event_id = '$event_id'");
		$data = array(
			"event_id" => $event[0]['event_id'],
			"event_name" => $event[0]['event_name'],
			"event_type" => $event[0]['event_type'],
			"event_status" => $event[0]['event_status'],
			"artist_type" => $event[0]['artist_type'],
			"event_date" => $event[0]['event_date'],
			"event_location" => $event[0]['event_location'],
			);
		$this->load->view('edit',$data);
		// echo "<pre>";
		// print_r($event);
		// echo "</pre>";
	}
	
	public function update(){
		$event_id = $_POST['event_id'];
		$event_name = $_POST['event_name'];
		$event_type = $_POST['event_type'];
		$event_status = $_POST['event_status'];
		$artist_type = $_POST['artist_type'];
		$event_date = $_POST['event_date'];
		$event_location = $_POST['event_location'];
		$data_update = array(
			'event_name' => $event_name,
			'event_type' => $event_type,
			'event_status' => $event_status,
			'artist_type' => $artist_type,
			'event_date' => $event_date,
			'event_location' => $event_location			
		);
		$where = array('event_id' => $event_id);
		$res = $this->coba->UpdateData('event',$data_update,$where);
		if($res>=1){
			redirect('/');
		}		
	}
	
	public function delete($event_id){
		$where = array('event_id'=> $event_id);
		$res = $this->coba->DeleteData('event',$where);
		if($res>=1){
			redirect('/');
		}else{
			echo "<h2>Data gagal dihapus</h2>";
		}
	}
}