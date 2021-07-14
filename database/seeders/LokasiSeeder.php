<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lokasi')->insert([
            [
                'nama_lokasi' => "Candi Bajang Ratu",
                'desc_lokasi' => "Ketika melihatnya sekilas, kemungkinan wisatawan tidak akan menyangka bahwa bangunan yang berada di depan matanya adalah salah satu situs bersejarah bernama Candi Bajang Ratu. Hal ini dikarenakan bentuknya yang tidak menyerupai candi pada umumnya. Dibandingkan dengan bentuk candi, situs bersejarah ini memiliki bentuk bangunan lebih mirip dengan gapura.\n\nPembangunannya sendiri memiliki tujuan sebagai tempat penghormatan Prabu Jayanegara. Penjelasan terkait tujuan pembangunannya sendiri dapat ditemukan pada bagian kaki gapura relief Sri Tanjung. Di tempat itu pula, Anda bisa melihat gapura dengan atap cukup besar yang terbuat dari batu bata merah. Gaya arsitekturnya yang unik berhasil menjadi daya tarik utamanya.",
                'ket_lokasi' => "Harga Tiket: Rp 3.000",
                'maps_lokasi' => "https://goo.gl/maps/ZUkBLsmUsqC1rvGg6",
                'jenis_lokasi' => "Wisata",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_lokasi' => "Candi Brahu",
                'desc_lokasi' => "Candi Brahu tercatat sebagai candi tertua yang ada di Mojokerto. Candi yang memiliki tinggi sekitar 27 meter ini diperkirakan sudah dibangun pada masa pemerintahan Raja Empu Sendok. Selama mengunjungi situs bersejarah tersebut, Anda bisa menemukan jejak dari dua kerajaan besar yang ada di Jawa yaitu Kahuripan dan Majapahit. Ketika menapakkan kaki di kawasan wisata, jangan heran jika menemukan sesajen menghiasi pintu candinya. Sesajen tersebut dengan sengaja diletakkan disana oleh masyarakat sekitar. Kehadiran beberapa sesajen yang menghiasi pintu candi, semakin memberikan kesan mistis dan menegangkan sejak memasuki kawasan wisatanya.",
                'ket_lokasi' => "Harga Tiket: Rp 3.000",
                'maps_lokasi' => "https://goo.gl/maps/nuECH2sZ92mHcekc8",
                'jenis_lokasi' => "Wisata",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_lokasi' => "Museum Trowulan",
                'desc_lokasi' => "Museum Trowulan tampaknya wajib masuk ke dalam daftar wisata yang tidak boleh lupa dikunjungi ketika berlibur ke Mojokerto. Museum satu ini menyimpan berbagai prasasti bersejarah dari Kerajaan Majapahit. Setidaknya Anda bisa menyaksikan langsung koleksinya yang mencapai 80 ribu prasasti secara langsung di Museum Trowulan.",
                'ket_lokasi' => "Harga Tiket: Rp 5.000",
                'maps_lokasi' => "https://goo.gl/maps/eukm2z8bWfgseuLX7",
                'jenis_lokasi' => "Wisata",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_lokasi' => "Pacet Mini Park Mojokerto",
                'desc_lokasi' => "Menjadi sebuah taman rekreasi keluarga ini memberi sensasi liburan yang cukup seru. Anda juga bisa melihat pemandangan alam yang terasa asri dan sejuk. Tidak hanya berenang, Anda bisa melihat banyak wahana permainan seperti ATV, bumper boat hingga flying fox. Harga tiket yang dikenakan juga terjangkau. Pacet Mini Park ini berada di Jalan Raya Mojosari Pacet Km 55. Banyak wisatawan yang datang berkunjung bahkan berasal dari luar kota.",
                'ket_lokasi' => "Harga Tiket: Rp 10.000",
                'maps_lokasi' => "https://goo.gl/maps/hV2NSMYxsVXzV7Ku5",
                'jenis_lokasi' => "Wisata",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
        ]);
    }
}
