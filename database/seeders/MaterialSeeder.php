<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Material;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $material = new Material();
        $material->m_type = "ทอง";
        $material->m_weight = "14K";
        $material->color = "สีเหลือง";
        $material->total_amount = 1000;
        $material->save();

        $material = new Material();
        $material->m_type = "ทอง";
        $material->m_weight = "14K";
        $material->color = "สีโรสโกลด์";
        $material->total_amount = 1000;
        $material->save();

        $material = new Material();
        $material->m_type = "ทอง";
        $material->m_weight = "14K";
        $material->color = "สีขาว";
        $material->total_amount = 1000;
        $material->save();

        $material = new Material();
        $material->m_type = "ทอง";
        $material->m_weight = "18K";
        $material->color = "สีเหลือง";
        $material->total_amount = 1000;
        $material->save();

        $material = new Material();
        $material->m_type = "ทอง";
        $material->m_weight = "18K";
        $material->color = "สีโรสโกลด์";
        $material->total_amount = 1000;
        $material->save();

        $material = new Material();
        $material->m_type = "ทอง";
        $material->m_weight = "18K";
        $material->color = "สีขาว";
        $material->total_amount = 1000;
        $material->save();

        $material = new Material();
        $material->m_type = "เงิน";
        $material->m_weight = "-";
        $material->color = "-";
        $material->total_amount = 1000;
        $material->save();
    }
}
