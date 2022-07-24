<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * This function is used to print the content of any data
 */
    if (!function_exists('pre')) {
        function pre($data)
        {
            echo "<pre>";
            print_r($data);
            echo "</pre>";
            exit();
        }
    }

    /**
     * This function used to get the CI instance
     */
    if(!function_exists('get_instance'))
    {
        function get_instance()
        {
            $CI = &get_instance();
        }
    }


    //check auth
    if (!function_exists('auth_check')) {
        function auth_check()
        {
            // Get a reference to the controller object
            $ci =& get_instance();
            if(!$ci->session->has_userdata('is_admin_login'))
            {
                redirect('admin', 'refresh');
            }
        }
    }

       //team leaders check auth
    if (!function_exists('tl_auth_check')) {
        function tl_auth_check()
        {
            // Get a reference to the controller object
            $ci =& get_instance();
            if(!$ci->session->has_userdata('is_tl_login'))
            {
                redirect('tl_login', 'refresh');
            }
        }
    }


    // -----------------------------------------------------------------------------
    // Get General Setting
    if (!function_exists('get_general_settings')) {
        function get_general_settings()
        {
            $ci =& get_instance();
            $ci->load->model('app/setting_model');
            return $ci->setting_model->get_general_settings();
        }
    }

    // -----------------------------------------------------------------------------
    //get recaptcha
    if (!function_exists('generate_recaptcha')) {
        function generate_recaptcha()
        {
            $ci =& get_instance();
            if ($ci->recaptcha_status) {
                $ci->load->library('recaptcha');
                echo '<div class="form-group mt-2">';
                echo $ci->recaptcha->getWidget();
                echo $ci->recaptcha->getScriptTag();
                echo ' </div>';
            }
        }
    }

    // ----------------------------------------------------------------------------
    //print old form data
    if (!function_exists('old')) {
        function old($field)
        {
            $ci =& get_instance();
            // return html_escape($ci->session->flashdata('form_data')[$field]);
            $text = isset($ci->session->flashdata('form_data')[$field]) ? $ci->session->flashdata('form_data')[$field] : '';
            return html_escape($text);
        }
    }

    // --------------------------------------------------------------------------------
    if (!function_exists('date_time')) {
        function date_time($datetime)
        {
           return date('F j, Y',strtotime($datetime));
        }
    }

    // --------------------------------------------------------------------------------
    // limit the no of characters
    if (!function_exists('text_limit')) {
        function text_limit($x, $length)
        {
          if(strlen($x)<=$length)
          {
            echo $x;
          }
          else
          {
            $y=substr($x,0,$length) . '...';
            echo $y;
          }
        }
    }
    
       // function for file docupload
    if(!function_exists('docupload')){  
            function docupload($file_name="",$file_path="",$new_name = ''){
                 $CI = &get_instance();
                 $upload_data['success'] ="";
                 $upload_data['error'] = "";
                 $config['upload_path']          = $file_path;
                 $config['allowed_types']        = '*';
                 if ($new_name != '') {
                    $config['file_name'] = $new_name;
                 } 
                 $CI->load->library('upload', $config);   
                 $CI->upload->initialize($config);
    
                if ( ! $CI->upload->do_upload($file_name)) {
                     $upload_data['error'] = $CI->upload->display_errors();
                }
                else {
                     $upload_data['success'] = $CI->upload->data();
                }
                return $upload_data;
        
            }
     }

?>
