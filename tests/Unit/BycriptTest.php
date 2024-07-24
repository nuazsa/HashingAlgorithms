<?php

function hashBycript($input) {
    return password_hash($input, PASSWORD_BCRYPT);
}

function verifyBycript($input, $hash) {
    return password_verify($input, $hash);
}


// Test
it('hashes and verifies using bycript', function () {
    // Define
    $password = 'password123';
    $hash = hashBycript($password);

    // Display
    echo ("\nBycript hash: " . $hash);

    // Execute 
    expect(verifyBycript($password, $hash))->toBeTrue();
    expect(verifyBycript('wrong-password', $hash))->toBeFalse();
});
