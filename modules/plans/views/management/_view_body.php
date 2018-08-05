<?php 
$this->widget('common.widgets.SDetailView', array(
    'data'=>$model,
    'columns'=>array(
        array(
            array('name'=>'name','value'=> $model->name),
            array('name'=>'type','value'=> $model->typeDesc),
            array('name'=>'recurring','value'=> $model->recurringDesc,'visible'=>$model->isRecurringCharge),
            array('name'=>'duration','value'=> Sii::t('sii','{duration} days',array('{duration}'=>$model->duration)),'visible'=>$model->isTrial),
            array('name'=>'price','value'=> $model->formatCurrency($model->price,$model->currency)),
        ),
        array(
            array('name'=>'account_id','type'=>'raw','value'=>$model->account->getAvatar(Image::VERSION_XXSMALL).' '.$model->account->name,'visible'=>user()->hasRole(Role::ADMINISTRATOR)),
            array('name'=>'create_time','value'=>$model->formatDatetime($model->create_time,true)),
            array('name'=>'update_time','value'=>$model->formatDatetime($model->update_time,true)),
        ),
    ),
));
