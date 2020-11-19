<style>
.am-sideleft-menu > .nav-item > .nav-link i.fa:first-child{
	font-size:17px;
}
</style>
<div class="am-sideleft">
      <ul class="nav am-sideleft-tab">
        <li class="nav-item">
          <a href="#mainMenu" class="nav-link active"><i class="icon ion-ios-home-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a href="#emailMenu" class="nav-link"><i class="icon ion-ios-email-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a href="#chatMenu" class="nav-link"><i class="icon ion-ios-chatboxes-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a href="#settingMenu" class="nav-link"><i class="icon ion-ios-gear-outline tx-24"></i></a>
        </li>
      </ul>

      <div class="tab-content">
        <div id="mainMenu" class="tab-pane active">
          <ul class="nav am-sideleft-menu">
<li class="nav-item">
    <a class="nav-link <?=$this->data['menu_uri_2']=='account'?'active':''?>" href="<?=site_url($_user_link).'/account'?>"><div class="sb-nav-link-icon"><i class="fa fa-home"></i></div> Home</a>
</li>

<li class="nav-item">
    <a class="nav-link <?=$this->data['menu_uri_2']=='details'?'active':''?>" href="<?=$_user_link.'/details/edit_profile'?>"><div class="sb-nav-link-icon"><i class="fa fa-user"></i></div> Profile</a>
</li>

<li class="nav-item">
    <a class="nav-link <?=$this->data['menu_uri_2']=='causes'?'active':''?>" href="<?=$_user_link.'/causes'?>"><div class="sb-nav-link-icon"><i class="fa fa-list"></i></div>Causes</a>
</li>

<li class="nav-item">
    <a class="nav-link <?=$this->data['menu_uri_2']=='donations'?'active':''?>" href="<?=$_user_link.'/donations'?>"><div class="sb-nav-link-icon"><i class="fa fa-gift"></i></div> Donations</a>
</li>

<li class="nav-item">
    <a class="nav-link <?=$this->data['menu_uri_2']=='payment_detail'?'active':''?>" href="<?=$_user_link.'/payment_detail'?>"><div class="sb-nav-link-icon"><i class="fa fa-list"></i></div> Payment Setting</a>
</li>
<?php /*?><li class="<?=$this->data['menu_uri_2']=='commencts'?'active':''?>">
<a class="nav-link" href="javascript:;"><div class="sb-nav-link-icon"><i class="fa fa-comments"></i></div> Comments</a>
</li><?php */?>

<li class="nav-item">
<a class="nav-link <?=$this->data['menu_uri_2']=='tickets'?'active':''?>" href="<?=$_user_link.'/tickets'?>"><div class="sb-nav-link-icon"><i class="fa fa-ticket"></i></div> Contact Support</a>
</li>

<li class="nav-item">
<a class="nav-link <?=$this->data['menu_uri_2']=='withdrawal'?'active':''?>" href="<?=$_user_link.'/withdrawal'?>"><div class="sb-nav-link-icon"><i class="fa fa-history"></i></div> Withdrawal History</a>
</li>
          </ul>
        </div><!-- #mainMenu -->
        <div id="emailMenu" class="tab-pane"></div><!-- #emailMenu -->
        <div id="chatMenu" class="tab-pane"></div><!-- #emailMenu -->
        <div id="settingMenu" class="tab-pane"></div>
      </div><!-- tab-content -->
    </div>

