<?php

    function get_safe_value($con, $str){

        if($str != ''){

            $str = trim($str);

            return mysqli_real_escape_string($con, $str);

        }

    }



    function clean($string) {

		$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

		$string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

		$string = strtolower($string); // Convert to lowercase

		return $string;

	}



    // function fetchAllData($con, $tableName){

    //     return mysqli_query($con, `SELECT * FROM $tableName`);

    // }



    // function fetchAllDataDesc($con, $tableName){

    //     return mysqli_query($con, "SELECT * FROM '$tableName' ORDER BY cat_id DESC");

    // }



?>