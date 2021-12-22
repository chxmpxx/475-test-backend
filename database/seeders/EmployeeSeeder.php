<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new Employee();
        $employee->job = "ช่างฝัง";
        $employee->start_date = "2021-11-05";
        $employee->name = "จันทรชา ธรรมวงศ์";
        $employee->gender = "ชาย";
        $employee->age = 20;
        $employee->birth_date = "2001-11-01";
        $employee->tel = "0962635634";
        $employee->salary = 18000;
        $employee->address = "3/3 หมู่20 แขวงลาดยาว เขตจตุจักร";
        $employee->save();

        
        $employee = new Employee();
        $employee->job = "ช่างฝัง";
        $employee->start_date = "2021-11-05";
        $employee->name = "วีระศักดิ์ โอภาสพัฒน์";
        $employee->gender = "ชาย";
        $employee->age = 21;
        $employee->birth_date = "2000-07-05";
        $employee->tel = "0856357823";
        $employee->salary = 18000;
        $employee->address = "158/60 หมู่ 1 ถนนช่างอากาศอุทิศ แขวงสีกัน เขตดอนเมือง";
        $employee->save();

        $employee = new Employee();
        $employee->job = "ช่างขึ้นตัวเรือน";
        $employee->start_date = "2021-11-05";
        $employee->name = "อัณณ์ จันทรทรัพย์";
        $employee->gender = "หญิง";
        $employee->age = 23;
        $employee->birth_date = "1998-02-01";
        $employee->tel = "0854365477";
        $employee->salary = 20000;
        $employee->address = "26 หมู่ 34 แขวงบางซื่อ เขตบางซื่อ";
        $employee->save();

        $employee = new Employee();
        $employee->job = "ช่างขึ้นตัวเรือน";
        $employee->start_date = "2021-11-05";
        $employee->name = "ปรียาดา นวลจันทร์";
        $employee->gender = "หญิง";
        $employee->age = 21;
        $employee->birth_date = "2000-05-11";
        $employee->tel = "0865345167";
        $employee->salary = 20000;
        $employee->address = "242 หมู่ 8 แขวงอนุสาวรีย์ชัย เขตบางเขน";
        $employee->save();

        $employee = new Employee();
        $employee->job = "ช่างขึ้นตัวเรือน";
        $employee->start_date = "2021-11-05";
        $employee->name = "นวพร ธาราวงศ์";
        $employee->gender = "หญิง";
        $employee->age = 25;
        $employee->birth_date = "1996-09-12";
        $employee->tel = "0635467241";
        $employee->salary = 20000;
        $employee->address = "53/2 ตำบลเสาธงหิน อำเภอบางใหญ่ จังหวัดนนทบุรี";
        $employee->save();

        $employee = new Employee();
        $employee->job = "ช่างขัด";
        $employee->start_date = "2021-11-05";
        $employee->name = "ชลาธิป นันทพจน์";
        $employee->gender = "ชาย";
        $employee->age = 28;
        $employee->birth_date = "1993-12-06";
        $employee->tel = "0953452357";
        $employee->salary = 18000;
        $employee->address = "ถ.ติวานนท์ ต.ปากเกร็ด อ.ปากเกร็ด จ.นนทบุรี";
        $employee->save();

        $employee = new Employee();
        $employee->job = "ช่างขัด";
        $employee->start_date = "2021-11-05";
        $employee->name = "ญาดา เลิศคุณวงส์";
        $employee->gender = "หญิง";
        $employee->age = 25;
        $employee->birth_date = "1996-05-25";
        $employee->tel = "0985463153";
        $employee->salary = 16000;
        $employee->address = "282 ถ.นนทบุรี ต.ท่าทราย อ.เมือง จ.นนทบุรี";
        $employee->save();

        $employee = new Employee();
        $employee->job = "ช่างชุบ";
        $employee->start_date = "2021-11-05";
        $employee->name = "ธารา พงศ์พินิจ";
        $employee->gender = "ชาย";
        $employee->age = 23;
        $employee->birth_date = "1998-10-10";
        $employee->tel = "0945264653";
        $employee->salary = 16000;
        $employee->address = "12/7 หมู่ 4 ตำบลศาลากลาง อำเภอบางกรวย จังหวัดนนทบุรี";
        $employee->save();

        $employee = new Employee();
        $employee->job = "ช่างชุบ";
        $employee->start_date = "2021-11-05";
        $employee->name = "เอกภาพ สุรศักดิ์อุดม";
        $employee->gender = "ชาย";
        $employee->age = 32;
        $employee->birth_date = "1989-09-17";
        $employee->tel = "0845767824";
        $employee->salary = 16000;
        $employee->address = "88/7 ซอยบำราศนราดูร ถ.ติวานนท์ ต.ตลาดขวัญ อ.เมือง จ.นนทบุรี";
        $employee->save();

        $employee = new Employee();
        $employee->job = "ช่างฝัง";
        $employee->start_date = "2021-11-05";
        $employee->name = "พงศพัศ สำราญทรัพย์";
        $employee->gender = "ชาย";
        $employee->age = 30;
        $employee->birth_date = "1991-06-06";
        $employee->tel = "0831462378";
        $employee->salary = 16000;
        $employee->address = "88/8 อาคาร 10 ชั้น 1 กรมวิทยาศาสตร์การแพทย์ ถ.ติวานนท์ ต.ตลาดขวัญ อ.เมือง จ.นนทบุรี";
        $employee->save();

        
    }
}
