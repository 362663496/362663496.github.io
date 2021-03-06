<?php
namespace frontend\components;


use yii\base\Widget;
use Yii;
class TagsCloudWidget extends  Widget
{
    public $tags;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        $tagString = '';
        $fontStyle = [
            '6' =>  'danger',
            '5' =>  'info',
            '4' =>  'warning',
            '3' =>  'primary',
            '2' =>  'success',
        ];

        foreach($this->tags as $tag=>$v)
        {
            $tagString.="<a href='".Yii::$app->homeUrl."?r=post/index&PostSearch[tags]=$tag'>
                 <h$v style='display:inline-block;'><span class='label label-$fontStyle[$v]'>$tag</span></h$v></a>";
        }

        return $tagString;
    }
}