## System parkingów w mieście
Napisz program obsługi systemu parkingu w mieście. Struktura projektu:
/
- src 
--- Model
--- Factory
- config.php
- index.php
- composer.json
W katalogu Model umieszczamy wszystkie klasy modeli w systemie (np. Vehicle, Parking itd.) Klasy powinny znajdować się w odpowiedniej przestrzeni nazw App\{Katalog}\{Subkatalog} (subkatalog jeżeli potrzebny) np. App\Model\Vehicle.
W katalogu Factory znajdować się powinny wszystkie klasy odpowiadające za tworzenie odpowiednich obiektów.
Założenia Projektu:
1. Klasa City to główna klasa modelu miasta, który zawiera podstawowe dane o mieście.
