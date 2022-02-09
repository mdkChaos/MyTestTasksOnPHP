# Task Spliter

Необходимо разбить список на заданное число равномерных колонок. 
Число элементов в колонках не должно отличаться более чем на один элемент. Порядок следования элементов должен остаться прежним в каждом столбце. 

Например разбиение на 4-е колонки для списка - [Banh khot, Banh xeo, Bun bo Hue, Cao lau, Cha ca, Ga tan, Goi cuon, Nem ran, Pho, Rau muong] должно выглядеть следующим образом:
Banh khot  | Cao lau    | Goi cuon   | Pho
Banh xeo   | Cha ca     | Nem ran    | Rau muong
Bun bo Hue | Ga tan

Результатом выполнения задания должна быть функция следующего вида:
   function splitList($list, $n)
,где 
$list - исходный список представленный в виде массива;
$n  - число столбцов;

Результатом выполнения функции должен быть массив длиной $n, элементами которого являются колонки. Каждая колонка - массив элементов.

Для проверки работы функции можете воспользоваться тестовыми данными приведенными в таблице - PHPTestData (https://docs.google.com/spreadsheets/d/115v17w22neZSR-t6y7HRsnsFE4OGXzYbzhKMtnUZdBU/edit#gid=0).

TestCase для проверки (https://docs.google.com/document/d/1UOXelXsxvSAeDF0snOyys53QOxKNTtMn26aHWiNVIvs/edit)
