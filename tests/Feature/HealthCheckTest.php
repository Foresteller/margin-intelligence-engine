<?php

it('return a successful for the homepage', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
});
