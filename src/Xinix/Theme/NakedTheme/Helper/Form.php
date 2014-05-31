<?php

namespace Xinix\Theme\NakedTheme\Helper;

class Form
{

    protected $schema;

    protected $data;

    public static function create($arg = null)
    {
        return new static($arg);
    }

    public function __construct($arg = null)
    {

        if (is_array($arg)) {
            $this->schema = $arg;
        } else {
            $name = (is_string($arg)) ? $arg : f('controller.name');
            $this->schema = \Norm::factory($name)->schema();
        }

        $this->data = \App::getInstance()->request->post();
    }

    public function of($data)
    {
        $this->data = $data;
        return $this;
    }

    public function show($options = array())
    {
        $options = array_merge(array( 'format' => 'input' ), $options);

        $html = '';
        $html = '<div class="form-input">';
        foreach ($this->schema as $key => $field) {
            if ($field['hidden']) {
                continue;
            }
            $html .= '<div class="row field field-'.$key.'">'."\n";
            $html .= '<div class="span-12">'."\n";
            // $html .= '<div class="wrapper">'."\n";
            $html .= $this->label($key);
            $html .= $this->format($options['format'], $key);
            // $html .= '</div>'."\n\n";
            $html .= '</div>'."\n\n";
            $html .= '</div>'."\n\n";
        }
        $html .= '</div>';
        return $html;
    }

    public function label($key)
    {
        return $this->schema[$key]->label()."\n";
    }

    public function format($format, $key)
    {
        $value = isset($this->data[$key]) ? $this->data[$key] : '';
        return $this->schema[$key]->format($format, $value)."\n";
    }
}
