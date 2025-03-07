const bcrypt = require('bcrypt');

const hashes = async () => {
  try {
    return await bcrypt.hash('password', 10);
  } catch (err) {
    console.error("Hashing error:", err);
  }
};

const verify = async () => {
  try {
    const hash = await hashes();
    const isMatch = bcrypt.compare('password', hash);

    if (isMatch) {
      console.log('success');
    } else {
      console.log('failed');
    }
  } catch (err) {
    console.error("Verification error:", err);
  }
};

verify()