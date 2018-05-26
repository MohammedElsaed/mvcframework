<?php
/**
 * Created by PhpStorm.
 * User: hash
 * Date: 08/05/18
 * Time: 08:50 م
 */

namespace PHPMVC\Controllers;


use PHPMVC\LIB\FrontController;

class AbstractController
{
    protected $_controller;
    protected $_action;
    protected $_params;
    
    
    public function notFoundAction()
    {
        $this->_view();
    }
    
    public function setController($controllerName)
    {
        $this->_controller = $controllerName;
    }
    
    public function SetAction($actionName)
    {
        $this->_action = $actionName;
    }
    
    public function setParams($params)
    {
        $this->_params = $params;
    }
    protected function _view()
    {
        if ($this->_action == FrontController::NOT_FOUND_ACTION){
    
            require_once VIEWS_PATH . 'notfound' . DS .'notfound.view.php';
            
        }else{
            $view = VIEWS_PATH . $this->_controller . DS . $this->_action . '.view.php';
            if (file_exists($view)) {
                require_once $view;
            } else {
                require_once VIEWS_PATH . 'notfound' . DS . 'notview.view.php';
            }
        }
    }
}