# CRUD
* rujuk [din's repo](https://github.com/taqinasirr/php_mysql_SELECT_without_preparedstatements)

## Buat Database
* guna je apa2 xampp atau laragon
* guna football.sql
* boleh import

## Nak Display Data.
* pergi dekat php punya file.
* kene buat object untuk connect ke database. 
``` $mysql = mysqli("namahost","namauser","password","namadatabase") ```

* tengok guna vardump.
* tapi takleh baca. sebab kita tak faham apa yang diberi.
* kene ubah jadi associative array
* idd=> 2,nama=>apa
``` $namaObj->fetch_assoc()```
