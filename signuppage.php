<?php
extract($_POST);
$xmldoc = new DomDocument( '1.0' );
$xmldoc->preserveWhiteSpace = false;
$xmldoc->formatOutput = true;

if( $xml = file_get_contents( 'user.xml') ) {
    $xmldoc->loadXML( $xml, LIBXML_NOBLANKS );

    // find the headercontent tag
    $root = $xmldoc->getElementsByTagName('userinfo')->item(0);

    // create the <user> tag
    $user = $xmldoc->createElement('user');

    // add the user tag before the first element in the <headercontent> tag
    $root->insertBefore( $user, $root->firstChild );

    // create other elements and add it to the <user> tag.
    $fnameElement = $xmldoc->createElement('firstname');
    $user->appendChild($fnameElement);
    $fnameText = $xmldoc->createTextNode($firstname);
    $fnameElement->appendChild($fnameText);

    $lastnameElement = $xmldoc->createElement('lastname');
    $user->appendChild($lastnameElement);
    $lastnameText = $xmldoc->createTextNode($lastname);
    $lastnameElement->appendChild($lastnameText);


    $dobElement = $xmldoc->createElement('dob');
    $user->appendChild($dobElement);
    $dobText = $xmldoc->createTextNode($dob);
    $dobElement->appendChild($dobText);

    $emailElement = $xmldoc->createElement('email');
    $user->appendChild($emailElement);
    $emailText = $xmldoc->createTextNode($email);
    $emailElement->appendChild($emailText);

    $phoneElement = $xmldoc->createElement('phone');
    $user->appendChild($phoneElement);
    $phoneText = $xmldoc->createTextNode($phone);
    $phoneElement->appendChild($phoneText);

    $genderElement = $xmldoc->createElement('gender');
    $user->appendChild($genderElement);
    $genderText = $xmldoc->createTextNode($gender);
    $genderElement->appendChild($genderText);

    $usernameElement = $xmldoc->createElement('username');
    $user->appendChild($usernameElement);
    $usernameText = $xmldoc->createTextNode($username);
    $usernameElement->appendChild($usernameText);

    $passwordElement = $xmldoc->createElement('password');
    $user->appendChild($passwordElement);
    $passwordText = $xmldoc->createTextNode($password);
    $passwordElement->appendChild($passwordText);

    $addressElement = $xmldoc->createElement('address');
    $user->appendChild($addressElement);
    $addressText = $xmldoc->createTextNode($address);
    $addressElement->appendChild($addressText);

    $xmldoc->save('user.xml');
}
?>