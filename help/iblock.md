#`\Rover\Params\Iblock` ������ ���������� ����������
##`public static function getTypes(array $params = [])`
���������� ���� ����������.
##`public static function getByType($type, $siteId = null, array $params = [])`
���������� ��������� �� ����.
* `$type` - ��� ���������
* `$siteId` - ���. ������ �� �� �����
##`public static function getSections($iblockId, $withSubsections = true, array $params = [])`
���������� ������� �� id ���������
* `$iblockId` - id ���������
* `$withSubsections` - �������� �� � ��������� ����������
##`public static function getElements($iblockId, $sectionId = null, array $params = [])`
���������� �������� ���������
* `$iblockId` - id ���������
* `$sectionId` - �������������� ������ �� id ������� ���������
##`public static function getProps($iblockId, array $params = [])`
���������� �������� ���������
* `$iblockId` - id ���������