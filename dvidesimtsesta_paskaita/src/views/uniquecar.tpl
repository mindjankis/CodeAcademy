<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
</head>
<body>
<h1>Car Information</h1>

<div>
    <p><strong>RegistrationId:</strong> {$car->getRegistrationId()}</p>
    <p><strong>Manufacturer:</strong> {$car->getManufacturer()}</p>
    <p><strong>Model:</strong> {$car->getModel()}</p>
    <p><strong>Year:</strong> {$car->getYear()}</p>
</div>
</body>
</html>