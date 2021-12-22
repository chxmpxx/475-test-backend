<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->c_name = "ชิดชนก เจริญทิพย์";
        $customer->type = "ลูกค้าทั่วไป";
        $customer->c_phone = "0946726732";
        $customer->address = "57 แขวงคลองจั่น เขตบางกระปิ";
        $customer->save();

        
        $customer = new Customer();
        $customer->c_name = "เกริกวรรธน์ แสงสุวรรณ";
        $customer->type = "ลูกค้าทั่วไป";
        $customer->c_phone = "0632167853";
        $customer->address = "68/1003 หมู่16 แขวงกระทุ่มราย เขตหนองจอก ";
        $customer->save();
        
        $customer = new Customer();
        $customer->c_name = "กัญญลักษณ์ มากมี";
        $customer->type = "ลูกค้าทั่วไป";
        $customer->c_phone = "0874637184";
        $customer->address = "77/247 หมู่ 11 แขวงคันนายาว เขตคันนายาว ";
        $customer->save();
        
        $customer = new Customer();
        $customer->c_name = "บริบาล วงศ์พัฒนา";
        $customer->type = "ลูกค้าทั่วไป";
        $customer->c_phone = "0863481246";
        $customer->address = "10/82 หมู่ 11 แขวงบางแวก เขตภาษีเจริญ";
        $customer->save();

        $customer = new Customer();
        $customer->c_name = "ณภัทร อุดมเสก";
        $customer->type = "ลูกค้าทั่วไป";
        $customer->c_phone = "0974563685";
        $customer->address = "25/142 หมู่ 3 แขวงสะพานสูง เขตสะพานสูง";
        $customer->save();
        
        $customer = new Customer();
        $customer->c_name = "ชิดชน พงศ์พินิจ";
        $customer->type = "บริษัท";
        $customer->c_phone = "0626895467";
        $customer->address = "25/1 หมู่ 6 ตำบลหนองชิ่มอำเภอแหลมสิงห์ จันทรบุรี ";
        $customer->save();
        
        $customer = new Customer();
        $customer->c_name = "พงศ์ รัตนาประสิทธิ์";
        $customer->type = "บริษัท";
        $customer->c_phone = "0965436578";
        $customer->address = "88/143 หมู่ที่9 ตำบลสุรศักดิ์ อำเภอศรีราชา  ชลบุรี";
        $customer->save();
        
        $customer = new Customer();
        $customer->c_name = "ถวิต เรืองทิพย์";
        $customer->type = "บริษัท";
        $customer->c_phone = "0934655346";
        $customer->address = "387/69 หมู่ที่9 ถนนสุขุมวิท หนองปรือ บางละมุง  ชลบุรี";
        $customer->save();
        
        $customer = new Customer();
        $customer->c_name = "ลักษ์วิสา จุลพัฒน์";
        $customer->type = "บริษัท";
        $customer->c_phone = "0846742456";
        $customer->address = "436 ตำบลห้วยจรเข้ อำเภอเมือง นครปฐม";
        $customer->save();
        
        $customer = new Customer();
        $customer->c_name = "ณภัทร เรืองสมัย";
        $customer->type = "บริษัท";
        $customer->c_phone = "0632154467";
        $customer->address = "493/4หมู่4 ถนนพหลโยธิน62 ตำบลคูคต อำเภอลำลูกกา  ปทุมธานี";
        $customer->save();
        

        
    }
}

