# How to reproduce

Checkout the code and run the test suite using `vendor/bin/phpunit`

Due to the side effect described in the issue `Cidr::$netmaskMax` is dynamically changed to `32` when applying the validation constraint on the first array item (the IPv4 address).
The validation of the second item, the IPv6 address, is destined to fail since the netmask is larger than 32. There's no way to compare the netmask to the original upper bound since it's been lost.
