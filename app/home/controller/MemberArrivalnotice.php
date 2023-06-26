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
class MemberArrivalnotice extends BaseMember
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        Lang::load(base_path() . 'home/lang/'.config('lang.default_lang').'/member_arrivalnotice.lang.php');
    }

    /**
     * 到货列表
     *
     * @param
     * @return
     */
    public function index()
    {
        $arrivalnotice_model = model('arrivalnotice');
       
        $arrivalnotice_list = $arrivalnotice_model->getArrivalNoticeList(array('member_id'=>$this->member_info['member_id']),'','','',20);
        View::assign('arrivalnotice_list', $arrivalnotice_list);
        View::assign('show_page', $arrivalnotice_model->page_info->render());

        $this->setMemberCurItem('index');
        $this->setMemberCurMenu('member_arrivalnotice');

       return View::fetch($this->template_dir.'index');
    }
    
    public function del(){
        $arrivalnotice_id = input('param.arrivalnotice_id');
        $arrivalnotice_id_array = ds_delete_param($arrivalnotice_id);
        if ($arrivalnotice_id_array == FALSE) {
            ds_json_encode('10001', lang('param_error'));
        }
        $condition = array();
        $condition[] = array('member_id','=', $this->member_info['member_id']);
        $condition[]=array('arrivalnotice_id','in', $arrivalnotice_id_array);
        $arrivalnotice_model = model('arrivalnotice');
        //批量删除
        $result = $arrivalnotice_model->delArrivalNotice($condition);
        if ($result){
            ds_json_encode(10000, lang('ds_common_del_succ'));
        }else{
            ds_json_encode(10001, lang('ds_common_del_fail'));
        }
    }

    /**
     * 用户中心右边，小导航
     *
     * @param string $menu_key 当前导航的menu_key
     * @return
     */
    protected function getMemberItemList()
    {
        $menu_array = array(
            1 => array(
                'name' => 'index', 'text' => lang('ds_arrivalnotice'),
                'url' => url('MemberArrivalnotice/index')
            )
        );
       
       return $menu_array;
    }
}