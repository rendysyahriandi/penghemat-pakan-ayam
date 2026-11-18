<?php

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('Dashboard');
    $response->assertSee('Jumlah Ayam');
    $response->assertSee('Stok Pakan');
    $response->assertSee('Pemakaian Harian');
    $response->assertSee('Grafik Konsumsi Pakan');
    $response->assertSee('Penghematan Pakan');
});
