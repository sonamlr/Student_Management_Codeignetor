<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{

		parent::__construct();
		if ($this->session->userdata('user_id') == TRUE) {
			
		} else {
			redirect('Login/');
		}
	}
	public function index()
	{
		$this->db->where(array("delete_flag"=> 0));
		$data['class'] = $this->db->count_all('class_fees');
		$this->db->where(array("delete_flag"=> 0));
		$data['student'] = $this->db->count_all('student');

		$this->db->select_sum('initial_payment', 'total_payment');
        $query = $this->db->get('student');
        $data['totalFee'] =  $query->row()->total_payment;
		

		$this->load->view('site/header');
		$this->load->view('home/dashboard_view', $data);
		$this->load->view('site/footer');
	}
	public function studentReg()
	{
		$str = null;
		$i = 1;
		$this->db->where(array("delete_flag"=>0));
		$stu = $this->db->get('student');
		foreach($stu->result_array() as $v)
		{
			if($v['delete_flag'] == 0)
			{
				$delete = anchor("Home/doDelete/".$v['id'], '<i class="fa fa-trash delete" title="delete" aria-hidden="true"></i>');
			}
			$classid = $v['admission_class'];
			$this->db->where(array("id"=>$classid));
			$class = $this->db->get('class_fees');

			$str.="<tr>
				<td>".$i."</td>
				<td>".$v['first_name']."</td>
				<td>".$v['last_name']."</td>
				<td>".$v['father_name']."</td>
				<td>".$v['mother_name']."</td>
				<td>".$v['dob']."</td>
				<td>".$v['adhar_id']."</td>
				<td>".$v['mobile_no']."</td>
				<td>".$v['session_start_from']."</td>
				<td>".@$class->row()->classname."</td>
				<!--<td>".$v['initial_payment']."</td>
				<td>".$v['enrollment']."</td>-->
				<td>".$v['vehical']."</td>
				<td>".$delete."<td>
				<td>".anchor("Home/updateStudent/".$v['id'], '<i class="fa fa-pencil-square edit" title="edit" aria-hidden="true"></i>')."</td>
			</tr>";
			$i++;
		}
		$data['list'] = $str;
		$this->load->view('site/header', $data);
		$this->load->view('student/liststudent');
		$this->load->view('site/footer');
	}
	public function addStudent()
		{
			
			$this->form_validation->set_rules('name', 'password', 'required');
			$this->form_validation->set_rules('mobile', 'mobile', 'required|regex_match[/^[0-9]{10}$/]');
			$this->form_validation->set_rules('aid', 'adhar number', 'required|regex_match[/^[0-9]{12}$/]');
			if ($this->form_validation->run() == False) 
				{
					$selectedOptionValue = $this->uri->segment(3);
					$classname = null;
					$class = $this->db->get('class_fees');
					foreach($class->result_array() as $val)
						{
							$selected = ($selectedOptionValue == $val['id']) ? 'selected' : '';
							$classname.='<option value="'.$val['id'].'" ' . $selected . '>'.$val['classname'].'</option>';
						}
					$data['classname'] = $classname;
					$installment1 = null;
					$installment2 = null;
					$totalFeeAmount = null;
					$classid = $this->uri->segment(3);
					$this->db->where(array("id"=>$classid));
					$fees = $this->db->get("class_fees");
					if ($fees->num_rows() > 0)
						{
							$totalFee = $fees->row()->fees;
							$installment1 = $totalFee / 2;
							$installment2 = $totalFee / 2;
							$totalFeeAmount = $totalFee - 500;
						}
					$data['first'] = '<option value="' . $installment1 . '">First Installment: ' . $installment1 . '</option>';
    				$data['second'] =  '<option value="' . $installment2 . '">Second Installment: ' . $installment2 . '</option>';
    				$data['total'] =  '<option value="' . $totalFeeAmount . '">Total Fee Amount: ' . $totalFeeAmount . '</option>';

					$this->load->view('site/header');
					$this->load->view('student/addstudent',$data);
					$this->load->view('site/footer');
				}
			else
				{
					$insert['first_name'] = $this->input->post('name'); 
					$insert['last_name'] = $this->input->post('lname'); 
					$insert['father_name'] = $this->input->post('fname'); 
					$insert['mother_name'] = $this->input->post('mname'); 
					$insert['dob'] = $this->input->post('dob'); 
					$insert['adhar_id'] = $this->input->post('aid'); 
					$insert['mobile_no'] = $this->input->post('mobile'); 
					$insert['session_start_from'] = $this->input->post('ssfrom'); 
					$insert['admission_class'] = $this->input->post('aclass'); 
					$insert['initial_payment'] = $this->input->post('ipayment'); 
					$insert['vehical'] = $this->input->post('vehical'); 
					$insert['enrollment'] = $this->input->post('enrollment'); 
					// print_r($insert);die;
					$this->db->insert('student', $insert);
					redirect('Home/studentReg/');
				}

			

		}
	public function doDelete()
	{
		$id = $this->uri->segment(3);
		$update['delete_flag'] = 1;
		$this->db->where(array("id"=>$id));
		$this->db->update('student',$update);
		redirect('Home/studentReg/');
	}
	public function classDelete()
	{
		$id = $this->uri->segment(3);
		$update['delete_flag'] = 1;
		$this->db->where(array("id"=>$id));
		$this->db->update('class_fees',$update);
		redirect('Home/classList/');
	}
	public function updateStudent()
	{
		$this->form_validation->set_rules('name', 'password', 'required');
		$this->form_validation->set_rules('mobile', 'mobile', 'required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('aid', 'adhar number', 'required|regex_match[/^[0-9]{12}$/]');
			if ($this->form_validation->run() == False) 
				{
					$id = $this->uri->segment(3);
					$this->db->where(array("id" => $id));
					$dd = $this->db->get('student');
					$edit['id'] = $dd->row()->id;
					$edit['name'] = $dd->row()->first_name;
					$edit['lname'] = $dd->row()->last_name;
					$edit['fname'] = $dd->row()->father_name;
					$edit['mname'] = $dd->row()->mother_name;
					$edit['aid'] = $dd->row()->adhar_id;
					$edit['mobile'] = $dd->row()->mobile_no;
					$edit['session_start_from'] = $dd->row()->session_start_from;
					// $edit['aclass'] = $dd->row()->admission_class;
					// $edit['ipayment'] = $dd->row()->initial_payment;
					$edit['vehical'] = $dd->row()->vehical;
					$edit['enrollment'] = $dd->row()->enrollment;
					$edit['dob'] = $dd->row()->dob;
					$this->load->view('site/header');
					$this->load->view('student/editstudent',$edit);
					$this->load->view('site/footer');
				}
			else
			{
				$id = $this->input->post('id');
				$update['first_name'] = $this->input->post('name');
				$update['last_name'] = $this->input->post('lname');
				$update['father_name'] = $this->input->post('fname');
				$update['mother_name'] = $this->input->post('mname');
				$update['adhar_id'] = $this->input->post('aid');
				$update['session_start_from'] = $this->input->post('ssfrom');
				// $admission_class = $this->input->post('aclass');
				// $initial_payment = $this->input->post('ipayment');
				$update['vehical'] = $this->input->post('vehical');
				$update['enrollment'] = $this->input->post('enrollment');
				$this->db->where(array("id"=>$id));
				$this->db->update('student', $update);
				redirect('Home/studentReg/');
			}
		
		

	}
	public function classList() 
	{
		$str = null;
		$i = 1;
		$this->db->where(array("delete_flag"=> 0));
		$stu = $this->db->get('class_fees');
		foreach($stu->result_array() as $v)
		{
			if($v['delete_flag'] == 0)
			{
				$delete = anchor("Home/classDelete/".$v['id'], '<i class="fa fa-trash delete" title="delete" aria-hidden="true"></i>');
			}
			$str.="<tr>
				<td>".$i."</td>
				<td>".$v['classname']."</td>
				<td>".$v['fees']."</td>
				<td>".$delete."</td>
				<td>".anchor("Home/updateClass/".$v['id'], '<i class="fa fa-pencil-square edit" title="edit" aria-hidden="true"></i>')."</td>
			</tr>";
			$i++;
		}
		$data['list'] = $str;
		$this->load->view('site/header',$data);
		$this->load->view('class/listclass');
		$this->load->view('site/footer');
	}
	
	public function addClass() 
		{
			$this->form_validation->set_rules('classname', 'class name', 'required');
			$this->form_validation->set_rules('fees', 'fees', 'required');
			if ($this->form_validation->run() == False) 
				{
					$this->load->view('site/header');
					$this->load->view('class/addclass');
					$this->load->view('site/footer');
				}
			else
				{
					$insert['classname'] = $this->input->post('classname'); 
					$insert['fees'] = $this->input->post('fees'); 
					$this->db->insert('class_fees', $insert);
					redirect('Home/classList/');
				}
		}
	public function updateClass()
		{
			$this->form_validation->set_rules('classname', 'class name', 'required');
				$this->form_validation->set_rules('fees', 'fees', 'required');
				if ($this->form_validation->run() == False) 
					{
						$id = $this->uri->segment(3);
						$this->db->where(array("id" => $id));
						$dd = $this->db->get('class_fees');
						$edit['id'] = $dd->row()->id;
						$edit['classname'] = $dd->row()->classname;
						$edit['fees'] = $dd->row()->fees;
						$this->load->view('site/header');
						$this->load->view('class/editclass', $edit);
						$this->load->view('site/footer');
					}
				else
					{
						$id = $this->input->post('id');
						$update['classname'] = $this->input->post('classname'); 
						$update['fees'] = $this->input->post('fees');
						$this->db->where(array("id"=>$id)); 
						$this->db->insert('class_fees', $update);
						redirect('Home/classList/');
					}

		}
	public function fessList()
		{
			$i = 1;
			$str = null;
			$firstInstallment = null;
			$remaining = null;
			$this->db->where(array("delete_flag"=> 0));
			$stud = $this->db->get('student');
			foreach($stud->result_array() as $v)
				{
					$classid = $v['admission_class'];
					$this->db->where(array("id"=> $classid));
					$class = $this->db->get('class_fees');
					$firstInstallment = $v['initial_payment'];
					$total = $class->row()->fees;
					$remaining = $total - $firstInstallment;
					$str.='<tr>
						<td>'.$i.'</td>
						<td>'.$v['enrollment'].'</td>
						<td>'.$class->row()->classname.'-'.$class->row()->fees.'</td>
						<td>'.$v['initial_payment'].' <i class="fa fa-inr" aria-hidden="true"></i>/-</td>
						<td>'.$remaining.' <i class="fa fa-inr" aria-hidden="true"></i> /-</td>
						<td>'.anchor("Home/submitFee/".$v['id'], 'Submit Fee').'</td>
					</tr>';
					$i++;
				}
			$data['list'] = $str;
			$this->load->view('site/header');
			$this->load->view('fees/feeslist',$data);
			$this->load->view('site/footer');
		}
	public function submitFee()
	{
		$this->form_validation->set_rules('fees', 'fees', 'required');
		if ($this->form_validation->run() == False) 
			{
				$id = $this->uri->segment(3);
				$this->db->where(array("id"=>$id));
				$dd = $this->db->get('student');
				$ipayment = $dd->row()->initial_payment;
				$data['initial_payment'] = $ipayment;
				$classid = $dd->row()->admission_class;
				$this->db->where(array("id"=>$classid));
				$class = $this->db->get('class_fees');
				$totalfee = $class->row()->fees;
				$data['remaining_fee'] = $totalfee - $ipayment;
				$data['enrollment'] = $dd->row()->enrollment;
				$this->load->view('site/header');
				$this->load->view('fees/addfees',$data);
				$this->load->view('site/footer');
			}
		else
		{
			$id = $this->input->post("id");
			$this->db->where(array("id"=>$id));
			$dd = $this->db->get('student');
			$ipayment = $dd->row()->initial_payment;
			$fees = $this->input->post('fees');
			$totalFee = $fees + $ipayment;
			$update['initial_payment'] = $totalFee;
			$this->db->where(array("id"=>$id));
			$this->db->update('student', $update);
			redirect('Home/fessList/');
		}
		
	}
		

	
	
	
}
