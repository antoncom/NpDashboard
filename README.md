

# NpDashboard

Данный модуль добавляет страницу "NetPing Dashboard" в интерфейс Zabbix.
С её помощью можно пользоваться дашбордом, не выходя из интерфейса Zabbix.

## Установка модуля: 

1. При помощи терминала перейдите в папку: /usr/share/zabbix/modules
2. Выполните команду **git clone https://github.com/antoncom/NpDashboard**
3. Смените владельца папки, например: **chown -R www-data. NpDashboard**
5. Перейдите в интерфейс Zabbix: Menu -> Administration -> Gereral -> Modules
6. Используйте кнопку "Scan directory" для вывода модуля в список модулей
7. Активируйте модуль, кликнув по ссылке "Enable/Disable"
8. Перейдите в меню Zabbix: Menu -> Configuration -> NetPing Dashboard
9. Пользуйтесь модулем.

![enter image description here](https://github.com/antoncom/NpDashboard/blob/main/screenshorts/screenshort.png)

## Настройка модуля

Модуль не требует дополнительной настройки. Но вам может понадобится изменить адрес, или порт подгружаемого в Zabbix приложения NetPing Dashboard.

При этом вы можете изменить:

* IP-адрес Dashboard
* Порт Dashboard

![enter image description here](https://github.com/antoncom/NpDashboard/blob/main/screenshorts/screenshort_code.png)




