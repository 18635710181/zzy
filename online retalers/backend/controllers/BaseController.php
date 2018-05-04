<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class BaseController extends Controller
{
	public $layout = 'base';
	public function init()
	{
		parent::init();
	}
}