<?php

namespace app\home\controller;
use think\facade\View;
use think\facade\Lang;
/**
 * ============================================================================
 * DSShop单店铺商城
 * ============================================================================
 * 版权所有 2014-2028 长沙德尚网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.csdeshang.com
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * 控制器
 */
class Memberconsult extends BaseMember
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        Lang::load(base_path() . 'home/lang/'.config('lang.default_lang').'/memberconsult.lang.php');
    }

    /**
     * 查询买家商品咨询
     */
    public function index()
    {
        $this->my_consult();
    }
    
    public function my_consult()
    {
        //实例化商品咨询模型
        $consult_model = model('consult');
        $condition = array();
        if (input('param.type') != '') {
            if (input('param.type') == 'to_reply') {
                $condition[] = array('consult_reply','=','');
            }
            if (input('param.type') == 'replied') {
                $condition[] = array('consult_reply','<>', '');
            }
        }
        $condition[] = array('member_id','=',session('member_id'));
        $list_consult = $consult_model->getConsultList($condition);
        View::assign('show_page', $consult_model->page_info->render());
        View::assign('list_consult', $list_consult);
        $type_v=input('param.type');
        $type = empty($type_v) ? 'consult_list' : $type_v;
        /* 设置买家当前菜单 */
        $this->setMemberCurMenu('member_consult');
        /* 设置买家当前栏目 */
        $this->setMemberCurItem($type);
        echo View::fetch($this->template_dir.'index');exit;
    }

    /**
     * 用户中心右边，小导航
     *
     * @param string $menu_type 导航类型
     * @param string $menu_key 当前导航的menu_key
     * @param array $array 附加菜单
     * @return
     */
    public function getMemberItemList()
    {
                $menu_array = array(
                     array(
                        'name' => 'consult_list',
                        'text' => lang('ds_member_path_all_consult'),
                        'url' => url('Memberconsult/index')
                    ),
                     array(
                        'name' => 'to_reply',
                        'text' => lang('ds_member_path_unreplied_consult'),
                        'url' => url('Memberconsult/index',['type'=>'to_reply'])
                    ),
                     array(
                        'name' => 'replied',
                        'text' => lang('ds_member_path_replied_consult'),
                        'url' => url('Memberconsult/index',['type'=>'replied'])
                    )
                );

       return $menu_array;
    }
}