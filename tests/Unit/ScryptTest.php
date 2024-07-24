<?php


function hashScrypt($input)
{
    $opslimit = 524288;  // Updated to meet minimum requirement
    $memlimit = 16777216;  // Updated to meet minimum requirement
    $hash = sodium_crypto_pwhash_scryptsalsa208sha256_str(
        $input,
        $opslimit,
        $memlimit
    );
    return $hash;
}

function verifyScrypt($input, $hash)
{
    return sodium_crypto_pwhash_scryptsalsa208sha256_str_verify($hash, $input);
}

// Test
it('hashes and verifies using scrypt', function () {
    // Define
    $password = 'password123';
    $hash = hashScrypt($password);

    // Display
    echo ("\nScrypt hash: " . $hash);

    // Execute 
    expect(verifyScrypt($password, $hash))->toBeTrue();
    expect(verifyScrypt('wrong-password', $hash))->toBeFalse();
});

// ------------------------------------------------------------------