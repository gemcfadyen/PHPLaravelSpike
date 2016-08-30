<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomePageTest extends TestCase {
    public function testHomePageShowsNames() {
        $this->visit('/')
             ->see('Georgina')
             ->see('Catherine');
    }
}
