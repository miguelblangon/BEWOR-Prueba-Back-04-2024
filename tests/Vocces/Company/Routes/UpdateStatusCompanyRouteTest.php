<?php

namespace Tests\Vocces\Company\Routes;

use App\Models\Company;
use Tests\TestCase;
use Vocces\Company\Application\CompanyCreator;
use Tests\Vocces\Company\Infrastructure\CompanyRepositoryFake;
use Illuminate\Support\Str;
class UpdateStatusCompanyRouteTest extends TestCase
{
    /**
     * @group route
     * @group access-interface
     * @test
     */
    public function updateStatusCompanyRoute()
    {
        /**
         * Preparing
         */
        $company= Company::first();
        /**
         * Actions
         */
        $response = $this->json('PATCH', '/api/company/'.$company->id);
        /**
         * Asserts
         */
           $response->assertStatus(201)
                      ->assertJsonFragment(['status'=>'active']);
    }
}
