<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'father_name' => $this->faker->firstNameMale,
            'national_code' => $this->faker->unique()->numerify('##########'),
            'birth_code' => $this->faker->unique()->numerify('##########'),
            'birth_place' => $this->faker->city,
            'birth_day' => $this->faker->dateTimeBetween('-30 years', 'now'),
            'status' => $this->faker->randomElement([0, 1]),
            'status_detail' => $this->faker->sentence,
            'name_identifier' => $this->faker->word,
            'mobile_identifier' => $this->faker->word,
            'mother_lang' => $this->faker->word,
            'marital' => $this->faker->randomElement([0, 1]),
            'activation' => $this->faker->randomElement([0, 1]),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'), 
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ];
    }

    /**
     * Define the relationship with Contact.
     *
     * @param array<string, mixed> $data
     * @return \Database\Factories\CustomerFactory
     */
    public function withContact(array $data = []): CustomerFactory
    {
        return $this->afterCreating(function (Customer $customer) use ($data) {
            $customer->contact()->create([
                'phone' => $data['phone'] ?? $this->faker->phoneNumber,
                'mobile1' => $data['mobile1'] ?? $this->faker->phoneNumber,
                'mobile2' => $data['mobile2'] ?? $this->faker->phoneNumber,
            ]);
        });
    }

    /**
     * Define the relationship with Loc.
     *
     * @param array<string, mixed> $data
     * @return \Database\Factories\CustomerFactory
     */
    public function withLoc(array $data = []): CustomerFactory
    {
        return $this->afterCreating(function (Customer $customer) use ($data) {
            $customer->loc()->create([
                'body' => $data['body'] ?? $this->faker->text,
                'postal_code' => $data['postal_code'] ?? $this->faker->postcode,
            ]);
        });
    }

    /**
     * Define the relationship with Insurance.
     *
     * @param array<string, mixed> $data
     * @return \Database\Factories\CustomerFactory
     */
    public function withInsurance(array $data = []): CustomerFactory
    {
        return $this->afterCreating(function (Customer $customer) use ($data) {
            $customer->insurance()->create([
                'job_place' => $data['job_place'] ?? $this->faker->company,
                'number_insurance' => $data['number_insurance'] ?? $this->faker->numerify('##########'),
                'access' => $data['access'] ?? $this->faker->word,
                'weight' => $data['weight'] ?? $this->faker->numberBetween(50, 150),
                'height' => $data['height'] ?? $this->faker->numberBetween(150, 200),
            ]);
        });
    }

    /**
     * Define the relationship with Education.
     *
     * @param array<string, mixed> $data
     * @return \Database\Factories\CustomerFactory
     */
    public function withEducation(array $data = []): CustomerFactory
    {
        return $this->afterCreating(function (Customer $customer) use ($data) {
            $customer->education()->create([
                'field' => $data['field'] ?? $this->faker->word,
            ]);
        });
    }

    /**
     * Define the relationship with Employ.
     *
     * @param array<string, mixed> $data
     * @return \Database\Factories\CustomerFactory
     */
    public function withEmploy(array $data = []): CustomerFactory
    {
        return $this->afterCreating(function (Customer $customer) use ($data) {
            $customer->employ()->create([
                'job' => $data['job'] ?? $this->faker->jobTitle,
            ]);
        });
    }

    /**
     * Define the relationship with Physical.
     *
     * @param array<string, mixed> $data
     * @return \Database\Factories\CustomerFactory
     */
    public function withPhysical(array $data = []): CustomerFactory
    {
        return $this->afterCreating(function (Customer $customer) use ($data) {
            $customer->physical()->create([
                'disease_detail' => $data['disease_detail'] ?? $this->faker->sentence,
                'first_disease_detail' => $data['first_disease_detail'] ?? $this->faker->sentence,
                'drug_detail' => $data['drug_detail'] ?? $this->faker->sentence,
                'hospital_detail' => $data['hospital_detail'] ?? $this->faker->sentence,
                'surgery_detail' => $data['surgery_detail'] ?? $this->faker->sentence,
                'specific_drug_detail' => $data['specific_drug_detail'] ?? $this->faker->sentence,
                'smok_detail' => $data['smok_detail'] ?? $this->faker->word,
                'smok_past_detail' => $data['smok_past_detail'] ?? $this->faker->sentence,
                'sport_detail' => $data['sport_detail'] ?? $this->faker->sentence,
                'work_detail' => $data['work_detail'] ?? $this->faker->sentence,
                'Commission_detail' => $data['Commission_detail'] ?? $this->faker->sentence,
            ]);
        });
    }
}
