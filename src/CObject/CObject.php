<?php
/**
 * Holding a instance of CAnton to enable use of $this in subclasses and provide some helpers.
 *
 * @package AntonCore
 */
class CObject {

	/**
	 * Members
	 */
	protected $jst;
	protected $config;
	protected $request;
	protected $data;
	protected $db;
	protected $views;
	protected $session;
	protected $user;


	/**
	 * Constructor, can be instantiated by sending in the $jst reference.
	 */
	protected function __construct($jst=null) {
	  if(!$jst) {
	    $jst = CAnton::Instance();
	  }
	  $this->jst       = &$jst;
    $this->config   = &$jst->config;
    $this->request  = &$jst->request;
    $this->data     = &$jst->data;
    $this->db       = &$jst->db;
    $this->views    = &$jst->views;
    $this->session  = &$jst->session;
    $this->user     = &$jst->user;
	}


	/**
	 * Wrapper for same method in CAnton. See there for documentation.
	 */
	protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) {
    $this->jst->RedirectTo($urlOrController, $method, $arguments);
  }


	/**
	 * Wrapper for same method in CAnton. See there for documentation.
	 */
	protected function RedirectToController($method=null, $arguments=null) {
    $this->jst->RedirectToController($method, $arguments);
  }


	/**
	 * Wrapper for same method in CAnton. See there for documentation.
	 */
	protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
    $this->jst->RedirectToControllerMethod($controller, $method, $arguments);
  }


	/**
	 * Wrapper for same method in CAnton. See there for documentation.
	 */
  protected function AddMessage($type, $message, $alternative=null) {
    return $this->jst->AddMessage($type, $message, $alternative);
  }


	/**
	 * Wrapper for same method in CAnton. See there for documentation.
	 */
	protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
    return $this->jst->CreateUrl($urlOrController, $method, $arguments);
  }


}
  