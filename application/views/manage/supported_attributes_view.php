<div id="pagetitle"><?php echo lang('rr_supportedattributes');?></div>
<?php
$idp_link = anchor(base_url()."providers/detail/show/".$idp_id,$idp_name);
?>
<div id="subtitle"><h3><?php echo lang('identityprovider');?>: <?php echo $idp_link;?></h3><h4><?php echo $idp_entityid; ?></h4>
    
    <?php


echo '<dd>'.lang('rr_attributereleasepolicy').'<a href="'.base_url().'manage/attribute_policy/globals/'.$idp_id.'"><img src="'.base_url().'images/icons/arrow.png"/></a></dd>';



?>

</div>
<?php
if(!empty($form_attributes))
{
	echo $form_attributes;
}
