<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class FormsController extends CI_Controller {
	public function index()
	{
        $var1="";
            if(isset($_POST["text1"])){
            $var1=$_POST["text1"];
            $var2="<br/><br/>Hello ". $var1."!";
        }
        else {
            $var1="";
            $var2="<br/><br/>Good Morning!";
   }
       $data['var1']=$var1;
       $data['var2']=$var2;
       $this->load->view('forms',$data);
	}
        	public function greeting()
	{
	$var1="";
            if($this->input->post('text1')){
            $var1=$this->input->post('text1');
            $var2="<br/><br/>Hello ". $var1."!";
        }
        else {
            $var1="";
            $var2="<br/><br/>Good Morning!";
   }
       $data['var1']=$var1;
       $data['var2']=$var2;
       $this->load->view('forms',$data);
        }
}
