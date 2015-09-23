<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Model {
	Public Function GeteventDB($where=""){
		$dataevent = $this->db->query('select * from event '.$where);
		return $dataevent->result_array();
	}
	Public Function GetticketDB($where=""){
		$dataticket = $this->db->query('select * from ticket '.$where);
		return $dataticket->result_array();
	}	
	Public Function GeteventticketDB($where=""){
		$dataeventticket = $this->db->query('select event.event_name, ticket.ticket_class, eventticket.ticket_price, eventticket.ticket_status, eventticket.ticket_available, eventticket.ticket_sell_start, eventticket.ticket_sell_end from eventticket join event on eventticket.event_id=event.event_id join ticket on eventticket.ticket_id = ticket.ticket_id order by event.event_id asc '.$where);
		return $dataeventticket->result_array();
	}	
	Public Function GetattendeeDB($where=""){
		$dataattendee = $this->db->query('SELECT  attendee.attendee_id, attendee.attendee_name, event.event_name, ticket.ticket_class, attendee.payment_status, attendee.num_of_person_going, attendee.payment_date from event  join attendee on event.event_id = attendee.event_id join ticket on ticket.ticket_id = attendee.ticket_id '.$where);
		return $dataattendee->result_array();
	}	
	public function InsertData($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}
	public function UpdateData($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;	
	}
	public function DeleteData($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;	
	
	}
}