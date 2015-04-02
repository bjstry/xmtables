<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-02 12:44:57
         compiled from "Home/T/default/IndexView.html" */ ?>
<?php /*%%SmartyHeaderCode:798213149551d7209bd71f0-05699296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de7b511e48e28cc7794358373939ca23e12877b5' => 
    array (
      0 => 'Home/T/default/IndexView.html',
      1 => 1427718530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '798213149551d7209bd71f0-05699296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit' => 0,
    'row' => 0,
    'kprow' => 0,
    'val' => 0,
    'skrow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551d7209e62cd6_31128220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551d7209e62cd6_31128220')) {function content_551d7209e62cd6_31128220($_smarty_tpl) {?><body>
<div class='uk-grid'>
<div class='uk-width-7-10 uk-container-center'>
<table class='uk-table uk-table-hover'>
<?php echo $_smarty_tpl->tpl_vars['edit']->value;?>
<span class='uk-button' onclick="print();">打印</span><a class='uk-button uk-float-right' onclick="history.go(-1);">返回</a>
  <br>
  <h2 class='uk-text-center' ><strong>项目管理表格</strong></h2>
  <tr>
	  <td colspan=4><span>建表日期:&nbsp;<em><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</em></span><span class='uk-float-right'>填表人:&nbsp;<em><?php echo $_smarty_tpl->tpl_vars['row']->value['author'];?>
</em></span></td>
  </tr>
  <tr>
    <th class='uk-text-center' colspan=4>合同基本情况</th>
  </tr>	
  <tr>
    <td>客户单位</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['customer_a'];?>
</td><td>院系、姓名</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['customer_b'];?>
</td>
  </tr>
  <tr>
    <td>业务负责人</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['salesman'];?>
</td><td>合同金额</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['aom'];?>
</td>
  </tr>
  <tr>
    <td>我方签字日期</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['mdate'];?>
</td><td>客户签字日期</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['ydate'];?>
</td>
  </tr>
  <tr>
    <td>合同签订日期</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['cdate'];?>
</td><td>付款方式</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['paytype'];?>
</td>
  </tr>
  <tr>
    <td>合同编号</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['cnum'];?>
</td><td>项目负责人</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['prjman'];?>
</td>
  </tr>
  <tr>
    <td>方案报价</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['startom'];?>
</td><td>业务主要沟通人</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['tman'];?>
</td>
  </tr>
  <tr>
    <td colspan=2>辅助人员</td><td colspan=2><em><?php echo $_smarty_tpl->tpl_vars['row']->value['otman'];?>
</td>
  </tr>
  <tr>
    <th class='uk-text-center' colspan=4>下单</th>
  </tr>
  <tr>
    <td>下单编号</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['onum'];?>
</td><td>下单日期</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['odate'];?>
</td>
  </tr>
  <tr>
    <th class='uk-text-center' colspan=4>发货</th>
  </tr>
  <tr>
    <td>发货日期</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['sdate'];?>
</td><td>发货方式/单号</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['stype'];?>
</td>
  </tr>
  <tr>
    <td>安装人员</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['techman'];?>
</td><td>安装日期</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['tdate'];?>
</td>
  </tr>
  <tr>
    <td>验收日期</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['checkdate'];?>
</td><td>验收人</td><td><em><?php echo $_smarty_tpl->tpl_vars['row']->value['checkman'];?>
</td>
  </tr>
  <tr>
    <th colspan=4 class='uk-text-center'>开票</th>
  </tr>
  <tr>
    <td>开票日期</td><td>开票金额</td><td>发票寄送日期</td><td>发票寄送方式</td>
	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kprow']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
  <tr>
    <td><em><?php echo $_smarty_tpl->tpl_vars['val']->value['kdate'];?>
</td><td><em><?php echo $_smarty_tpl->tpl_vars['val']->value['kom'];?>
</td><td><em><?php echo $_smarty_tpl->tpl_vars['val']->value['fsdate'];?>
</td><td><em><?php echo $_smarty_tpl->tpl_vars['val']->value['fstype'];?>
</em></td>
  </tr>
   <?php } ?>
  <tr>
    <th colspan=4 class='uk-text-center'>收款</th>
  </tr>

  <tr>
    <td>货款应到日期</td><td>货款实到日期</td><td>付款金额</td><td>应收账款</td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['skrow']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
  <tr>
    <td><em><?php echo $_smarty_tpl->tpl_vars['val']->value['gsdate'];?>
</td><td><em><?php echo $_smarty_tpl->tpl_vars['val']->value['godate'];?>
</td><td><em><?php echo $_smarty_tpl->tpl_vars['val']->value['gom'];?>
</td><td><em><?php echo $_smarty_tpl->tpl_vars['val']->value['shom'];?>
</em></td>
  </tr>
  <?php } ?>
</table>
</div>
<div class='uk-width-7-10 uk-container-center uk-margin-top uk-margin-bottom'>
  <p class='uk-text-center'>艮泰项目管理表格</p>
</div>
</div>
</body>
<?php }} ?>
