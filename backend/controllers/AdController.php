<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/8
 * Time: 20:26
 */
namespace backend\controllers;
class AdController extends BaseController
{
	public function actionMain(){
        $clsid = isset($_REQUEST['clsid'])?intval($_REQUEST['clsid']):0;
        $keyword = isset($_REQUEST['keyword'])?addslashes($_REQUEST['keyword']):'';
        $sql = "select * from ".$GLOBALS['ted']->table('myadtype')." order by id desc";
        $arr = $GLOBALS['db']->getAll($sql);
        $option = '';
        foreach($arr as $item){
        	if($item['id'] == $clsid)
	        {
	        	$option .= "<option value='{$item['id']}' selected='selected'>{$item['typename']}</option>\n\r";
	        } else {
        		$option .="<option value='{$item['id']}'>{$item['typename']}</option>\n\r";
	        }
        }
        $where_sql = ' 1=1';
        if($clsid!=0) $where_sql .= " and clsid= {$clsid}";
        if($keyword!='') $where_sql .= " and (ad.adname like '{$keyword}')";
        $sql = "SELECT ad.aid,ad.clsid,ad.tagname,tp.typename as typename,ad.adname,ad.timeset,ad.endtime,ap.typename as clsname
FROM ".$GLOBALS['ted']->table('myad')." ad 
LEFT JOIN ".$GLOBALS['ted']->table('arctype')." tp on tp.id=ad.typeid 
LEFT JOIN ".$GLOBALS['ted']->table('myadtype')." ap on ap.id=ad.clsid
WHERE {$where_sql}
ORDER BY ad.aid desc";
        $dlist = $GLOBALS['db']->getAll($sql);
		return $this->render('main',['dlist'=>json_encode($dlist),'option'=>$option]);
	}
	public function actionAdd(){
		return $this->render('add');
	}
	public function actionEdit(){
		return $this->render('edit');
	}
	public function actionAdtype(){
		$pname_new = isset($_REQUEST['pname_new'])?$_REQUEST['pname_new']:'';
		$check_new = isset($_REQUEST['check_new'])?$_REQUEST['check_new']:'';
		$endID = isset($_REQUEST['idend'])?$_REQUEST['idend']:0;
		if($_REQUEST['act'] == 'save'){
			$startID = 1;
			for(;$startID<=$endID;$startID++){
				$tid = ${'ID_'.$startID};
				$pname = ${'pname_'.$startID};
				if(isset(${'check_'.$startID}))
				{
					if($pname!='')
					{
						$sql = "update ".$GLOBALS['ted']->table('myadtype'). " set typename ={$pname} where id = '{$tid}'";
						$GLOBALS['db']->query($sql);
					}
					else
					{
						$sql = "delete from ".$GLOBALS['ted']->table('myadtype')." where id ={$tid}";
						$GLOBALS['db']->query($sql);
					}
				}
			}
			//增加记录
			if(isset($check_new) && $pname_new != '')
			{
				$sql = "insert into ".$GLOBALS['ted']->table('myadtype') ." (typename) value('{$pname_new}')";
				$GLOBALS['db']->query($sql);
			}
			$data = ['status'=>1,'error'=>0,'message'=>'成功更新广告分类列表！'];
			die(json_encode($data));
		}
		return $this->render('adtype');
	}
	private function TestType($tname,$type=""){
		if($tname=="")
		{
			return ($type==1)?"默认分类":"所有分类";
		}
		else
		{
			return $tname;
		}
	}
	private function TimeSetValue($ts)
	{
		if($ts==0)
		{
			return "不限时间";
		}
		else
		{
			return "限时标记";
		}
	}
}