<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [

                    ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['/']],
                    [
                        'label' => 'Report',
                        'icon' => 'square',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Mali Asili Revenue', 'icon' => 'circle-o', 'url' => ['/']],
                            ['label' => 'Routes Revenue', 'icon' => 'circle-o', 'url' => ['/']],
                            ['label' => 'Fines Revenue', 'icon' => 'circle-o', 'url' => ['/']],
                            ['label' => 'Mauzo ya Miche', 'icon' => 'circle-o', 'url' => ['/']],
                            ['label' => 'Bidhaa ndogo ndogo', 'icon' => 'circle-o', 'url' => ['/']],
                        ],
                    ],
                    ['label' => 'Regions', 'icon' => 'square', 'url' => ['region/']],
                    ['label' => 'Location', 'icon' => 'square', 'url' => ['location/']],
                    ['label' => 'offences', 'icon' => 'square', 'url' => ['offences/']],
                    ['label' => 'Resources Type', 'icon' => 'square', 'url' => ['resources-type/']],
                    ['label' => 'Revenue Type', 'icon' => 'square', 'url' => ['revenue-type/']],
                    ['label' => 'Resources Transactions', 'icon' => 'square', 'url' => ['resources-transactions/']],
                    ['label' => 'Sales Transactions', 'icon' => 'square', 'url' => ['sales-transactions/']],
                    ['label' => 'Shehes', 'icon' => 'square', 'url' => ['shehas/']],
                    [
                        'label' => 'Setup',
                        'icon' => 'square',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Resource Type', 'icon' => 'circle-o', 'url' => ['resources-type/']],
                            ['label' => 'Routes Revenue', 'icon' => 'circle-o', 'url' => ['/']],
                            ['label' => 'Fines Revenue', 'icon' => 'circle-o', 'url' => ['/']],
                            ['label' => 'Mauzo ya Miche', 'icon' => 'circle-o', 'url' => ['/']],
                            ['label' => 'Bidhaa ndogo ndogo', 'icon' => 'circle-o', 'url' => ['/']],
                        ],
                    ],

                   // ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],

                    [
                        'label' => 'Management',
                        'icon' => 'square',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Users', 'icon' => 'circle-o', 'url' => ['/user']],
                            ['label' => 'Agents', 'icon' => 'circle-o', 'url' => ['/agent']],
                            ['label' => 'Roles', 'icon' => 'circle-o', 'url' => ['/auth-item']],
                            //['label' => 'Roles', 'icon' => 'circle-o', 'url' => ['/auth-rule']],
                            ['label' => 'Assignment', 'icon' => 'circle-o', 'url' => ['/auth-assignment']],
                            ['label' => 'Supper Roles', 'icon' => 'circle-o', 'url' => ['/auth-item-child']],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
