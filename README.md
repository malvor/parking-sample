## System parkingów w mieście
Napisz program obsługi systemu parkingu w mieście. Struktura projektu:
/
- src
    - Model
    - Factory
- config.php
- index.php
- composer.json

W katalogu Model umieszczamy wszystkie klasy modeli w systemie (np. Vehicle, Parking itd.) Klasy powinny znajdować się w odpowiedniej przestrzeni nazw App\{Katalog}\{Subkatalog} (subkatalog jeżeli potrzebny) np. App\Model\Vehicle.
W katalogu Factory znajdować się powinny wszystkie klasy odpowiadające za tworzenie odpowiednich obiektów.
Założenia Projektu:
1. Klasa City to główna klasa modelu miasta, który zawiera podstawowe dane o mieście.
2. Klasy pojazdów [Car / Bus / Taxi / Bike / Motorcycle] które będą implementowały własne zachowania i stany
3. Klasy parkingów [AirportParking / BusParking / CarParking / BikeParking] oraz interfejsy dla tych parkingów
4. Interfejsy dla poszczególnych klas
5. Modele dodatkowe takie jak ParkingTicket

### Zachowania obiektów
Interfejs parkingu [ParkingInterface] powinien wymuszać następujące metody
* canCarPark() - która zwraca true/false w zależności czy na parkingu może zatrzymać się samochód osobowy
* canBusPark() - true/false - w zależności czy na parkingu może zatrzymać się bus
* canBikePark() - true/false - w zależności, czy na parkingu może zatrzymać się rower
* canMotorcyclePark() - true/false - czy na parkingu może zatrzymać się motocykl
* getCapacity() - int - zwraca ilość wszystkich dostępnych miejsc
* getFreePlaces() - int zwraca ilość wolnych miejsc
* getFreePlacesByType(string $type) - zwraca ilość miejsc dla pojazdu danego typu [np. Bus]
* getPriceList(): array - zwraca cennik dla parkingu
* getPricesByType(string $type) - zwraca cennik dla poszczególnych typów pojazdu [np. Taxi]
* parkVehicle(Vehicle $vehicle) - metoda służąca do parkowania pojazdu

Interfejs parkingu dla taksówek [TaxiAvailableParkingInterface] 
* getTaxiPlaces() - int - zwraca ilość miejsc dla taksówek

Interfejs [PublicTransportVehicleInterface] - mówi nam, że pojazd należy do transportu publicznego - 
dzięki temu, można będzie przyznać np. zniżki

Klasa [Taxi] - mówi nam, że pojazd to taksówka - można przydzielić np. zniżki lub pozwolić zaparkować, 
jeżeli inne miejsca są zajęte, a parking posiada wolne miejsca dla taxi.

## ZADANIA ##
1. Napisz klasę Money która, w folderze src/ValueObject znajdującej się w przestrzeni nazw App/ValueObject:
    * W konstruktorze przyjmie następujące parametry i przypisze do atrybutów klasy [private]:
        * amount - int - kwotę wyrażoną w int (to znaczy, że kwota 10.98 zł, będzie wyrażona jako 1098 - bez przecinka pomnożone razy 100)
        * currency - string - waluta w formie np. PLN
    * zaimplementuje następujące metody:
        * amount(): int - zwraca amount
        * currency(): string - zwraca currency
2. Napisz klasę **ParkingTicket** która:
    * posiadać będzie następujące atrybuty
        * parkingStartDate - \DateTime - datę i godzinę rozpoczęcia parkowania [wymagane przy tworzeniu klasy]
        * parkingEndDate - \DateTime - datę i godzinę zakończenia parkowania [nie wymagane przy tworzeniu klasy - default null]
        * parking - referencję (przypisany obiekt ParkingInterface) parkingu, na którym pojazd zaparkował [wymagane przy tworzeniu klasy]
        * vehicle - referencję (przypisany obiekt VehicleInterface) pojazdu, którego dotyczy parkowanie [wymagane przy tworzeniu klasy]
        * price - ostateczną cenę za którą pojazd parkował [nie wymagane przy tworzeniu klasy - default null] - ma być to obiekt klasy Money
    * Klasa powinna implementować gettery dla każdego atrybutu
    * Klasa powinna posiadać settery dla atrybutów parkingEndDate oraz price    

