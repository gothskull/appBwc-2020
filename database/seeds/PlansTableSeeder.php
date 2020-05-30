<?php

use App\Plan;
use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::truncate();

        $plan           = new Plan;
        $plan->namePlan = "Básico 1GB";
        $plan->descPlan = "Loremipsum isa mett amec sit appele";
        $plan->estado   = 1;
        $plan->save();

        $plan           = new Plan;
        $plan->namePlan = "Medium 3GB";
        $plan->descPlan = "Loremipsum isa mett amec sit appele";
        $plan->estado   = 0;
        $plan->save();

        $plan           = new Plan;
        $plan->namePlan = "Corporativo 4GB";
        $plan->descPlan = "Loremipsum isa mett amec sit appele";
        $plan->estado   = 1;
        $plan->save();

        $plan           = new Plan;
        $plan->namePlan = "Avanzado 6GB";
        $plan->descPlan = "Loremipsum isa mett amec sit appele";
        $plan->estado   = 1;
        $plan->save();
    }
}
