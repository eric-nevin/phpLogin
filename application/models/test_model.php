<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_Model extends CI_Model {
	function user_info($id){
		$query="SELECT * FROM users WHERE id=?";
		return $this->db->query($query, $id)->row_array();
	}
	function user_trips($id){
		$query="SELECT * FROM users LEFT JOIN user_trips ON users.id=user_trips.user_id LEFT JOIN trips ON user_trips.trip_id=trips.id WHERE users.id=?";
		return $this->db->query($query, $id)->result_array();
	}
	function other_trips($id){
		$query="SELECT * FROM trips LEFT JOIN users ON trips.user_id=users.id LEFT JOIN user_trips ON trips.id=user_trips.trip_id WHERE trips.id NOT IN(SELECT trips.id FROM trips LEFT JOIN user_trips ON trips.id= user_trips.trip_id WHERE user_trips.user_id=?) GROUP BY trips.id";
		return $this->db->query($query, $id)->result_array();
	}

	function add_trips($id, $info){
		$query="INSERT INTO trips(destination, start_date, end_date, plan, user_id, temp) VALUES (?,?,?,?,?,0)";
		$values=array($info['destination'], $info['start_date'], $info['end_date'], $info['description'], $id);
		$this->db->query($query, $values);
		$query="SELECT id FROM trips WHERE trips.temp=0";
		$new_trip_id=$this->db->query($query)->row_array();
		$query="INSERT INTO user_trips(user_id, trip_id) VALUES (?,?)";
		$values=array($id, $new_trip_id['id']);
		$this->db->query($query, $values);
		$query="UPDATE trips SET trips.temp=1 WHERE trips.temp=0";
		return $this->db->query($query);
	}
	function destinations($id){
		$query="SELECT * FROM trips LEFT JOIN users ON users.id=trips.user_id WHERE trips.id=?";
		return $this->db->query($query, $id)->row_array();
	}
	function travelers($id){
		$query="SELECT * FROM user_trips JOIN users ON users.id=user_trips.user_id WHERE user_trips.trip_id =?";
		return $this->db->query($query, $id)->result_array();
	}
	function join_trips($id, $trip){
		$query="INSERT INTO user_trips(user_id, trip_id) VALUES (?,?)";
		$values=array($id, $trip);
		return $this->db->query($query, $values);
	}
}
