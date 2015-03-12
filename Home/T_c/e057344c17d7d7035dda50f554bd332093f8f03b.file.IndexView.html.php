<?php /* Smarty version Smarty-3.0.7, created on 2015-03-12 09:44:11
         compiled from "Home/T/default/IndexView.html" */ ?>
<?php /*%%SmartyHeaderCode:12634211175500ef6b689fb2-66370186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e057344c17d7d7035dda50f554bd332093f8f03b' => 
    array (
      0 => 'Home/T/default/IndexView.html',
      1 => 1425895931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12634211175500ef6b689fb2-66370186',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<body>
<div class='uk-grid'>
<div class='uk-width-7-10 uk-container-center'>
<table class='uk-table uk-table-hover'>
<?php echo $_smarty_tpl->getVariable('edit')->value;?>
<span class='uk-button' onclick="print();">打印</span><a class='uk-button uk-float-right' onclick="history.go(-1);">返回</a>
  <br>
  <h2 class='uk-text-center' ><strong>项目管理表格</strong></h2>
  <tr>
	  <td colspan=4><span>建表日期:&nbsp;<em><?php echo $_smarty_tpl->getVariable('row')->value['date'];?>
</em></span><span class='uk-float-right'>填表人:&nbsp;<em><?php echo $_smarty_tpl->getVariable('row')->value['author'];?>
</em></span></td>
  </tr>
  <tr>
    <th class='uk-text-center' colspan=4>合同基本情况</th>
  </tr>	
  <tr>
    <td>客户单位</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['customer_a'];?>
</td><td>院系、姓名</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['customer_b'];?>
</td>
  </tr>
  <tr>
    <td>业务负责人</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['salesman'];?>
</td><td>合同金额</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['aom'];?>
</td>
  </tr>
  <tr>
    <td>我方签字日期</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['mdate'];?>
</td><td>客户签字日期</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['ydate'];?>
</td>
  </tr>
  <tr>
    <td>合同签订日期</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['cdate'];?>
</td><td>付款方式</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['paytype'];?>
</td>
  </tr>
  <tr>
    <td>合同编号</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['cnum'];?>
</td><td>项目负责人</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['prjman'];?>
</td>
  </tr>
  <tr>
    <td>方案报价</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['startom'];?>
</td><td>最终售价</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['overom'];?>
</td>
  </tr>
  <tr>
    <td>业务主要沟通人</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['tman'];?>
</td><td>辅助人员</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['otman'];?>
</td>
  </tr>
  <tr>
    <th class='uk-text-center' colspan=4>下单</th>
  </tr>
  <tr>
    <td>下单编号</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['onum'];?>
</td><td>下单日期</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['odate'];?>
</td>
  </tr>
  <tr>
    <th class='uk-text-center' colspan=4>发货</th>
  </tr>
  <tr>
    <td>发货日期</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['sdate'];?>
</td><td>发货方式/单号</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['stype'];?>
</td>
  </tr>
  <tr>
    <td>安装人员</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['techman'];?>
</td><td>安装日期</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['tdate'];?>
</td>
  </tr>
  <tr>
    <td>验收日期</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['checkdate'];?>
</td><td>验收人</td><td><em><?php echo $_smarty_tpl->getVariable('row')->value['checkman'];?>
</td>
  </tr>
  <tr>
    <th colspan=4 class='uk-text-center'>开票</th>
  </tr>
  <tr>
    <td>开票日期</td><td>开票金额</td><td>发票寄送日期</td><td>发票寄送方式</td>
	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('kprow')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
?>
  <tr>
    <td><em><?php echo $_smarty_tpl->tpl_vars['val']->value['kdate'];?>
</td><td><em><?php echo $_smarty_tpl->tpl_vars['val']->value['kom'];?>
</td><td><em><?php echo $_smarty_tpl->tpl_vars['val']->value['fsdate'];?>
</td><td><em><?php echo $_smarty_tpl->tpl_vars['val']->value['fstype'];?>
</em></td>
  </tr>
   <?php }} ?>
  <tr>
    <th colspan=4 class='uk-text-center'>收款</th>
  </tr>

  <tr>
    <td>货款应到日期</td><td>货款实到日期</td><td>付款金额</td><td>应收账款</td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('skrow')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
?>
  <tr>
    <td><em><?php echo $_smarty_tpl->tpl_vars['val']->value['gsdate'];?>
</td><td><em><?php echo $_smarty_tpl->tpl_vars['val']->value['godate'];?>
</td><td><em><?php echo $_smarty_tpl->tpl_vars['val']->value['gom'];?>
</td><td><em><?php echo $_smarty_tpl->tpl_vars['val']->value['shom'];?>
</em></td>
  </tr>
  <?php }} ?>
</table>
</div>
<div class='uk-width-7-10 uk-container-center uk-margin-top uk-margin-bottom'>
  <p class='uk-text-center'>艮泰项目管理表格</p>
</div>
</div>
</body>
