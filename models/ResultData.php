<?php
	namespace DataTables\SearchEngine;
	//require_once ('bootstrap.php');
	
	class DataTableResultsProvider{
		private $length;
		private $start;
		private $search;
		private $orderColumnIndex;
		private $orderColumnDirection;
		private $totalRecords;
		private $data;
		
		public function __construct($_length, $_start, $_search, $_orderColumnIndex = 0, $_orderColumnDirection = 'asc'){
			$this->length = $_length;
			$this->start = $_start;
			$this->search = $_search;
			$this->orderColumnIndex = $_orderColumnIndex;
			$this->orderColumnDirection = $_orderColumnDirection;
		}
		
		public function getTotalRecords(){
			return $this->totalRecords;
		}
		
		public function getData(){
			
			$this->data = Array();
			//place here your logic to return the data
			
			return $this->data;
		}
	}
?>