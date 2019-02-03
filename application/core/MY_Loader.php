<?php

// https://stackoverflow.com/a/9541565

/**
 * Loader untuk load view
 */
class my_loader extends CI_Loader{
	
	public function login_template($template_name, $vars = array(), $return = FALSE)
	{
		$this->view('v_header', $vars);
		$this->view($template_name, $vars);
		$this->view('v_footer', $vars);
	}

	public function template($template_name, $vars = array(), $return = FALSE)
	{
		if($return):
			$content = $this->view('v_header', $vars, $return);
			$content .= $this->view('v_sidebar', $vars, $return);
			$content .= $this->view('v_topbar', $vars, $return);
			$content .= $this->view($template_name, $vars, $return);
			$content .= $this->view('v_s_footer', $vars, $return);
			$content .= $this->view('v_footer', $vars, $return);
			return $content;
		else:
			$this->view('v_header', $vars);
			$this->view('v_sidebar', $vars);
			$this->view('v_topbar', $vars);
			$this->view($template_name, $vars);
			$this->view('v_s_footer', $vars);
			$this->view('v_footer', $vars);
		endif;
	}
}

?>