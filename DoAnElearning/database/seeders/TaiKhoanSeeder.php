<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Hash;

class TaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $taiKhoan=new TaiKhoan();
        $taiKhoan->id=1;
       $taiKhoan->username='Admin';
       $taiKhoan->password=hash::make('123456a');
       $taiKhoan->ten_nguoi_dung='administrator';
       $taiKhoan->avatar='avt1';
       $taiKhoan->email='admin@example.com';
       $taiKhoan->loai_tai_khoan=1;
       $taiKhoan->save();
       
       $taiKhoan=new TaiKhoan();
        $taiKhoan->id=2;
       $taiKhoan->username='pxt277';
       $taiKhoan->password=hash::make('123333a');
       $taiKhoan->ten_nguoi_dung='Phạm Xuân Thịnh';
       $taiKhoan->avatar='avt2';
       $taiKhoan->email='0306191277@caothang.edu.vn';
       $taiKhoan->loai_tai_khoan=1;
       $taiKhoan->save();
       
       $taiKhoan=new TaiKhoan();
        $taiKhoan->id=3;
       $taiKhoan->username='lmc204';
       $taiKhoan->password=hash::make('123444a');
       $taiKhoan->ten_nguoi_dung='Lê Mảnh Cường';
       $taiKhoan->avatar='avt3';
       $taiKhoan->email='0306191204@caothang.edu.vn';
       $taiKhoan->loai_tai_khoan=2;
       $taiKhoan->save();

        $taiKhoan=new TaiKhoan();
         $taiKhoan->id=4;
       $taiKhoan->username='nvt284';
       $taiKhoan->password=hash::make('123455a');
       $taiKhoan->ten_nguoi_dung='Nguyễn Văn Toàn';
       $taiKhoan->avatar='avt4';
       $taiKhoan->email='0306191284@caothang.edu.vn';
       $taiKhoan->loai_tai_khoan=3;
       $taiKhoan->save();
    }
}
