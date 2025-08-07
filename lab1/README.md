Zoo Management System



Цей проєкт є об'єктно-орієнтованою системою обліку зоопарку на PHP. Він демонструє основні принципи програмування, зокрема SOLID, DRY, KISS та інші.



Single Responsibility Principle (SRP)

Кожен клас виконує лише одну відповідальність:



Inventory.php — управління інвентаризацією (zoo/Inventory.php, рядки 9–36)



Enclosure.php — обробка вольєрів і тварин (zoo/Enclosure.php, рядки 7–22)



Employee.php — представлення працівника (zoo/Employee.php, рядки 5–11)



Animal, Lion, Elephant — представлення різних тварин



Open/Closed Principle (OCP)

Базовий клас Animal можна розширювати, не змінюючи існуючий код.

Приклади: Lion.php, Elephant.php — успадковують Animal (animals/Lion.php, рядки 5–9)



Liskov Substitution Principle (LSP)

Класи Lion і Elephant можуть використовуватись замість Animal без помилок.

Наприклад, у Enclosure::addAnimal() (zoo/Enclosure.php, рядок 17)

та в Inventory::report() (zoo/Inventory.php, рядки 16–18)



Interface Segregation Principle (ISP)

Принцип виконується через поділ класів — кожен має лише потрібні методи.

Інтерфейси як окремі структури тут не використовуються, але перевантаження не відбувається.



Dependency Inversion Principle (DIP)

Методи очікують базові типи, а не конкретні реалізації, наприклад:

Enclosure::addAnimal() використовує Animal (zoo/Enclosure.php, рядок 17)



DRY (Don't Repeat Yourself)

Код не дублюється. Створено спільні класи для повторюваних дій (наприклад, Food, Employee).



KISS (Keep It Simple, Stupid)

Кожен клас простий, містить лише основну логіку без ускладнень.



YAGNI (You Aren’t Gonna Need It)

Не реалізовано нічого зайвого. Лише ті функції, які використовуються. Наприклад, у класах немає методів, які не викликаються в index.php.



Composition Over Inheritance

Enclosure містить список тварин — це композиція. Inheritance застосовано тільки в межах тварин (Lion extends Animal), де це виправдано.



Program to Interfaces, Not Implementations

Застосовано через використання базового типу Animal у методах. Наприклад, у Enclosure (zoo/Enclosure.php, рядок 17).



Fail Fast

Код очікує правильні типи. Наприклад, у функціях типи аргументів явно задані (типізація в конструкторах, addAnimal()).



Кожен принцип підкріплений відповідним класом і функціоналом.

