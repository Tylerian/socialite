<?php namespace Laravel\Socialite\Contracts;

interface Provider
{

    /**
     * Redirect the user to the authentication page for the provider.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirect();

    /**
     * Get the User instance for the authenticated user.
     *
     * @return \Laravel\Socialite\Contracts\User
     */
    public function user();
    
    /**
     * Get the User instance for the authenticated user
     * given an accessToken from the OAuth provider.
     *
     * @param accessToken The provider's access token
     *
     * @return \Laravel\Socialite\Contracts\User
     */
    public function userByToken();
}
