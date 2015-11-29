<?php
namespace DataTables\SearchEngine;


//use JMS\Serializer\Annotation\SerializedName;
	class SearchResultWrapper{
        public $draw;
        public $recordsTotal;
        public $recordsFiltered;
        public $error;
        public $data = Array();
	}
?>