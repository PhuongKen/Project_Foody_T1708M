<?php

use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('foods')->truncate();
        \Illuminate\Support\Facades\DB::table('foods')->insert([
                [
                    'restaurantID' => 1,
                    'name' => 'Cá hồi áp chảo ăn cùng với rong biển và trứng cá hồi',
                    'avatar' => 'gia-trung-ca-hoi2.jpg',
                    'price' => '50000',
                    'discount' => '43000',
                    'status' => 1
                ],
                [
                    'restaurantID' => 1,
                    'name' => 'Cá hồi tươi sống ướp thảo mộc thái hạt lựu',
                    'avatar' => 'images.jpg',
                    'price' => '140000',
                    'discount' => '120000',
                    'status' => 1
                ],
                [
                    'restaurantID' => 1,
                    'name' => 'Rau xà lách, thịt lợn xông khói, bánh mỳ sấy',
                    'avatar' => 'thitkhoi.jpg',
                    'price' => '130000',
                    'discount' => '0',
                    'status' => 1
                ],
                [
                    'restaurantID' => 1,
                    'name' => 'Salad cá hồi tẩm vừng, vị quất ăn kèm cà muối Việt',
                    'avatar' => 'LAT6.jpg',
                    'price' => '160000',
                    'discount' => '135000',
                    'status' => 1
                ],
                [
                    'restaurantID' => 1,
                    'name' => 'Súp kem nghệ và cá hồi áp chảo',
                    'avatar' => 'kemca.jpg',
                    'price' => '100000',
                    'discount' => '0',
                    'status' => 1
                ],
                [
                    'restaurantID' => 1,
                    'name' => 'Cá hồi muốn ăn kèm hoa quả tươi theo mùa',
                    'avatar' => 'mẹo-chọn-hoa-quả1.jpg',
                    'price' => '120000',
                    'discount' => '0',
                    'status' => 1
                ],
                [
                    'restaurantID' => 1,
                    'name' => 'Cá hồi tươi sống và trứng cá hồi, sốt xì dầu',
                    'avatar' => 'download.jpg',
                    'price' => '120000',
                    'discount' => '100000',
                    'status' => 1
                ],
                [
                    'restaurantID' => 1,
                    'name' => 'Nem tươi cuốn cá hồi muối và nem rán cá hồi',
                    'avatar' => 'nemcuon.jpg',
                    'price' => '60000',
                    'discount' => '50000',
                    'status' => 1
                ],
                [
                    'restaurantID' => 1,
                    'name' => 'Súp chua cay, nấm tươi, cá hồi nướng, sả cây',
                    'avatar' => 'Canh-ca-tram-nau-doc-mung (1).jpg',
                    'price' => '90000',
                    'discount' => '0',
                    'status' => 1
                ],
                [
                    'restaurantID' => 1,
                    'name' => 'Súp khoai tây, lê ướp lá bạc hà ăn cùng với bánh mỳ',
                    'avatar' => 'soup-1-7494-1389251301.jpg',
                    'price' => '70000',
                    'discount' => '0',
                    'status' => 1
                ],
                [
                    'restaurantID' => 1,
                    'name' => 'Bánh mỳ với pate Salmonoid và ruốc cá hồi',
                    'avatar' => 'lam-pate-gan-don-gian-tai-nha-1.jpg',
                    'price' => '50000',
                    'discount' => '45000',
                    'status' => 1
                ],
                [
                    'restaurantID' => 1,
                    'name' => 'Bánh mỳ vòng cá hồi tự muối',
                    'avatar' => 'foody-mobile-t2-jpg-594-635925226775395566.jpg',
                    'price' => '35000',
                    'discount' => '0',
                    'status' => 1
                ],
            ]

        );
    }
}
