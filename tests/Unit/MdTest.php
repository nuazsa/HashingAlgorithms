<?php

function hashMd4($input) {
    return hash('md4', $input);
}

function verifyMd4($input, $hash) {
    return hashMd4($input) === $hash;
}

// Test
it('hashes and verifies using md4', function () {
    // Define
    $password = 'password123';
    $hash = hashMd4($password);

    // Display
    echo ("\nMd4 hash: " . $hash);
    
    // Execute 
    expect(verifyMd4($password, $hash))->toBeTrue();
    expect(verifyMd4('wrong-password', $hash))->toBeFalse();
});

// ------------------------------------------------------------------

function hashMd5($input)
{
    return hash('md5', $input);
}

function verifyMd5($input, $hash)
{
    return hashMd5($input) === $hash;
}

// Test
it('hashes and verifies using md5', function () {
    // Define
    $password = 'password123';
    $hash = hashMd5($password);

    // Display
    echo ("\nMd5 hash: " . $hash);

    // Execute 
    expect(verifyMd5($password, $hash))->toBeTrue();
    expect(verifyMd5('wrong-password', $hash))->toBeFalse();
});


