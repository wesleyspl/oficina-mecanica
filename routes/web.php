<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $products = [
        [
            'title' => 'Fone Bluetooth TWS',
            'price' => 'R$ 89,90',
            'category' => 'Eletrônicos',
            'description' => 'Fone sem fio com cancelamento de ruído e bateria para o dia inteiro.',
            'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=900&q=80',
            'affiliate_url' => 'https://shopee.com.br/',
        ],
        [
            'title' => 'Kit Organizador de Cozinha',
            'price' => 'R$ 59,90',
            'category' => 'Casa',
            'description' => 'Conjunto com potes herméticos para manter alimentos frescos por mais tempo.',
            'image' => 'https://images.unsplash.com/photo-1584992236310-6edddc08acff?auto=format&fit=crop&w=900&q=80',
            'affiliate_url' => 'https://shopee.com.br/',
        ],
        [
            'title' => 'Relógio Smartwatch',
            'price' => 'R$ 129,90',
            'category' => 'Tecnologia',
            'description' => 'Monitoramento de saúde, notificações e autonomia de até 7 dias.',
            'image' => 'https://images.unsplash.com/photo-1546868871-7041f2a55e12?auto=format&fit=crop&w=900&q=80',
            'affiliate_url' => 'https://shopee.com.br/',
        ],
        [
            'title' => 'Luminária LED de Mesa',
            'price' => 'R$ 74,90',
            'category' => 'Home Office',
            'description' => 'Ajuste de intensidade e temperatura de cor para leitura e estudo.',
            'image' => 'https://images.unsplash.com/photo-1507473885765-e6ed057f782c?auto=format&fit=crop&w=900&q=80',
            'affiliate_url' => 'https://shopee.com.br/',
        ],
    ];

    return view('affiliate-market', ['products' => $products]);
});
