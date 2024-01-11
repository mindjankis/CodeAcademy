1.1
Projektą pradedame tuščio katalogo

Sukurkite įvadinį failą index.php

Sukurkite direktorijas:
- src/Framework/ - čia talpinsime karkaso klases
- src/Controllers/ - čia talpinsime savo programos kontrolerius
- src/Repositories/ - duomenų bazės sąsaja su įvairiais modeliais
- src/Models/ - modelio klasės. Klasės viduje laikomi tik individualaus daikto parametrai
- views/ - bus talpinami PHP failai, kurie generuoja HTML kodą
  Sukurkite klases:
- MyProject\Framework\Router
- MyProject\Controllers\CarController
- MyProject\Repositories\CarRepository
- MyProject\Models\Car

Sugeneruokite composer.json, panaudokite autoloader'į.
Sukonfigūruokite composer, kad nukreiptų MyProject namespace į src/ folderį (psr-4)

Panaudokite atnaujintą Dependency Injection konteinerį https://raw.githubusercontent.com/marius321967/vigi-24-oop/main/l10/2_smarter_container.php
Kad būtų aiškiau, klasę pervadinkite Container -> DIContainer

1.2
Realizuojame Router klasę.
Pridėkite metodą:
process() - nuskaito užklausos URL, metodą (GET/POST/etc.) ir siunčiamus duomenis (pradžioje įgyvendinsime tik GET užklausas be duomenų).
Toliau pagal adresą ir metodą nusprendžia kurį kontrolerį naudoti ir iškviečia kontrolerio atitinkamą metodą.

Router klasė per konstruktorių reikalauja DIContainer objekto
Kontroleris turi būti kuriamas ne savarankiškai su 'new' raktažodžiu, o gaunamas iš DIContainer

1.3
Papildoma Car klasė
Pridėkite privačius parametrus:
registrationId (string)
manufacturer (string)
model (string)
year (int)

Kadangi parametrai privatūs, duomenims perduoti į išorę aprašykite getter metodus (getRegistrationId, getManufacturer, t.t.)

1.4
Realizuojame pirmąjį kontrolerį
Kontroleris apdoros modelį Car

Sukurkite metodą:
list() - grąžina visus automobilius iš repozitorijos
details() - repozitorijai perduoda paieškos pagal registrationId veiksmą

Abu metodai modelio duomenis išsaugo kintamąjame, tuomet su 'require' raktažodžiu iškviečia atitinkamą views/ failą.
view faile kintamasis bus prieinamas tuo pačiu pavadinimu

1.5
Aprašome repozitoriją CarRepository
Kadangi tai netikra klasė (neturime iš kur nuskaityti duomenų), tai metodai grąžina
objektus Car su jūsų sugalvotais duomenimis.

Metodai:
getByRegistrationId() - grąžina automobilį pagal registrationId
getAll() - grąžina visus automobilius

1.5
Sukuriame savo vaizdavimo failus:
views/car/details - HTML kode atvaizduoja individualaus automobilio parametrus
views/car/list - HTML lentelėje atvaizduoja automobilių sąrašą

Primenu: jeigu kontroleryje iš repozitorijos paimti duomenys išsaugoti į kintamąjį $car, tuomet ir view/ faile naudojamas $car kintamasis

1.6
index.php faile sukurkite DIContainer objektą, tuomet su new raktažodžiu sukurkite kontrolerį
Įvykdykite kontrolerį.