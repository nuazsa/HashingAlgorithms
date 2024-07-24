<?php
function hashSha1($input)
{
    return hash('sha1', $input);
}

function verifySha1($input, $hash)
{
    return hashSha1($input) === $hash;
}

// Test
it('hashes and verifies using sha1', function () {
    // Define
    $password = 'password123';
    $hash = hashSha1($password);

    // Display
    echo ("\nSha1 hash: " . $hash);

    // Execute 
    expect(verifySha1($password, $hash))->toBeTrue();
    expect(verifySha1('wrong-password', $hash))->toBeFalse();
});

// ------------------------------------------------------------------

function hashSha256($input) {
    return hash('sha256', $input); 
}

function verifySha256($input, $hash) {
    return hashSha256($input) === $hash;
}

// Test
it('hashes and verifies using sha256', function () {
    // Define
    $password = 'password123';
    $hash = hashSha256($password);

    // Display
    echo ("\nSha256 hash: " . $hash);

    // Execute 
    expect(verifySha256($password, $hash))->toBeTrue();
    expect(verifySha256('wrong-password', $hash))->toBeFalse();
});

// ------------------------------------------------------------------

function hashSha512($input)
{
    return hash('sha512', $input);
}

function verifySha512($input, $hash)
{
    return hashSha512($input) === $hash;
}

// Test
it('hashes and verifies using sha512', function () {
    // Define
    $password = 'password123';
    $hash = hashSha512($password);

    // Display
    echo ("\nSha512 hash: " . $hash);

    // Execute 
    expect(verifySha512($password, $hash))->toBeTrue();
    expect(verifySha512('wrong-password', $hash))->toBeFalse();
});

