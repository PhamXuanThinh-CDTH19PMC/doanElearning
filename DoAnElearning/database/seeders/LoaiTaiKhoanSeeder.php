<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LoaiTaiKhoan;

class LoaiTaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loaiTK= new LoaiTaiKhoan();
        $loaiTK->id=1;
        $loaiTK->ten_loai_tai_khoan='admin';
        $loaiTK->save();
        
        $loaiTK= new LoaiTaiKhoan();
        $loaiTK->id=2;
        $loaiTK->ten_loai_tai_khoan='giangvien';
        $loaiTK->save();
        
        $loaiTK= new LoaiTaiKhoan();
        $loaiTK->id=3;
        $loaiTK->ten_loai_tai_khoan='sinhvien';
        $loaiTK->save();
    }
}
