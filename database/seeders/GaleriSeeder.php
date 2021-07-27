<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeri')->insert([
            [
                'nama_galeri' => "http://blog.darmawisataindonesia.co.id/wp-content/uploads/2018/09/candi-bajang-ratu-1024x747.jpg",
                'id_lokasi' => 1,
                'is_show' => "yes",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_galeri' => "https://4.bp.blogspot.com/-tqoz78jbdjQ/WQxOmNPxeZI/AAAAAAAADIk/LX9X4wPQwpUCd9_UZT8jY5vLWlu3r7X1gCLcB/s1600/Candi%2BBajang%2BRatu.jpg",
                'id_lokasi' => 1,
                'is_show' => "no",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_galeri' => "https://ksmtour.com/media/images/articles26/candi-bajang-ratu-mojokerto-jawa-timur.jpg",
                'id_lokasi' => 1,
                'is_show' => "no",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_galeri' => "https://2.bp.blogspot.com/-AV1k6GAcRkA/WBLecGY2BJI/AAAAAAAAAN4/qPJ2YQgcV6cOXVM3QUJUM_8xzVElInU7gCLcB/s1600/IMG_20160728_123329.jpg",
                'id_lokasi' => 2,
                'is_show' => "yes",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_galeri' => "https://ksmtour.com/media/images/articles26/candi-brahu-mojokerto-jawa-timur.jpg",
                'id_lokasi' => 2,
                'is_show' => "no",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_galeri' => "https://2.bp.blogspot.com/-PtqVQ0yiaAk/TbpC_CN6gRI/AAAAAAAAAEA/dOpmhedjpBw/s1600/candi+brahu+by+tasyaa.JPG",
                'id_lokasi' => 2,
                'is_show' => "no",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_galeri' => "https://1.bp.blogspot.com/-A6HUAUV8znQ/VqsOBTUi0xI/AAAAAAAABdo/X3TOdD0kP7o/s1600/20160116_144406.jpg",
                'id_lokasi' => 3,
                'is_show' => "yes",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_galeri' => "https://asset.kompas.com/data/photo/2016/07/11/1427217IMG-20160628-WA0005780x390.jpg",
                'id_lokasi' => 3,
                'is_show' => "no",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_galeri' => "http://picture.triptrus.com/image/2014/06/museum-trowulan-2.jpeg",
                'id_lokasi' => 3,
                'is_show' => "no",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_galeri' => "https://3.bp.blogspot.com/-nlQ6XR3tqGY/XCpa8NGYS2I/AAAAAAABNNw/tMTvBV3YgTQQ_jEvYBZgJQn-NAylJ3Y2gCKgBGAs/s1600/_20190101_010508.JPG",
                'id_lokasi' => 4,
                'is_show' => "yes",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_galeri' => "https://3.bp.blogspot.com/-1g9yp3ntE88/XCpbVGhxgBI/AAAAAAABNN8/L3L31fD_xxgoTmLiFSzZ02bV8C8-5AkZwCKgBGAs/s1600/_20190101_010519.JPG",
                'id_lokasi' => 4,
                'is_show' => "no",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama_galeri' => "https://2.bp.blogspot.com/-m7pxYHdpTmo/XCpbhyW8QTI/AAAAAAABNOE/Hik0qRhf1oUWJbfnq1R9aNMLmuiYM0duACKgBGAs/s1600/DSC05554.JPG",
                'id_lokasi' => 4,
                'is_show' => "no",
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
        ]);
    }
}
