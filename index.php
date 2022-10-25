<?
require_once (__DIR__.'/crest.php');
// данные для создания контакта
$params_contact = [];
$params_contact['PHONE'] = [["VALUE" => htmlspecialchars("891111111111"), "VALUE_TYPE" => "WORK"]];
$params_contact['EMAIL'] = [['VALUE' => htmlspecialchars('ya@ya.ru'), 'VALUE_TYPE' => 'WORK']];
$params_contact['UTM_CAMPAIGN'] = 'UTM_CAMPAIGN111';
$params_contact['UTM_CONTENT'] = 'UTM_CONTENT111';
$params_contact['UTM_MEDIUM'] = 'UTM_MEDIUM111';
$params_contact['UTM_SOURCE'] = 'UTM_SOURCE111';
$params_contact['UTM_TERM'] = 'UTM_TERM1111';
$params_contact['NAME'] = 'Петр';

// данные для создания лида
$params['UTM_CAMPAIGN'] = $params_contact['UTM_CAMPAIGN'];
$params['UTM_CONTENT'] = $params_contact['UTM_CONTENT'];
$params['UTM_MEDIUM'] = $params_contact['UTM_MEDIUM'];
$params['UTM_SOURCE'] = $params_contact['UTM_SOURCE'];
$params['UTM_TERM'] = $params_contact['UTM_TERM'];
$params['TITLE'] = 'Новая заявка с сайта';

$result_contact = CRest::call('crm.contact.add',[
	'fields' => $params_contact
]);

$params['CONTACT_ID'] = $result_contact['result'];

$result = CRest::call('crm.lead.add',[
	'fields' => $params
]);