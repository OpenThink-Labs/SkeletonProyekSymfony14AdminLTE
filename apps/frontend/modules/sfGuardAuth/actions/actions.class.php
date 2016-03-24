<?php
require_once(sfConfig::get('sf_plugins_dir').'/sfDoctrineGuardPlugin/modules/sfGuardAuth/lib/BasesfGuardAuthActions.class.php');

class sfGuardAuthActions extends BasesfGuardAuthActions
{
  public function executeAjaxSignin($request)
  {
  	
  	$class = sfConfig::get('app_sf_guard_plugin_signin_form', 'sfGuardFormSignin');
  	$this->form = new $class();
  	
  	if ($request->isMethod('post'))
  	{
  		$this->form->bind($request->getParameter('signin'));
  		if ($this->form->isValid())
  		{
  			$values = $this->form->getValues();
  			$this->getUser()->signin($values['user'], array_key_exists('remember', $values) ? $values['remember'] : false);
  	
  			// always redirect to a URL set in app.yml
  			// or to the referer
  			// or to the homepage
  			//$signinUrl = sfConfig::get('app_sf_guard_plugin_success_signin_url', $user->getReferer($request->getReferer()));
  	
  			return $this->renderText("1");
  		} else {
  			//$error =  return (() || ($this->errorSchema->getGlobalErrors()) || ($this->errorSchema->getNamedErrors())) ? 0 : 1;
  			$errors = array();
  			foreach ($this->form->getErrorSchema() as $key => $err) {
  				if ($key) {
  					$errors[$key] = $err->getMessage();
  				  }
  				}  	
  			$html = "";
  			foreach($errors as $key=>$error) {
  				$html .= "{$key} - {$error}</br/>";
  			}
  			$html .= "";
  			return $this->renderText($html);
  		}
  	}  	    
  }
}