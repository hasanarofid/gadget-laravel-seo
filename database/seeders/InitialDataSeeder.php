<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Menu;
use App\Models\Artikel;
use App\Models\SubMenu;

class InitialDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Kategori
        $kategori = [
            'Mac',
            'iPhone',
            'iPad',
            'Watch',
            'TV',
            'Music',
            'Accessories',
        ];

        foreach ($kategori as $k) {
            Kategori::create(['nama' => $k]);
        }

        // Produk
        $produk = [
            ['nama' => 'MacBook Air', 'kategori_id' => 1],
            ['nama' => 'MacBook Pro', 'kategori_id' => 1],
            ['nama' => 'iPhone 14', 'kategori_id' => 2],
            ['nama' => 'iPhone 14 Pro', 'kategori_id' => 2],
            ['nama' => 'iPad Pro', 'kategori_id' => 3],
            ['nama' => 'iPad Air', 'kategori_id' => 3],
            ['nama' => 'Apple Watch Series 7', 'kategori_id' => 4],
            ['nama' => 'Apple Watch SE', 'kategori_id' => 4],
            ['nama' => 'Apple TV 4K', 'kategori_id' => 5],
            ['nama' => 'Apple Music', 'kategori_id' => 6],
            ['nama' => 'AirPods', 'kategori_id' => 7],
            ['nama' => 'MagSafe Charger', 'kategori_id' => 7],
        ];

        foreach ($produk as $p) {
            Produk::create($p);
        }

        // Menu
        $menus = [
            'Store',
            'Mac',
            'iPad',
            'iPhone',
            'Watch',
            'AirPods',
            'TV & Home',
            'Only on Apple',
            'Accessories',
            'Support',
        ];

        foreach ($menus as $m) {
            Menu::create(['nama' => $m]);
        }

        // Artikel
        $artikel = [
            ['judul' => 'New MacBook Air with M2 Chip', 'konten' => 'The new MacBook Air with M2 chip is here.', 'menu_id' => 2],
            ['judul' => 'Introducing iPhone 14', 'konten' => 'iPhone 14 is packed with new features.', 'menu_id' => 4],
            ['judul' => 'Apple Watch Series 7 Features', 'konten' => 'Discover the new features of Apple Watch Series 7.', 'menu_id' => 5],
            ['judul' => 'Apple TV 4K: The Ultimate TV Experience', 'konten' => 'Enjoy stunning visuals and audio with Apple TV 4K.', 'menu_id' => 7],
            ['judul' => 'AirPods Pro with Spatial Audio', 'konten' => 'Experience immersive sound with AirPods Pro.', 'menu_id' => 6],
        ];

        foreach ($artikel as $a) {
            Artikel::create($a);
        }

        // Sub Menu
        $subMenus = [
            ['menu_id' => 2, 'kategori_title' => 'MacBook', 'sub' => 'MacBook Air', 'artikel_id' => 1],
            ['menu_id' => 4, 'kategori_title' => 'iPhone', 'sub' => 'iPhone 14', 'artikel_id' => 2],
            ['menu_id' => 5, 'kategori_title' => 'Watch', 'sub' => 'Apple Watch Series 7', 'artikel_id' => 3],
            ['menu_id' => 7, 'kategori_title' => 'TV', 'sub' => 'Apple TV 4K', 'artikel_id' => 4],
            ['menu_id' => 6, 'kategori_title' => 'AirPods', 'sub' => 'AirPods Pro', 'artikel_id' => 5],
        ];

        foreach ($subMenus as $sm) {
            SubMenu::create($sm);
        }
    }
}
