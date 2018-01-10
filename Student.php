<?php

/**
 * Descrtion of Student
 *
 * @author Si-Yang	
 */
class Student {
	function __construct() {
		$this->surname = '';
		$this->first_name = '';
		$this->emails = array();
		$this->grades = array();
	}

	// function to add emails
	function add_email($which, $address) {
		$this->emails[$which] = $address;
	}	

	// function to add grades
	function add_grade($grade) {
		$this->grades[] = $grade;
	}

	// function that finds the average of the grades
	function average() {
    		$total = 0;
    		foreach ($this->grades as $value)
        		$total += $value;
    		return $total / count($this->grades);
	}

	// function that converts the student's info into a string
	function toString() {
    		$result = $this->first_name . ' ' . $this->surname;
    		$result .= ' ('.$this->average().")\n";
    		foreach($this->emails as $which=>$what)
        		$result .= $which . ': '. $what. "\n";
    		$result .= "\n";
    		return '<pre>'.$result.'</pre>';
	}	

}
