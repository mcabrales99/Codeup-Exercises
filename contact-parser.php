<?php

function parseContacts($filename)
{
    $contacts = array();

    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contents = trim($contents);
    $contentsArray = explode("\n", $contents);
    fclose($handle);
    

    foreach ($contentsArray as $line) {

        $lineArray = explode("|", $line);

        $contact = [
            'name' => $lineArray[0]/*get the name*/,
            'number' => $lineArray[1] /*number*/
        ];

        $numberPop = array_pop($contact);  

        $numberDashes = substr($numberPop, 0, 3) . "-" . substr($numberPop, 3, 3) . "-" . substr($numberPop, 6, 4);

        array_push($contact, $numberDashes);

        array_push($contacts, $contact);

    }
    return $contacts;
}    

var_dump(parseContacts('contacts.txt'));
