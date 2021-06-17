<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
        ];
    }


    public function configure()
    {
        return $this->afterMaking(function (Company $company) {

        })->afterCreating(function (Company $company) {
            Office::factory(random_int(1, 5))->create(['company_id' => $company->id]);
        });
    }
}
