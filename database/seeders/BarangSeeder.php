<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([[
            'kode_jenis_barang'=> '1',
            'nama_barang'=> 'Chitato',
            'deskripsi_detail'=> 'Chitato adalah makanan kecil favorit Anda di kala sedang santai, sebagai camilan untuk nonton film, atau ketika kumpul bersama dengan teman dan ngobrol sana sini. 
            Keripik kentang dengan tekstur yang renyah dan rasa yang gurih ini membuat hari-hari Anda jadi lebih seru, lebih menyenangkan, dan lebih semangat dalam menjalani aktivitas 
            dengan ditemani makanan kecil paling renyah dan membuat Anda merasa bisa melakukan apa saja. Keripik kentang Chitato dibuat dari kentang asli dengan 
            bentuk yang bergelombang untuk menambah keseruan acara ngemil Anda. ',
            'stok'=> '9',
            'foto'=> 'chitato.jpg',
            'harga'=> 'Rp.8.000'
        ],
        [
            'kode_jenis_barang'=> '2',
            'nama_barang'=> 'Pota bee',
            'deskripsi_detail'=> 'Potabee, makanan ringan keripik kentang yang terbuat dari kentang asli. Potabee dipotong secara tepat dengan teknologi yang dikenal 
            dengan nama V-cut, yang menciptakan lebih renyah dan terasa bumbunya. Potabee juga rempah-rempah yang menghasilkan membuat lezat.',
            'stok'=> '21',
            'foto'=> 'potabee.jpg',
            'harga'=> 'Rp.9.000'
        ],
        [
            'kode_jenis_barang'=> '3',
            'nama_barang'=> 'Lays',
            'deskripsi_detail'=> 'Lays merupakan produk brand yang menyediakan potato chips atau keripik kentang dengan beragam pilihan rasa. 
            Pilihan rasa yang tersedia seperti truffle, rumput laut, sour cream and union, classic, dan masih banyak lagi sehingga kamu dapat memilih 
            produk Lays yang sesuai dengan selera kamu. Snack Lays ini merupakan snack potato chips yang ringan dan juga enak.',
            'stok'=> '11',
            'foto'=> 'lays.jpg',
            'harga'=> 'Rp.9.000'
        ],
        [
            'kode_jenis_barang'=> '4',
            'nama_barang'=> 'Twistko',
            'deskripsi_detail'=> 'Twistko merupakan makanan ringan yang terbuat dari jagung dengan tekstur yang renyah dan gurih. Tidak akan ada yang bisa menggantikan momen-momen spesial dan 
            bahagia seperti ini dan akan semakin sempurna jika ada camilan lezat yang menemani.',
            'stok'=> '25',
            'foto'=> 'twistko.jpg',
            'harga'=> 'Rp.6.000'
        ],
    
    ]);
        
    }
}
