<?php
namespace app\components;

use Yii;
use app\assets\AppAsset;
use yii\helpers\Url;
class MenuHelper 
{
public $menuItems;

//    http://stackoverflow.com/questions/24031287/dynamic-multilevel-drop-down-menu-in-yii2
//    http://stackoverflow.com/questions/34060086/how-to-build-dynamic-menu-in-yii2

public static function getMenu(){  
 
 $canRoot = Yii::$app->user->can('Support') || Yii::$app->user->can('Admin')|| Yii::$app->user->can('Serv');
 return $menuItems = [
        ['label'=>'<i class="fa fa-user"></i><span class="sidebar-text">Клиенты</span> <span class="fa arrow"></span>', 'url'=>'#',
            'items'=> [
                ['label'=> 'Поиск', 'url'=> Url::to(['/'.self::getController().'/index'])],
                ['label'=> 'Добавить', 'url'=> Url::toRoute(['/'.self::getController().'/add'])],
            ]
        ],
        ['label'=>'<i class="fa fa-users"></i><span class="sidebar-text">Все клиенты</span>', 
            'visible' => $canRoot, 'url'=>'#'],
        ['label'=>'<i class="fa fa-square"></i><span class="sidebar-text">Договоры</span>', 'url'=>'#'],
        ['label'=>'<i class="fa fa-plus-square"></i><span class="sidebar-text">Услуги</span>', 
            'visible' => $canRoot, 'url'=>'#'],
        ['label'=>'<i class="fa fa-plus-square"></i><span class="sidebar-text">Тарифные планы</span>', 'url'=>'#'],
        ['label'=>'<i class="fa fa-plus-square"></i><span class="sidebar-text">Ресурсы</span>', 
            'visible' => $canRoot, 'url'=>'#'],
        
        ['label'=>'<i class="fa fa-plus-square"></i><span class="sidebar-text">Пользователи</span> <span class="fa arrow"></span>', 'url'=>'#', 
            'visible'=> Yii::$app->user->can('Admin'), 
            'items'=> [
                ['label'=> 'Список', 'url'=> Url::to(['/user/admin/index'])],
                ['label'=> 'Назначения', 'url'=> Url::to(['/admin/assignment'])],
                ['label'=> 'Разрешения', 'url'=> Url::to(['/admin/permission'])],
                ['label'=> 'Роли', 'url'=> Url::to(['/admin/role'])],
                ['label'=> 'Маршруты', 'url'=> Url::to(['/admin/route'])],
                ['label'=> 'Правила', 'url'=> Url::to(['/admin/rule'])],
                ['label'=> 'Меню', 'url'=> Url::to(['/admin/menu'])],
            ]
        ],
     
        ['label'=>'<i class="fa fa-square"></i><span class="sidebar-text">Дополнительно</span>', 
            'visible' => $canRoot, 'url'=>'#'],
    ];
}

private static function getController(){
    
    switch (true) {
        case Yii::$app->user->can('Admin'):$controller = "administrator";
            break;
        case Yii::$app->user->can('Customer'):$controller = "customer";   
            break;
        case Yii::$app->user->can('Serv'):$controller = "serv";
            break;
        case Yii::$app->user->can('Support'):$controller = "support"; 
            break;
    }
    return $controller;
}

}