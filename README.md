# Hashing Algorithms Documentation
Hashing algorithms are mathematical functions that convert input data of any size into a fixed-size string of characters, typically a hash code. These algorithms are fundamental in various fields of computer science, especially in data security, data integrity, and efficient data retrieval. Here’s a breakdown of what hashing algorithms are and their key aspects:
# Bycript (Blowfish Crypt)
- Bcrypt is a hash algorithm designed by Niels Provos and David Mazières in 1999. This algorithm was designed specifically for hashing passwords and uses an adaptive hash function that slows down the hashing process as hardware speed increases, making it more resistant to brute force attacks.
```
Input: password123
Hash: $2y$10$e0NR8RZ0...
```
# Md (Message-Digest)
- MD5 is a cryptographic hash algorithm designed by Ronald Rivest in 1991 as a successor to the previous hash algorithm, MD4. MD5 is used to generate a 128-bit hash of input data and is often used to verify file integrity and for password hash storage.
```
Input: password123
Hash: 482c811da5d5b4bc6d497ffa98491e38
```
# Scrypt
- Scrypt is a hash algorithm designed by Colin Percival in 2009 for the Tarsnap online backup system. This algorithm is designed to be more resistant to brute force attacks by using memory-hard functions that require significant memory usage.
```
Input: password123
Hash: $7$C6..../....
```
# Sha (Secure Hash Algorithm)
- SHA was designed as a family of cryptographic hash functions for a variety of applications, including digital certificates, digital signatures, and password hashing. SHA-1 is considered insecure due to collision vulnerabilities, while SHA-2 and SHA-3 are currently considered secure.
```
> sha256
Input: password123
Hash: ef92b778bafee9e29a6e0eb2d6ab9800f85a8d6f2ff4f1b4e27c2ea57b6bfc1e
  ```
