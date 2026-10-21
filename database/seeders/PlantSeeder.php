<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlantSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('plants')->insert([
            [
                'name' => 'Monstera Deliciosa',
                'species' => 'Monstera deliciosa',
                'price' => 150000,
                'description' => 'Tanaman tropis dengan daun besar dan berlubang yang cocok untuk dekorasi ruangan.',
                'image' => 'monstera.jpg',
                'sunlight_requirements' => 'Cahaya tidak langsung',
            ],
            [
                'name' => 'Lidah Mertua',
                'species' => 'Dracaena trifasciata',
                'price' => 75000,
                'description' => 'Tanaman hias yang mudah dirawat dan memiliki daun tegak memanjang.',
                'image' => 'lidah-mertua.jpg',
                'sunlight_requirements' => 'Cahaya rendah hingga terang tidak langsung',
            ],
            [
                'name' => 'Peace Lily',
                'species' => 'Spathiphyllum',
                'price' => 95000,
                'description' => 'Tanaman berdaun hijau dengan bunga putih yang elegan.',
                'image' => 'peace-lily.jpg',
                'sunlight_requirements' => 'Cahaya tidak langsung',
            ],
            [
                'name' => 'Calathea Orbifolia',
                'species' => 'Goeppertia orbifolia',
                'price' => 125000,
                'description' => 'Tanaman tropis dengan pola garis indah pada daun bundarnya.',
                'image' => 'calathea.jpg',
                'sunlight_requirements' => 'Cahaya tidak langsung',
            ],
            [
                'name' => 'Sirih Gading',
                'species' => 'Epipremnum aureum',
                'price' => 45000,
                'description' => 'Tanaman merambat yang cantik untuk rak dan dekorasi rumah.',
                'image' => 'sirih-gading.jpg',
                'sunlight_requirements' => 'Cahaya rendah hingga sedang',
            ],
            [
                'name' => 'Aglonema',
                'species' => 'Aglaonema commutatum',
                'price' => 85000,
                'description' => 'Tanaman hias dengan kombinasi warna daun yang menarik.',
                'image' => 'aglonema.jpg',
                'sunlight_requirements' => 'Cahaya tidak langsung',
            ],
            [
                'name' => 'Kaktus Mini',
                'species' => 'Cactaceae',
                'price' => 30000,
                'description' => 'Tanaman mungil yang cocok untuk meja belajar atau meja kerja.',
                'image' => 'kaktus.jpg',
                'sunlight_requirements' => 'Cahaya terang',
            ],
            [
                'name' => 'Philodendron',
                'species' => 'Philodendron hederaceum',
                'price' => 110000,
                'description' => 'Tanaman tropis dengan daun hijau yang cocok untuk dekorasi interior.',
                'image' => 'philodendron.jpg',
                'sunlight_requirements' => 'Cahaya tidak langsung',
            ],
            [
                'name' => 'Pilea Peperomioides',
                'species' => 'Pilea peperomioides',
                'price' => 90000,
                'description' => 'Tanaman dengan daun bundar unik yang populer untuk dekorasi minimalis.',
                'image' => 'pilea.jpg',
                'sunlight_requirements' => 'Cahaya terang tidak langsung',
            ],
            [
                'name' => 'Begonia Maculata',
                'species' => 'Begonia maculata',
                'price' => 135000,
                'description' => 'Tanaman hias dengan daun hijau berbintik putih dan bagian bawah daun berwarna merah, cocok untuk mempercantik ruangan.',
                'image' => 'begonia-maculata.jpg',
                'sunlight_requirements' => 'Cahaya terang tidak langsung',
            ],
        ]);
    }
}
                          