<?php

  use App\User;

  class AuthTest extends TestCase {

    public function testUnauthorisedUserIsRedirectedWhenHittingSecureEndpoint() {
      $this->get('/api/user')->seeStatusCode(302);
    }

    public function testAuthorisedUserCanAccessProtectedEndpoint() {
      $user = factory(App\User::class)->create();

      $this->actingAs($user)
           ->visit('/api/user')
           ->seeStatusCode(200);
    }

    public function testDetailsOfUserAreVisibleWhenAuthenticationMiddlewareIsOff() {
      $this->withoutMiddleware();
      $user = factory(App\User::class)->create();
      $user->name = 'Fred';
      $user->email = 'fred@email.com';

      $this->actingAs($user)
            ->visit('/api/user')
            ->seeJsonContains(['name' => 'Fred', 'email' => 'fred@email.com']);
    }


    public function testDetailsOfUserAreVisibleWhenUserIsAuthenticated() {
      $user = factory(App\User::class)->create();
      $user->name = 'Fred';
      $user->email = 'fred@email.com';
      $this->actingAs($user, 'api')
      ->visit('/api/user')->seeJsonContains(['name' => 'Fred']);
    }
  }
