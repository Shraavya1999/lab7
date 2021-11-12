<?php
// Load XML file
$xml = new DOMDocument;
$xml->load('contractdet.xml');

// Load XSL file
$xsl = new DOMDocument;
$xsl->load('contractdet.xsl');

// Configure the transformer
$proc = new XSLTProcessor;

// Attach the xsl rules
$proc->importStyleSheet($xsl);

$newdoc= $proc->transformToDoc($xml);
print $newdom->saveXML();
?>