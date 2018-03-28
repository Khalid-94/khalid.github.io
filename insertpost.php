<?php
extract($_POST);
$xmldoc = new DomDocument( '1.0' );
$xmldoc->preserveWhiteSpace = false;
$xmldoc->formatOutput = true;

$image = $_FILES["photo"]["name"];

if( $xml = file_get_contents( 'post.xml') ) {
    $xmldoc->loadXML( $xml, LIBXML_NOBLANKS );

    // find the headercontent tag
    $root = $xmldoc->getElementsByTagName('postDetails')->item(0);

    // create the <post> tag
    $post = $xmldoc->createElement('post');

    // add the post tag before the first element in the <headercontent> tag
    $root->insertBefore( $post, $root->firstChild );

    // create other elements and add it to the <post> tag.
    $titleElement = $xmldoc->createElement('title');
    $post->appendChild($titleElement);
    $titleText = $xmldoc->createTextNode($title);
    $titleElement->appendChild($titleText);

    $dateElement = $xmldoc->createElement('date');
    $post->appendChild($dateElement);
    $dateText = $xmldoc->createTextNode($date);
    $dateElement->appendChild($dateText);


    $detailsElement = $xmldoc->createElement('details');
    $post->appendChild($detailsElement);
    $detailsText = $xmldoc->createTextNode($details);
    $detailsElement->appendChild($detailsText);

    $imageElement = $xmldoc->createElement('image');
    $post->appendChild($imageElement);
    $imageText = $xmldoc->createTextNode($image);
    $imageElement->appendChild($imageText);



    $xmldoc->save('post.xml');


    move_uploaded_file($_FILES["photo"]["tmp_name"], "img/" . $image);
}
?>