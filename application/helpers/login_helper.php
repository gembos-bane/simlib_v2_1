<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if(!function_exists('get_hash'))
{
    
    function get_hash($PlainPassword)
    {

    	$option=[
                'cost'=>5,// proses hash sebanyak: 2^5 = 32x
    	        ];
    	return password_hash($PlainPassword, PASSWORD_DEFAULT, $option);

   }
}

if(!function_exists('hash_verified'))
{
    
    function hash_verified($PlainPassword,$HashPassword)
    {

    	return password_verify($PlainPassword,$HashPassword) ? true : false;

   }
}
function is_logged_in() {
    // Get current CodeIgniter instance
    $CI =& get_instance();
    // We need to use $CI->session instead of $this->session
    $user = $CI->session->userdata('user_data');
    if (!isset($user)) { return false; } else { return true; }
}