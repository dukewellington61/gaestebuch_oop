<?php

abstract class AbstractBase
{
    protected $context = [];
    protected $template = '';

    public function run($action)
    {
        $this->addContext('action', $action);

        $methodName = $action . 'Action';
        $this->setTemplate($methodName);

        if (method_exists($this, $methodName)) {
            $this->$methodName();
        } else {
            $this->render404();
        }

        $this->render();
    }

    public function render404()
    {
        header('HTTP/1.0 404 Not Found');
        die('Error 404');
    }

    protected function setTemplate($template, $controller = null)
    {
        if (empty($controller)) {
            $controller = get_class($this);
        }

        $this->template = $controller . '/' . $template . '.tpl.php';
    }

    protected function getTemplate()
    {
        return $this->template;
    }

    protected function addContext($key, $value)
    {
        $this->context[$key] = $value;
    }

    protected function render()
    {
        extract($this->context);

        $template = $this->getTemplate();

        require_once 'templates/layout.tpl.php';
    }

    public function makeSave($userEntry, $encoding = 'UTF-8')
    {
    return htmlspecialchars(
        strip_tags($userEntry),
        ENT_QUOTES | ENT_HTML5,
        $encoding
    );
    }
}
