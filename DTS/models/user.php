<?php

class User {
    public function getAllUsers() {
        // Logika untuk mengambil semua pengguna dari database
        return[
            ['id' => 1, 'name' => 'dina'],
            ['id' => 2, 'name' => 'dino'],
            ['id' => 3, 'name' => 'dini']
        ];
    }
}
?>