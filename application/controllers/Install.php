<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' ); 

/**
 * Class : Installer
 * Base Class to control over all the classes
 * @author : Axis96
 * @version : 3.0
 * @since : 15 December 2020
 */
class Install extends CI_Controller {

    public function index(){
        if ($this->input->server('REQUEST_METHOD') === 'GET') {
            $db_config_path = APPPATH.'config/database.php';
            $autoload_config_path = APPPATH.'config/autoload.php';
            $routes_config_path = APPPATH.'config/routes.php';
            $uploads_path = FCPATH."uploads";
            $data['htaccess_exists'] = is_file(FCPATH.'.htaccess'); //returns 1 if available

            //Check OS
            if (strncasecmp(PHP_OS, 'WIN', 3) == 0) {
                $data['uploads'] = is_writable(dirname($uploads_path));
            } else {
                $data['uploads'] = is_writable($uploads_path);
            }
            $data['config'] = is_writable($db_config_path);
            $data['autoload'] = is_writable($autoload_config_path);
            $data['routes'] = is_writable($routes_config_path);
            
            $this->load->view('install', $data);

        } elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
            //its a post request
            $this->load->library('Installer');

            $installer = new Installer();

            if($installer->validate_post($_POST) == true)
	        {
				$status = true;
                if($status != true){
                    $arr = array(
                        'success' => false, 
                        'msg' => $installer->cd_check($_POST)->msg
                    );
                    echo json_encode($arr);
                } else {
                    // First create the database, then create tables, then write config file
                    if($installer->create_database($_POST) == false) {
                        $message = $installer->show_message('error',"The database could not be created, please check if the hostname, username and password combination is correct.");
                        $arr = array(
                            'success' => false, 
                            'msg' => $message
                        );
                        echo json_encode($arr);
                    } else if ($installer->create_tables($_POST) == false) {
                        $message = $installer->show_message('error',"The database tables could not be created, please try again.");
                        $arr = array(
                            'success' => false, 
                            'msg' => $message
                        );
                        echo json_encode($arr);
                    } else if ($installer->write_config($_POST) == false) {
                        $message = $installer->show_message('error',"The database configuration file could not be written, please chmod application/config/database.php file to 777");
                        $arr = array(
                            'success' => false, 
                            'msg' => $message
                        );
                        echo json_encode($arr);
                    }

                    // If no errors, redirect to registration page
                    if(!isset($message)) {
                        $arr = array(
                            'success' => true, 
                            'msg' => 'The installation has been completed succesfully'
                        );
                        echo json_encode($arr);
                    } 
                }
            } else
            {
                $arr = array(
                    'success' => false, 
                    'msg' => 'Please correct the errors below'
                );
                echo json_encode($arr);
            }
        }
    }

}
