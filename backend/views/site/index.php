<?php

/* @var $this yii\web\View */

use miloschuman\highcharts\Highcharts;
use yii\helpers\Html;

$this->title = 'Halmashauri - MIS';
?>
<div class="site-index">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-list-alt"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Jumla</span>
                    <span class="info-box-number">
                        <?php

                        $query = (new \yii\db\Query())->from('sales_transactions');
                        if ($query != null){
                            $sum = $query->sum('amount');
                            echo $sum;
                        }
                        else{
                            echo "0.00";
                        }

                        ?>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green-gradient"><i class="fa fa-sitemap"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?= Html::a(Yii::t('app', 'Mali Asili'), ['/product-pre-application-form/rejected']);?></span>
                    <span class="info-box-number">
                        <?php

                        $query = (new \yii\db\Query())->from('sales_transactions')->where(['resource_id'=>'1']);
                       if($query != null){
                            $sum = $query->sum('amount');
                            echo $sum;
                       }else{
                           echo "0.00";
                       }

                        // ?>
                        </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-light-blue-gradient"><i class="fa fa-road"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?= Html::a(Yii::t('app', 'Ruti'), ['product-pre-application-form/awaiting-review']);?> </span>
                    <span class="info-box-number">
                        <?php
                        $query = (new \yii\db\Query())->from('sales_transactions')->where(['resource_id'=>'2']);
                        echo    $sum = $query->sum('amount');

                        ?>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-gavel"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?= Html::a(Yii::t('app', 'Faini'), '#');?></span>
                    <span class="info-box-number">
                        <?php
                        $query = (new \yii\db\Query())->from('sales_transactions')->where(['resource_id' => '3']);

                        echo $sum = $query->sum('amount'), '0.00';

                        ?>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-tree"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Miche</span>
                    <span class="info-box-number">
                                <?php
                                $query = (new \yii\db\Query())->from('sales_transactions')->where(['resource_id'=>'4']);
                                if($query != null){
                                    echo $sum = $query->sum('amount');
                                }else{
                                    return ;
                                }
                                ?>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green-gradient"><i class="fa fa-paw"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?= Html::a(Yii::t('app', 'Bidhaa ndogondogo'), ['product-application-form/rejected']);?></span>
                    <span class="info-box-number">
                                <?php
                                $query = (new \yii\db\Query())->from('sales_transactions')->where(['resource_id'=>'5']);
                                if($query != null){
                                    echo $sum = $query->sum('amount');
                                }else{
                                    return ;
                                }
                                ?>
                        </span>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">

            <div class="info-box">
                <span class="info-box-icon bg-light-blue-gradient"><i class="fa fa-book"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?= Html::a(Yii::t('app','Leseni'),['product-application-form/awaiting-approval']);?></span>
                    <span class="info-box-number">
                                <?php
                                $query = (new \yii\db\Query())->from('sales_transactions')->where(['resource_id'=>'6']);
                                if($query != null){
                                    echo $sum = $query->sum('amount');
                                }else{
                                    return ;
                                }
                                ?>
                    </span>
                </div>

            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-microphone"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?= Html::a(Yii::t('app','Matangazo'),['product-application-form/approved']);?></span>
                    <span class="info-box-number">
                                <?php
                                $query = (new \yii\db\Query())->from('sales_transactions')->where(['resource_id'=>'7']);
                                if($query != null){
                                    echo $sum = $query->sum('amount');
                                }else{
                                    return ;
                                }
                                ?>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-bank"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Kodi ya jengo</span>
                    <span class="info-box-number">
                                <?php
                                $query = (new \yii\db\Query())->from('sales_transactions')->where(['resource_id'=>'8']);
                                if($query != null){
                                    echo $sum = $query->sum('amount');
                                }else{
                                    return ;
                                }
                                ?>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green-gradient"><i class="fa fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?= Html::a(Yii::t('app', 'Wafanyabiashara'), ['product-application-form/rejected']);?></span>
                    <span class="info-box-number">
                                <?php
                                $query = (new \yii\db\Query())->from('sales_transactions')->where(['resource_id'=>'9']);
                                if($query != null){
                                    echo $sum = $query->sum('amount');
                                }else{
                                    return ;
                                }
                                ?>
                        </span>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">

            <div class="info-box">
                <span class="info-box-icon bg-light-blue-gradient"><i class="fa fa-external-link"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?= Html::a(Yii::t('app','Vibali vya ujenzi'),['product-application-form/awaiting-approval']);?></span>
                    <span class="info-box-number">
                                <?php
                                $query = (new \yii\db\Query())->from('sales_transactions')->where(['resource_id'=>'10']);
                                if($query != null){
                                    echo $sum = $query->sum('amount');
                                }else{
                                    return ;
                                }
                                ?>
                    </span>
                </div>

            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-book"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?= Html::a(Yii::t('app','Fomu za maombi'),['product-application-form/approved']);?></span>
                    <span class="info-box-number">
                                <?php
                                $query = (new \yii\db\Query())->from('sales_transactions')->where(['resource_id'=>'11']);
                                if($query != null){
                                    echo $sum = $query->sum('amount');
                                }else{
                                    return ;
                                }
                                ?>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><i
                                class="fa fa-bar-chart"></i> <?php echo Yii::t('app', 'Collection representation in Bar chart'); ?>
                    </h3>
                    <div class="box-tools">
                        <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>

                </div>
                <div class="box-body">
                    <?php

                    echo Highcharts::widget([
                        'options' => [
                            'title' => '',
                            'xAxis' => [
                                'categories' => ['Collection']
                            ],
                            'yAxis' => [
                                'title' => ['text' => 'Amount Collected(TSH)']
                            ],
                            'credits' => [
                                'enabled' => false
                            ],
                            'chart' => [
                                'type' => 'column',
                                'margin' => 80,
                                'options3d' => [
                                    'enabled' => true,
                                    'alpha' => 0,
                                    'beta' => 0,
                                    'depth' => 100
                                ],

                            ],
                            'series' => [
                                ['name' => 'Mali Asil',
                                    'data' => [1]
                                ],
                                ['name' => 'Ruti',
                                    'data' => [9]
                                ],
                                ['name' => 'Faini',
                                    'data' => [1]
                                ],
                                ['name' => 'Miche',
                                    'data' => [9]
                                ],
                                ['name' => 'Bidhaa Ndogondogo',
                                    'data' => [7]
                                ],
                                ['name' => 'Lesen',
                                    'data' => [5]
                                ],
                                ['name' => 'Matangazo',
                                    'data' => [14]
                                ],
                                ['name' => 'Kodi ya Jengo',
                                    'data' => [3]
                                ],
                                ['name' => 'Wafanyabiashara',
                                    'data' => [11]
                                ],
                                ['name' => 'Vibali vya ujenzi',
                                    'data' => [10]
                                ],
                                ['name' => 'Fomu za Maombi',
                                    'data' => [10]
                                ],

                            ]
                        ]
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
