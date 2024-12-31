# PHP File Handling Error: Missing fopen() Failure Check
This example demonstrates a common error in PHP file handling: failing to check the return value of `fopen()`.  The `fopen()` function returns `FALSE` on failure, but the original code omits a check, resulting in potential unexpected behavior or crashes. The improved solution shows how to correctly handle the case where the file might not exist or is inaccessible.