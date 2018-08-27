<?php

use Illuminate\Database\Seeder;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('restaurants')->truncate();
        \Illuminate\Support\Facades\DB::table('restaurants')->insert([
            [
                'categoryID' => 1,
                'name' => 'Salmonoid - Món Âu - Cao Bá Quát',
                'avartar' => 'salmonoid-mon-au-cao-180821141936.jpg',
                'addressID' => 1,
                'addressDetail' => '32C Cao Bá Quát',
                'phone' => '0984480116',
                'openTime' => '08:30',
                'closeTime' => '21:00',
                'shortDescription' => 'Sang trọng, cặp đôi, gia đình',
                'description' => 'Quán nằm nhỏ nhắn xinh xắn trên con phố cao bá quát, lối nhỏ từ ngoài cổng đi vào quán có hàng rào cây xanh nhìn rất đẹp và mát mắt, bạn có thể selfie dc khá nhiều ảnh đẹp ở chỗ đó :))',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryID' => 1,
                'name' => 'Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel Hanoi',
                'avartar' => 'foody-mobile-tim-jpg-652-636129899200456707.jpg',
                'addressID' => 2,
                'addressDetail' => 'Tầng 36, Lotte Center, 54 Liễu Giai',
                'phone' => '0984480116',
                'openTime' => '08:30',
                'closeTime' => '21:00',
                'shortDescription' => 'Sang trọng, món trung hoa, cặp đôi, gia đình nhỏ',
                'description' => 'Vị thì rất đẹp, ngay trong toà khách sạn, gửi xe xong đi thẳng vào, bấm thang lên 36, rẽ phải, luôn có nhân viên lễ tân đứng cửa để đón khách và xếp bàn.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryID' => 1,
                'name' => 'Top Floor Rue Des Seaux Restaurant - Hàng Thùng',
                'avartar' => 'foody-top-floor-rue-des-seaux-restaurant-477-636358922864083943.jpg',
                'addressID' => 3,
                'addressDetail' => '21 Hàng Thùng',
                'phone' => '0984480116',
                'openTime' => '08:30',
                'closeTime' => '21:00',
                'shortDescription' => 'Sang trọng, nhà hàng-quốc tế-cặp đôi',
                'description' => 'Nhà hàng có view vào buổi tối khá đẹp, hướng Hồ Gươm hay cầu Chương Dương đều có cái đẹp riêng. Nhân viên phục vụ cũng khá chuyên nghiệp, lịch sự và vui vẻ.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryID' => 1,
                'name' => 'Tunglok Heen - Ẩm Thực Trung Hoa - Almaz Vinhomes Riverside',
                'avartar' => 'foody-top-floor-rue-des-seaux-restaurant-477-636358922864083943.jpg',
                'addressID' => 4,
                'addressDetail' => 'Almaz, Vinhomes Riverside,  Quận Long Biên',
                'phone' => '0984480116',
                'openTime' => '08:30',
                'closeTime' => '21:00',
                'shortDescription' => 'Sang trọng, nhà hàng - món Trung Hoa - nhóm hội',
                'description' => 'Nhà hàng siêu hoành tráng, đẹp miễn chê. Nhìn bên ngoài như Tử Cấm Thàng, bên trong không gian rộng rãi tráng lệ kiểu hoàng cung.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryID' => 1,
                'name' => 'Top Of Hanoi - Lotte Hotels & Resorts Hanoi',
                'avartar' => 'foody-mobile-top1-jpg-973-635742117477155490.jpg',
                'addressID' => 5,
                'addressDetail' => 'Tầng 67, Lotte Center, 54 Liễu Giai',
                'phone' => '0984480116',
                'openTime' => '08:30',
                'closeTime' => '21:00',
                'shortDescription' => 'Sang trọng, nhà hàng - món Việt, quốc tế - cặp đôi',
                'description' => 'Vị trí: nằm trên tầng 67 của khách sạn Lotte. Dạng rooftop bar.
                                  Không gian: đẹp, cực đẹp. Sang trọng và lịch sự. 
                                  Có thể nhìn bao quát thủ đô. Mát mẻ đi khuya thì hơi lạnh,
                                   có nhạc nên không khí quán khá náo nhiệt, nhiều khách du lịch như mình và khách nước ngoài.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryID' => 1,
                'name' => 'Maison De Tet Decor Cafe - Từ Hoa',
                'avartar' => 'foody-mobile-maison-1-mb-jpg-617-635857130884455566.jpg',
                'addressID' => 6,
                'addressDetail' => '36 Từ Hoa Công Chúa',
                'phone' => '0984480116',
                'openTime' => '08:30',
                'closeTime' => '21:00',
                'shortDescription' => 'Sang trọng, Nhà hàng - Quốc tế - Gia đình',
                'description' => 'Không gian hẹn hò lý tưởng cho các cặp đôi mọi người nhen. Quán có khá nhiều không gian ngồi cho mng lựa chọn từ sân vườn, trong nhà, ban công, khu bàn ăn như homestay, quán yên tĩnh lắm nha',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryID' => 1,
                'name' => 'El Gaucho Steakhouse - Xuân Diệu',
                'avartar' => 'foody-mobile-maison-1-mb-jpg-617-635857130884455566.jpg',
                'addressID' => 7,
                'addressDetail' => 'Lô G2 Tầng trệt, Tòa nhà Somerset West Point, 2 Tây Hồ',
                'phone' => '0984480116',
                'openTime' => '08:30',
                'closeTime' => '21:00',
                'shortDescription' => 'Sang trọng, Nhà hàng - Argentina',
                'description' => 'Vị trí quán đắc địa, nằm ở ngã ba xuân diệu yên phụ, view gần hồ tây, dễ tìm
                                  Quán bài trí theo kiểu tây, liên tưởng đến các nhà hàng châu mỹ. 
                                  Đặc biệt buổi tối thắp nến, ngồi ăn rất lãng mạn',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryID' => 1,
                'name' => 'Pane e Vino - Ẩm Thực Ý - Nguyễn Khắc Cần',
                'avartar' => 'foody-album8-jpg-571-636294066162913359.jpg',
                'addressID' => 8,
                'addressDetail' => '3 Nguyễn Khắc Cần, P. Tràng Tiền',
                'phone' => '0984480116',
                'openTime' => '08:30',
                'closeTime' => '21:00',
                'shortDescription' => 'Sang trọng, Nhà hàng - Ý - Cặp đôi, Gia đình',
                'description' => 'Nằm đối diện khách sạn L\opera.. khá khuất nhưng có khá lâu năm rồi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryID' => 1,
                'name' => 'Rico South American Steakhouse',
                'avartar' => 'foody-mobile-rico-jpg-419-636178309399268457.jpg',
                'addressID' => 9,
                'addressDetail' => '56 Trần Quốc Toản',
                'phone' => '0984480116',
                'openTime' => '08:30',
                'closeTime' => '21:00',
                'shortDescription' => 'Sang trọng, Nhà hàng - Món Việt - Gia đình, Nhóm hội',
                'description' => 'Quán bài trí theo phong cách Nam Mỹ rất lịch sự, ấm cúng.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryID' => 1,
                'name' => 'La Salsa - Món Âu - Xuân Diệu',
                'avartar' => 'foody-mobile-lasalsa-jpg-399-635768741864567006.jpg',
                'addressID' => 10,
                'addressDetail' => '53 Xuân Diệu',
                'phone' => '0984480116',
                'openTime' => '08:30',
                'closeTime' => '21:00',
                'shortDescription' => 'Sang trọng, Nhà hàng - Pháp, Tây Ban Nha - Cặp đôi, Gia đình',
                'description' => ' Không gian: nhà hàng gồm 2 khu: bánh ngọt ở bên ngoài và nhà hàng ăn ở bên trong. Cả 2 khu đều decor đẹp đơn giản. ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryID' => 1,
                'name' => 'Da Paolo Westlake - Món Ý',
                'avartar' => 'foody-mobile-paolo-jpg-187-635762636793592761.jpg',
                'addressID' => 11,
                'addressDetail' => '18 Ngõ 50/59/17 Đặng Thai Mai',
                'phone' => '0984480116',
                'openTime' => '08:30',
                'closeTime' => '21:00',
                'shortDescription' => 'Sang trọng, Nhà hàng - Ý - Gia đình, Nhóm hội',
                'description' => ' không gian đẹp. Nhân viên phục vụ nhiệt tình.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryID' => 1,
                'name' => 'Jacksons Steakhouse Hanoi',
                'avartar' => 'foody-mobile-18dorpx7-jpg-484-636118701698799751.jpg',
                'addressID' => 12,
                'addressDetail' => '23J Hai Bà Trưng',
                'phone' => '0984480116',
                'openTime' => '08:30',
                'closeTime' => '21:00',
                'shortDescription' => 'Sang trọng, Nhà hàng - Mỹ, Úc - Cặp đôi, Giới văn phòng',
                'description' => 'Quán đối diện tràng tiền plaza không gian tuy ko to lắm nhưng khá là đẹp và sang trọng. Giá cả ở mức trung bình.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryID' => 1,
                'name' => 'Maison Vie - Nhà Hàng Kiểu Pháp',
                'avartar' => 'foody-mobile-maison-jpg-586-636057258224334666.jpg',
                'addressID' => 13,
                'addressDetail' => '28 Tăng Bạt Hổ',
                'phone' => '0984480116',
                'openTime' => '08:30',
                'closeTime' => '21:00',
                'shortDescription' => 'Sang trọng, Nhà hàng - Pháp - Gia đình, Nhóm hội',
                'description' => 'Vị trí: rất dễ tìm khi từ Lò Đúc rẽ vào phố Tăng Bạt Hổ, con phố yên tĩnh và rộng rãi, nhà hàng nằm ngay mặt đường, vô cùng thuận tiện',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryID' => 1,
                'name' => 'Sunset Bar - InterContinental Hanoi Westlake',
                'avartar' => 'foody-mobile-sunset-bar-ha-noi-140513022951.jpg',
                'addressID' => 14,
                'addressDetail' => 'InterContinental Hanoi Westlake, 5 Từ Hoa',
                'phone' => '0984480116',
                'openTime' => '08:30',
                'closeTime' => '21:00',
                'shortDescription' => 'Sang trọng, Bar/Pub - Món Việt - Cặp đôi, Nhóm hội',
                'description' => ' View cực kì đẹp, rộng rãi thoáng mát và thấy bình thản trong tâm hồn. Ban đêm bar được trang hoàng đèn điện nhìn trông đẹp ngất ngây',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'categoryID' => 1,
                'name' => 'Oven Dor Buffet - Sheraton Hanoi Hotel',
                'avartar' => 'foody-oven-d-or-sheraton-ha-noi-635459467185389071.jpg',
                'addressID' => 15,
                'addressDetail' => 'Sheraton Hanoi Hotel, 11 Xuân Diệu',
                'phone' => '0984480116',
                'openTime' => '08:30',
                'closeTime' => '21:00',
                'shortDescription' => 'Sang trọng, Nhà hàng - Món Việt, Quốc tế - Gia đình, Nhóm hội',
                'description' => 'không gian khá là yên tĩnh, trang trí ở đây quá đẹp , đồ ăn ở đây rất chất lượng và rất ngon , có khá nhiều sự lựa chọn ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
        ]);
    }
}
