# hosting.de PHP API Client

This is a PHP client library for the hosting.de API.

Usage:

```
namespace Hostingde\API;
require_once("require.php");

$api = new DomainApi('ApiKey');

// http.net customers need to switch location
// $api->resetLocation("https://partner.http.net/api/domain/v1/json");
```

At the moment we just implemented Domain functions. Please see example.php for code examples.
 
