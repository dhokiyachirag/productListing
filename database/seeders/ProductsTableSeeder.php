<?php
    namespace Database\Seeders;
    use Illuminate\Database\Seeder;
    use DateTime;
    use App\Models\Product;
    class ProductsTableSeeder extends Seeder
    {
        public function run()
        {
            $products = [
                [
                    'name' => "product 1",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 21,
                    'price' => 200.10,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 2",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 400,
                    'price' => 1600.21,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 3",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 37,
                    'price' => 378.00,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => 'product 4',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 10,
                    'price' => 21.10,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/enduro-boa-hydration-pack-AJQZ_JK3_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 5",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 21,
                    'price' => 200.10,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 6",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 400,
                    'price' => 1600.21,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 7",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 37,
                    'price' => 378.00,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 8",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 21,
                    'price' => 200.10,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 9",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 400,
                    'price' => 1600.21,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 10",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 37,
                    'price' => 378.00,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 11",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 21,
                    'price' => 200.10,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 12",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 400,
                    'price' => 1600.21,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 13",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 37,
                    'price' => 378.00,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 14",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 21,
                    'price' => 200.10,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 15",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 400,
                    'price' => 1600.21,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 16",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 37,
                    'price' => 378.00,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 17",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 21,
                    'price' => 200.10,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 18",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 400,
                    'price' => 1600.21,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 19",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 37,
                    'price' => 378.00,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 20",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 21,
                    'price' => 200.10,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 21",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 400,
                    'price' => 1600.21,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 22",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 37,
                    'price' => 378.00,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 23",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 21,
                    'price' => 200.10,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 24",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 400,
                    'price' => 1600.21,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "product 25",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 37,
                    'price' => 378.00,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
            ];

            if ($products) {
                foreach ($products as $product) {
                    Product::updateOrCreate($product);
                }
            }
           
        }
    }