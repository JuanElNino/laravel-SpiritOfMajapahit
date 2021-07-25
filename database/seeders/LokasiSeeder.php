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
                'maps_lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0606050682914!2d112.39621201450645!3d-7.5683719768495585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e786dbd3277dd1d%3A0xd1928cb171e27a41!2sCandi%20Bajang%20Ratu!5e0!3m2!1sen!2sid!4v1627126001652!5m2!1sen!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'jenis_lokasi' => "Wisata",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_lokasi' => "Candi Brahu",
                'desc_lokasi' => "Candi Brahu tercatat sebagai candi tertua yang ada di Mojokerto. Candi yang memiliki tinggi sekitar 27 meter ini diperkirakan sudah dibangun pada masa pemerintahan Raja Empu Sendok. Selama mengunjungi situs bersejarah tersebut, Anda bisa menemukan jejak dari dua kerajaan besar yang ada di Jawa yaitu Kahuripan dan Majapahit. Ketika menapakkan kaki di kawasan wisata, jangan heran jika menemukan sesajen menghiasi pintu candinya. Sesajen tersebut dengan sengaja diletakkan disana oleh masyarakat sekitar. Kehadiran beberapa sesajen yang menghiasi pintu candi, semakin memberikan kesan mistis dan menegangkan sejak memasuki kawasan wisatanya.",
                'ket_lokasi' => "Harga Tiket: Rp 3.000",
                'maps_lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.292864167742!2d112.37215721435405!3d-7.543006076554766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e786ce655555555%3A0xb1299504be8c8c76!2sCandi%20Brahu!5e0!3m2!1sen!2sid!4v1627110167970!5m2!1sen!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'jenis_lokasi' => "Wisata",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_lokasi' => "Museum Trowulan",
                'desc_lokasi' => "Museum Trowulan tampaknya wajib masuk ke dalam daftar wisata yang tidak boleh lupa dikunjungi ketika berlibur ke Mojokerto. Museum satu ini menyimpan berbagai prasasti bersejarah dari Kerajaan Majapahit. Setidaknya Anda bisa menyaksikan langsung koleksinya yang mencapai 80 ribu prasasti secara langsung di Museum Trowulan.",
                'ket_lokasi' => "Harga Tiket: Rp 5.000",
                'maps_lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18813.575142274134!2d112.39212917599815!3d-7.5676775493590815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e786ce190935909%3A0xb34204a2f98df670!2sMuseum%20Majapahit%20Trowulan!5e0!3m2!1sen!2sid!4v1627129775203!5m2!1sen!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'jenis_lokasi' => "Wisata",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_lokasi' => "Pacet Mini Park Mojokerto",
                'desc_lokasi' => "Menjadi sebuah taman rekreasi keluarga ini memberi sensasi liburan yang cukup seru. Anda juga bisa melihat pemandangan alam yang terasa asri dan sejuk. Tidak hanya berenang, Anda bisa melihat banyak wahana permainan seperti ATV, bumper boat hingga flying fox. Harga tiket yang dikenakan juga terjangkau. Pacet Mini Park ini berada di Jalan Raya Mojosari Pacet Km 55. Banyak wisatawan yang datang berkunjung bahkan berasal dari luar kota.",
                'ket_lokasi' => "Harga Tiket: Rp 10.000",
                'maps_lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.5499171391752!2d112.53049631450705!3d-7.623851077497142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7876c90716235d%3A0x8a6ace004cd2fd2a!2sPacet%20Mini%20Park!5e0!3m2!1sen!2sid!4v1627129827659!5m2!1sen!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'jenis_lokasi' => "Wisata",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
        ]);
    }
}
