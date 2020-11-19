<div class="am-header">
<div class="am-header-left">
<a id="naviconLeft" href="" class="am-navicon d-none d-lg-flex"><i class="icon ion-navicon-round"></i></a>
<a id="naviconLeftMobile" href="" class="am-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
<a href="<?=$_user_link.'/account'?>" class="am-logo">Dashboard</a>
</div><!-- am-header-left -->

<div class="am-header-right">
<div class="dropdown dropdown-profile">
  <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
    <img src="<?=site_url().'assets/uploads/profile.jpg'?>" class="wd-32 rounded-circle" alt="">
    <span class="logged-name"><span class="hidden-xs-down"><?=$user_details->username?></span> <i class="fa fa-angle-down mg-l-3"></i></span>
  </a>
  <div class="dropdown-menu wd-200">
    <ul class="list-unstyled user-profile-nav">
            <a  href="<?=$_user_link.'/details/edit_profile'?>"><i class="icon ion-ios-person-outline"></i> Profile</a>
            <a  href="<?=$_user_link.'/account/change_password'?>"><i class="icon ion-ios-gear-outline"></i> Change Password</a>
            <a  href="<?=$_user_link.'/account/logout'?>"><i class="icon ion-power"></i> Logout</a>
    </ul>
  </div><!-- dropdown-menu -->
</div><!-- dropdown -->
</div><!-- am-header-right -->
</div><!-- am-header -->

