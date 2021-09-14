<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 * @extends  Controller_Template
 */
class Controller_Posts extends Controller_Template
{
    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index()
    {
        //return Response::forge(View::forge('welcome/index'));
        //die("posts index");
        $data = array();
        $this->template->title = 'Список статей';
        $this->template->content = View::forge('posts/index', $data);

    }

    public function action_add()
    {

        $data = array();
        $this->template->title = 'Добавить новый пост';
        $this->template->content = View::forge('posts/add', $data);
        //return Response::forge(View::forge('posts/add'));
    }

    public function action_postitem()
    {

        $pageid = isset($_REQUEST['Id']) ? (int)  $_REQUEST['Id'] : false;
        $data = array();
        $this->template->title = 'Подробный пост';
        $this->template->content = View::forge('posts/postitem', $data);
        //return Response::forge(View::forge('posts/add'));
    }

}
