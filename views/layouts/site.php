<?php
/**
 * This file is part of Shopbay.org (http://shopbay.org)
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
?>   
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta name="language" content="en" />
    <title><?php echo CHtml::encode($this->pageTitle);?></title>
</head>
<body class="<?php echo $this->htmlBodyCssClass.' gradient-backdrop';?>">
    
    <?php 
        $this->widget('common.widgets.soffcanvasmenu.SOffCanvasMenu',[
            'menus'=>[
                [
                    'id'=>'offcanvas_admin_menu',
                    'heading'=>app()->name,
                    'content'=>$this->widget('AdminUserMenu',[
                        'user'=>user(),
                        'offCanvas'=>true,
                    ],true),
                ],
            ],
            'autoMenuOpeners'=>false,//open element is handled at header-container
            'pageContent'=>$this->renderPartial('application.views.layouts._site_body',['content'=>$content],true),
        ]);
    ?>
    
</body>
</html>