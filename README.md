# Componenta Auth Session CSRF

CSRF protection bound to a Componenta `AuthSession`.

The synchronizer token is a domain-separated HMAC over the stable public
session UUID and the current credential generation. No CSRF secret is stored
in the session row, and rotating the session credential invalidates the
previous CSRF token automatically.
