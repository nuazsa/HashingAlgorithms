const argon2 = require('argon2');

const hashes = async () => {
  try {
    return await argon2.hash("password");
  } catch (err) {
    console.error("Hashing error:", err);
  }
};

const verify = async () => {
  try {
    const hash = await hashes();
    const isMatch = await argon2.verify(hash, "password");

    if (isMatch) {
      console.log('success');
    } else {
      console.log('failed');
    }
  } catch (err) {
    console.error("Verification error:", err);
  }
};

verify();                         