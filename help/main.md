#`\Rover\Params\Main` 
##Списки параметров главного модуля 
###`public static function getSysGroups($hideAdmin = false, array $params = [])`
Возвращает системные группы
* `$hideAdmin` - скрывать ли группу администраторов (2) из результата

###`public static function getEventTypes($lid = 'ru', array $params = [])`
Возвращает типы почтовых событий
* `$lid` - фильтр по языку