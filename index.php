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
            $num1 = readline("Введите первое число: ");
            $num2 = readline("Введите второе число: ");
            $sum = $num1 + $num2;
            echo "Сумма: $sum\n";               break;
           case 3:
            $num1 = readline("Введите первое число: ");
            $num2 = readline("Введите второе число: ");
            if (!is_numeric($num1) || !is_numeric($num2)) {
                echo "Ошибка: Введите числовые значения.\n";
                continue;
            }
            $difference = $num1 - $num2;
            echo "Разность: $difference\n";
                           break;
           case 4:
            $num1 = readline("Введите первое число: ");
            $num2 = readline("Введите второе число: ");
            if (!is_numeric($num1) || !is_numeric($num2)) {
                echo "Ошибка: Введите числовые значения.\n";
                continue;
            }
            if ($num2 == 0) {
                echo "Ошибка: Деление на ноль невозможно.\n";
                continue;
            }
            $quotient = $num1 / $num2;
            echo "Частное: $quotient\n";
                           break;
           case 5:
            $base = readline("Введите основание: ");
            $exponent = readline("Введите показатель степени: ");
            if (!is_numeric($base) || !is_numeric($exponent)) {
                echo "Ошибка: Введите числовые значения.\n";
                continue;
            }
            $result = pow($base, $exponent);
            echo "Результат: $result\n";
                           break;
           case 6:
               exit;
           default:
               echo "Неверный выбор пункта меню.\n";
       }
   }
   ?>
