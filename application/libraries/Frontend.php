<?php
class Frontend
{

    private $heading = '';
    private $content = '';

    function set_heading($heading)
    {
        $this->heading = $heading;
        return $this;
    }
    function load_view($view, $data=array())
    {
        $ci = &get_instance();

        $content = $ci->load->view($view, $data, true);
        $this->content = $content;
    }

    function load_html($html)
    {
        $ci = &get_instance();

        $content = $html;
        $this->content = $content;
    }

    function render()
    {
        $ci = &get_instance();
        $content = $this->content;
        $heading = $this->heading;

        $data = array();
        $data['heading'] = $heading;
        $data['content'] = $content;

        $ci->load->view('template/frontend', $data);
    }
}
