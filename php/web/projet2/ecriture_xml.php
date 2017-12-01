<?php

$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><document version="1.0">');
$xml->addAttirbute("version","1.0");
$person = $xml->addChild("person");
$person->addAttribute("id","1");
$person->addChild("last_name","CArdon");
$person->addChild("first_name","Nicolas");
echo $xml->asXml();

$dom = new DOMDocument("1.0");
$dom->preserveWhiteSpace = false;
$dom->formatOutpout = true;
$dom->loadXml($xml->asXml());
$dom->save("ressources/export2.xml");