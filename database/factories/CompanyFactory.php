<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $states = ["Alaska", "Alabama", "Arkansas", "American Samoa", "Arizona", "California", "Colorado", "Connecticut", "District of Columbia", "Delaware", "Florida", "Georgia", "Guam", "Hawaii", "Iowa", "Idaho", "Illinois", "Indiana", "Kansas", "Kentucky", "Louisiana", "Massachusetts", "Maryland", "Maine", "Michigan", "Minnesota", "Missouri", "Mississippi", "Montana", "North Carolina", "North Dakota", "Nebraska", "New Hampshire", "New Jersey", "New Mexico", "Nevada", "New York", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Puerto Rico", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Virginia", "Virgin Islands", "Vermont", "Washington", "Wisconsin", "West Virginia", "Wyoming"];

        return [
            'company_name' => $this->faker->name(),
            'company_phone1' => $this->faker->phoneNumber(),
            'company_phone2' => $this->faker->phoneNumber(),
            'company_fax' => $this->faker->phoneNumber(),
            'company_address1' => $this->faker->address(),
            'company_address2' => 'apt abc.',
            'company_city' => $this->faker->city(),
            'company_state' => $this->faker->randomElement($states),
            'company_zip' => $this->faker->postcode(),
            'company_primary_url' => $this->faker->url(),
            'company_owner' => 1,
            'company_description' => $this->faker->sentence(),
            'company_type' => 1,
            'company_email' => $this->faker->email(),
            'company_custom' => ''
        ];
    }
}
