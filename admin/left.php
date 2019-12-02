<?php
include_once(DIR_WS_CLASS."db_admin_menus.php");
include_once(DIR_WS_CLASS."db_admin_menus_subcategory.php");
$objcategory = new db_admin_menus;
$strWhere = " active = 'Y'";
$category = $objcategory->selectAll($strWhere,null,null);

$objsubcategory = new db_admin_menus_subcategory1;
$strWhere1 = " active = 'Y'";
$subcategory = $objsubcategory->selectAll($strWhere1,null,null);
?>
<div class="inner-wrapper">
<!-- start: sidebar -->
	<aside id="sidebar-left" class="sidebar-left">
		<div class="sidebar-header">
			<div class="sidebar-title">Navigation</div>
			<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle"><i class="fa fa-bars" aria-label="Toggle sidebar"></i></div>
		</div>
		<div class="nano">
			<div class="nano-content">
				<nav id="menu" class="nav-main" role="navigation">
					<ul class="nav nav-main">
						<?php
			                if($category[0]>0):
			                $i=0;
			                while($objcategory = mysql_fetch_object($category[1])):
			                    $objsubcategory = new db_admin_menus_subcategory1;
			                    $strWhere1 = " admin_menus_id = $objcategory->admin_menus_id and active = 'Y'";
			                    $subcategory = $objsubcategory->selectAll($strWhere1,null,null);
			                    $catname = $objcategory->admin_menus_category;
			                    $caticon = $objcategory->admin_menus_icon;
			                    $i=$i+1;
                		?>						
						<li class="nav-parent nav-expanded nav-active">
							
						<a><i class="<?php echo htmlspecialchars($caticon,ENT_QUOTES, 'UTF-8');?>" aria-hidden="true"></i><span><?php echo htmlspecialchars($catname,ENT_QUOTES, 'UTF-8');?></span></a>
							<ul class="nav nav-children">
						<?php
                				if($subcategory[0]>0):
                    				$j=0;
                    				while($objsubcategory = mysql_fetch_object($subcategory[1])):
                    				$subcatname = $objsubcategory->admin_menus_subcategory_title;
                    				$subcaturl = $objsubcategory->admin_menus_subcategory_url;
                    			$j=$j+1;
            			?>								
								<li><a href="<?php echo $domain?>admin/<?php echo htmlspecialchars($subcaturl,ENT_QUOTES, 'UTF-8');?>"><?php echo htmlspecialchars($subcatname,ENT_QUOTES, 'UTF-8');?></a></li>
						<?php
                				endwhile;
                			endif;
            			?>								
							</ul>
						</li>
						<?php 
							endwhile;
            			endif;
                		?>						
					</ul>
				</nav>
			</div>
		</div>	
	</aside>
