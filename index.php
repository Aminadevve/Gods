<?php
   while (true) {
       echo "\nМеню:\n";
       echo "1. Ввести два числа\n";
       echo "2. Выполнить сложение\n";
       echo "3. Выполнить вычитание\n";
       echo "4. Выполнить деление\n";
       echo "5. Возвести число в степень\n";
       echo "6. Выход\n";
       echo "Выберите пункт меню: ";

       $choice = readline();

       switch ($choice) {
           case 1:
                $num1 = readline("Введите первое число: ");
                $num2 = readline("Введите второе число: ");
                echo "Вы ввели: $num1 и $num2\n";
                break;
           case 2:
               // Сложение (реализуем позже)
               break;
           case 3:
               // Вычитание (реализуем позже)
               break;
           case 4:
               // Деление (реализуем позже)
               break;
           case 5:
               // Возведение в степень (реализуем позже)
               break;
           case 6:
               exit;
           default:
               echo "Неверный выбор пункта меню.\n";
       }
   }
   ?>
