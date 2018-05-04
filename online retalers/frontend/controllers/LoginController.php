<?php
namespace frontend\controllers;
header("Content-type: text/html; charset=UTF-8");
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

session_start();
class LoginController extends DefaultController
{
	public $enableCsrfValidation = false;
   	public $layout = false;//关闭yii框架自带样式

   	public function actionLogin()
   	{
   	    if (!Yii::$app->request->isPost){
            return $this->render('login');
        }else{
   	        $user_name = Yii::$app->request->post('user_name');
            $password = Yii::$app->request->post('password');
            $data = Yii::$app->db->createCommand("SELECT * FROM `user` WHERE user_name=$user_name")->queryOne();
            $arr=[];
            if ($data){
                $a_password=sha1($password.$data['range']);
                if ($a_password!=$data['password']){
                    $arr=[
                        'code'=>1,
                        'mation'=>'账号或密码错误'
                    ];
                }else{

                    $arr=[];
                    $cookies = Yii::$app->response->cookies;
                    //如果cookie里有客户临时加在cookie里的商品
                    if(isset($_COOKIE['shopping_cart'])){
                        $shopping_data = json_decode($_COOKIE['shopping_cart'],true);
                        $shopping_num = count($shopping_data);
                        foreach ($shopping_data as $key => $value){
                           $res =  Yii::$app->db->createCommand()->insert('shoppingcar',[
                                'user_id'=>$data['user_id'],
                                'goods_id'=>$value['goods_id'],
                                'goods_price'=>$value['goods_price'],
                                'goods_num'=>$value['num'],
                                'goods_name'=>$value['goods_name'],
                               'goods_name'=>$value['goods_color'],
                                'join_time'=>time(),
                            ])->execute();
                          $res_arr = array_push($arr,$res);
                        }

                        if ($shopping_num == $res_arr){
                            setcookie("shopping_cart","");
                        }
                    }
                    $cookies->add(new \yii\web\Cookie([
                        'name' => 'user',
                        'value' => $data,
                        'expire' => time() + 3600,
                    ]));


                    $arr=[
                      'code'=>2,
                      'mation'=>'正确'
                    ];
                }
            }else{
                $arr=[
                    'code'=>3,
                    'mation'=>'账号或密码错误'
                ];
            }
            return json_encode($arr);
        }
   	}

   	public function actionWeixin(){
   	    $appid = "wx73526398ea99c984";
   	    $redirect_url = "http://www.ahead.com/index.php?r=login/get-code";
        $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=$redirect_url&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect";
        echo $url;die;
    }

    public function actionGetCode(){
        $appid = "wx73526398ea99c984";
        $appsecret = "63db840c0fe8bacf26709d0dad6799a4";
   	    $code = Yii::$app->request->get('code');
   	    $url ="https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$appsecret&code=$code&grant_type=authorization_code";
        $data = json_decode($this->get($url),true);

        $_SESSION['access_token']=$data['access_token'];
        $_SESSION['guoqi'] = time()+7200;
        $openid = $data['openid'];
        $refresh_token = $data['refresh_token'];
        if($_SESSION['guoqi']<time()){
           $openid = $this->guoqi($appid,$refresh_token);
        }
        $access_token = $_SESSION['access_token'];
        $testing =  $this->testing($openid);
        if ($testing['errmsg']=='ok'){
            $get_user_info_url = "https://api.weixin.qq.com/sns/userinfo?access_token=$access_token&openid=$openid&lang=zh_CN";
            $weixin_userinfo = json_decode($this->get($get_user_info_url),true);
            $cookies = Yii::$app->response->cookies;
            $cookies->add(new \yii\web\Cookie([
                'name' => 'user',
                'value' => $weixin_userinfo['nickname'],
                'expire' => time() + 3600,
            ]));
            $this->redirect('?r=index/index');
        }else{
            var_dump($testing);
        }
   	}
   	//access_token 过期的情况使用
   	private function guoqi($appid,$refresh_token){
        $urls="https://api.weixin.qq.com/sns/oauth2/refresh_token?appid=$appid&grant_type=refresh_token&refresh_token=$refresh_token";
        $datas = json_decode($this->get($urls),true);
        $_SESSION['access_token'] = $datas['access_token'];
        $_SESSION['guoqi'] = time()+7200;
        $openid = $datas['openid'];
        return $openid;
    }

    //检测access_token是否有效
    private function testing($openid){
       $access_token = $_SESSION['access_token'];
        $jian_access_token_url = "https://api.weixin.qq.com/sns/auth?access_token=$access_token&openid=$openid";
        $jian_data = json_decode($this->get($jian_access_token_url),true);
        return $jian_data;
    }


}


?>