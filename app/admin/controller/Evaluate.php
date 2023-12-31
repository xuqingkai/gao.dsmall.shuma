<?php

namespace app\admin\controller;
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
class Evaluate extends AdminControl
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        Lang::load(base_path().'admin/lang/'.config('lang.default_lang').'/evaluate.lang.php');
    }

    /**
     * 商品来自买家的评价列表
     */
    public function evalgoods_list() {
        $evaluategoods_model = model('evaluategoods');

        $condition = array();
        //商品名称
        if (input('param.goods_name')) {
            $condition[] = array('geval_goodsname','like', '%'.input('param.goods_name').'%');
        }
        if(input('param.stime')) {
            $stime = strtotime(input('param.stime'));
            $condition[]=array('geval_addtime','>=', $stime);
        }
        if(input('param.etime')) {
            $etime = strtotime(input('param.etime'))+86399;
            $condition[]=array('geval_addtime','<=', $etime);
        }
        $evalgoods_list	= $evaluategoods_model->getEvaluategoodsList($condition, 10);

        View::assign('show_page',$evaluategoods_model->page_info->render());
        View::assign('evalgoods_list',$evalgoods_list);
        
        View::assign('filtered', $condition ? 1 : 0); //是否有查询条件
        
        $this->setAdminCurItem('evalgoods_list');
        return View::fetch('index');
    }
    
    
    /**
     * 解释来自买家的评价
     */
    public function explain_save() {
        $geval_id = intval(input('param.geval_id'));
        $evaluategoods_model = model('evaluategoods');
        if (!request()->isPost()) {
            $evaluategoods = $evaluategoods_model->getEvaluategoodsInfoByID($geval_id);
            View::assign('evaluategoods', $evaluategoods);
            return View::fetch('explain_save');
        } else {
            $geval_explain = trim(input('post.geval_explain'));
            //验证表单
            if (!$geval_explain) {
                $this->error('解释内容不能为空');
            }
            $evaluate_info = $evaluategoods_model->getEvaluategoodsInfoByID($geval_id);
            if (empty($evaluate_info)) {
                $this->error(lang('param_error'));
            }

            $update = array('geval_explain' => $geval_explain);
            $condition = array();
            $condition[] = array('geval_id','=',$geval_id);
            $result = $evaluategoods_model->editEvaluategoods($update, $condition);

            if ($result) {
                dsLayerOpenSuccess('解释成功');
            } else {
                $this->error('解释保存失败');
            }
        }
    }

    /**
     * 删除商品评价
     */
    public function evalgoods_del() {
        $geval_id = intval(input('param.geval_id'));
        if ($geval_id <= 0) {
            ds_json_encode(10001, lang('param_error'));
        }
        $evaluategoods_model = model('evaluategoods');
        $result = $evaluategoods_model->delEvaluategoods(array('geval_id'=>$geval_id));
        if ($result) {
            $this->log('删除商品评价，评价编号'.$geval_id);
            ds_json_encode(10000, lang('ds_common_del_succ'));
        } else {
            ds_json_encode(10001, lang('ds_common_del_fail'));
        }
    }


    protected function getAdminItemList()
    {
        $menu_array = array(
            array(
                'name' => 'evalgoods_list',
                'text' => lang('admin_evaluate_list'),
                'url' => url('Evaluate/evalgoods_list')
            )
        );
        return $menu_array;
    }
}