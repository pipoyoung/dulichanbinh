<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(dktour::class);
    }

    

}

/**
* 
*/
class hdv extends Seeder
{
    
    public function run()
    {
        DB::table('huongdanvien')->insert([
            ['tenhdv'=>'Nguyen Thi Nhu Quynh', 'phai'=>'nu', 'diachi'=>'Dong thap', 'sdt'=>'0909287870', 'created_at'=> new DateTime()],
            ['tenhdv'=>'Nguyen Van An', 'phai'=>'nam', 'diachi'=>'Dong thap', 'sdt'=>'0909287872', 'created_at'=> new DateTime()],
            ['tenhdv'=>'Tran Van Teo', 'phai'=>'nam', 'diachi'=>'Dong thap', 'sdt'=>'0909287871', 'created_at'=> new DateTime()],
            ['tenhdv'=>'Pham Huong', 'phai'=>'nu', 'diachi'=>'Dong thap', 'sdt'=>'0909287875', 'created_at'=> new DateTime()],
            ['tenhdv'=>'Tang Thanh Ha', 'phai'=>'nu', 'diachi'=>'Dong thap', 'sdt'=>'0909287879', 'created_at'=> new DateTime()],

            ]);
    }
}

class tours extends Seeder
    {
    	public function run()
    	{
    		DB::table('tours')->insert([
    			['mahdv'=>'1','tentour'=>'Tour mo cua bat oc','gia'=>'259000','ngaybatdau'=>'2017-12-19','ngayketthuc'=>'1000-12-30','created_at'=> new DateTime()],
    			['mahdv'=>'2','tentour'=>'Tour Tham quan Bảo Tàng - Xem nhà xưa - Ngắm cổ vật','gia'=>'229000','ngaybatdau'=>'2017-12-19','ngayketthuc'=>'1000-12-30','created_at'=> new DateTime()],
    			['mahdv'=>'3','tentour'=>'Tour một ngày làm nông dân','gia'=>'299000','ngaybatdau'=>'2017-12-19','ngayketthuc'=>'1000-12-30','created_at'=> new DateTime()],
                ['mahdv'=>'4','tentour'=>'Tour vườn chôm chôm','gia'=>'269000','ngaybatdau'=>'2017-12-19','ngayketthuc'=>'1000-12-30','created_at'=> new DateTime()],
                ['mahdv'=>'5','tentour'=>'Tour Vườn vú sữa','gia'=>'269000','ngaybatdau'=>'2017-12-19','ngayketthuc'=>'1000-12-30','created_at'=> new DateTime()],
                ['mahdv'=>'1','tentour'=>'Tour Team Building','gia'=>'339000','ngaybatdau'=>'2017-12-19','ngayketthuc'=>'1000-12-30','created_at'=> new DateTime()],
    			]);
    	}
    }

class dktour extends Seeder
    {
    	public function run()
    	{
    		DB::table('dk_tour')->insert([
    			['makh'=>'1','matour'=>'6','soluong'=>'4','tongtien'=>'525235','created_at'=> new DateTime()],
    			['makh'=>'2','matour'=>'5','soluong'=>'2','tongtien'=>'235235','created_at'=> new DateTime()],
    			['makh'=>'3','matour'=>'4','soluong'=>'6','tongtien'=>'2352352','created_at'=> new DateTime()],
                ['makh'=>'4','matour'=>'3','soluong'=>'4','tongtien'=>'525235','created_at'=> new DateTime()],
                ['makh'=>'5','matour'=>'2','soluong'=>'2','tongtien'=>'235235','created_at'=> new DateTime()],
                ['makh'=>'6','matour'=>'1','soluong'=>'2','tongtien'=>'235235','created_at'=> new DateTime()],
    			]);
    	}
    }

    class user extends Seeder
    {
        public function run()
        {
            DB::table('users')->insert([
                ['tenkh'=>'asd','diachi'=>'asd','sdt'=>'0909345679','quyen'=>'1','email'=>'asd@gmail.com','password'=>bcrypt('12345'),'created_at'=> new DateTime()],
                ['tenkh'=>'abc','diachi'=>'asd','sdt'=>'0909345678','quyen'=>'2','email'=>'abc@gmail.com','password'=>bcrypt('12345'),'created_at'=> new DateTime()],
                ['tenkh'=>'bda','diachi'=>'asd','sdt'=>'0909345677','quyen'=>'1','email'=>'bda@gmail.com','password'=>bcrypt('12345'),'created_at'=> new DateTime()],
                ['tenkh'=>'asx','diachi'=>'asd','sdt'=>'0909345676','quyen'=>'2','email'=>'asx@gmail.com','password'=>bcrypt('12345'),'created_at'=> new DateTime()],
                ]);
        }
    }
