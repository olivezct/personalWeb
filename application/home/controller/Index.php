<?php
namespace app\home\controller;
use think\Db;
use think\Controller;
use think\Request;

class index extends Controller
{

    /**
     * 项目主页
     * @return string
     */
    public function hello()
    {
        return $this->fetch();
    }


    public function getContestInfo()
    {
        //$get_name = $name;

       return  1;


    //     $sql = 'SELECT * FROM contest';

    //     //查询值
    //    $selectShopOrg = Db::table(query($sql));
    //    return json($selectShopOrg);


    //     $selectShopOrg = Db::query($sql);
    //     var_dump($selectShopOrg);

        // $sql1 = 'insert into shop_org (id,org_id,name) values (?,?,?)';
        // $sql2 =["16","2","电风扇"];

        //插入值
        //  Db::execute( $sql1,$sql2);

    }


}
